---
layout: til
title: Supprimer des branches
tags: git
---

Pour supprimer une branche locale :

```
git branch -d the_local_branch
```

Pour supprimer une branche distante :

```
git push origin :the_remote_branch
```


Si quelqu'un a déjà supprimé la branche distante :

```
git fetch -p
```

[Source](https://makandracards.com/makandra/621-git-delete-branch-local-remote)
