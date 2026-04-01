---
layout: til
title: Faire le ménage dans un dépôt git
tags: git cli
---

Supprimer toutes les branches déjà mergées dans la branche courante :

```
git branch --merged | grep -v "\*" | xargs -n 1 git branch -d
```

Supprimer toutes les branches déjà mergées dans le master du remote :

```
git branch -r --merged | grep -v master | sed 's/origin\//:/' | xargs -n 1 git push origin
```

Supprimer les branches qui existent en local mais pointent sur une branche supprimée du remote :

```
git fetch -p
```

(`-p` comme « prune ».)

