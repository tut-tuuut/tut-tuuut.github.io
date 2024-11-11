---
layout: til
title: Sauvegarder les résultats de request.sql dans result.txt
tags: mysql cli
---

```
mysql -ublabla -h le-host -p --batch lenomdeladb < request.sql > result.txt
```

Juste pour me souvenir que ça marche, et que ce n'est pas la peine de re-googler à chaque fois.

