---
layout: til
title: Restaurer un fichier supprimé
tags: git
---

Trouver le commit qui a servi à supprimer le fichier :

```
git rev-list -n 1 HEAD -- 
```

Restaurer le fichier :

```
git checkout ^ -- 
```

