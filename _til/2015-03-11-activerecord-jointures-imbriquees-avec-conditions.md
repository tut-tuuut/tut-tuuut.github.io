---
layout: til
tags: ror activerecord
title: Active Record - faire des jointures imbriquées avec conditions
---


[Source SO](https://stackoverflow.com/a/14528454/942590)

Try to change your where clause :

```ruby
Publication  .joins( :publication_contributors => :contributor )
  .where( :publication_contributors => {:contributor_type => "Author"}, 
          :contributors             => {:name => params[:authors]} ) 
```

ActiveRecord api is not extremely consistent here: the arguments for `where` do not work exactly as those for `joins`. This is because the arguments for `joins` do not reflect the underlying SQL, whereas the arguments for where do.


`where` accepts an hash whose keys are table names, and values are hashes (that themselves have column names as keys). It just prevents ambiguity when targetting a column that has the same name in two tables.
