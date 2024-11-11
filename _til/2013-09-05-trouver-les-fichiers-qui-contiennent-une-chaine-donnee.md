---
layout: til
title: Trouver les fichiers qui contiennent une chaîne donnée
tags: cli grep
---

```
grep -lr 9782848998299 .
```

Explications :

- `-l` pour afficher le nom du fichier et pas toute la ligne ;
- `-r` pour chercher dans le dossier courant et dans les sous-dossiers.

Attention à ne pas oublier le `.` à la fin de la commande.

