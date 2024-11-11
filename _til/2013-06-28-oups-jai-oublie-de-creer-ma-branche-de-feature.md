---
layout: til
title: Oups j'ai oublié de créer ma branche de feature
tags: git
---

If you have

```
...-*-*-*-X-*-*-*-*-A 
```


On branch A and X is the commit where you meant to create a new branch B starting at X you can simply

```
git checkout A
git branch B
git reset --hard X
```

or simply

```
git branch -m A B
git branch -f A X
```

If, on the other hand, you wanted to start B from a different commit Y, you will need to rebase:

```
git branch B A
git branch -f A X
git rebase --onto Y A B
```

After backing up, of course ;)

