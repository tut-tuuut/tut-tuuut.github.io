---
layout: til
title: str.title() marche aussi si les mots sont séparés par des underscore
tags: python
---

```
"oh_my_snake_case".title()
= "Oh_My_Snake_Case"
```

C'est utile si on veut convertir du snake_case en CamelCase. Après il ne reste plus qu'à supprimer les `_`.

