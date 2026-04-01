---
layout: til
title: Afficher la liste des branches et leur dernière modification
tags: git
---


```bash
for k in `git branch | perl -pe s/^..//`; do echo -e `git show --pretty=format:"%Cgreen%ci %Cblue%cr%Creset" $k -- | head -n 1`\\t$k; done | sort -r
```

[Source](https://stackoverflow.com/questions/2514172/listing-each-branch-and-its-last-revisions-date-in-git)

