---
layout: til
title: Git push force with lease
tags: git
---

```
git push --force-with-lease
```

Évite d'écraser le travail des autres quand on fait un `git push --force`.

Plus exactement, `--force-with-lease` n’écrase pas un historique qui n’aurait pas été récupéré au préalable depuis le distant.

On combine avec `--force-if-includes` pour en outre vérifier que l’état du dépôt distant a été appliqué à notre historique local.

Je viens d'ajouter un alias : 

```
git config --global alias.pfl "push --force-with-lease --force-if-includes"
```


(MAJ 14 novembre 24 :
- ajout --force-if-includes
- ajout explications )

[Source](https://comprendre-git.com/fr/astuces/git-push-with-lease/)
