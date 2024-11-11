---
layout: til
title: Réparer un arbre wagtail
tags: python django wagtail
---

Souvent j'ai cette erreur quand je manipule "programmatiquement" des pages Wagtail : 

> NoneType object has no attribute _inc_path

Pour ça :

```
mana fixtree --full
```


(NB. `mana` est un alias pour `python manage.py` 🧙)


