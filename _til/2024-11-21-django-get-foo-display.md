---
layout: til
title: Valeur intelligible d'un champ de modèle à choix multiples dans Django
tags: django
---

Pour avoir la valeur "jolie" d'un champ de modèle de type "liste déroulante", avec un paramètre `choices=` : il existe la méthode magique `instance.get_TRUC_display()`.

Dans un template : 

```html
{{ mon_instance.get_status_display }}
```

[Source](https://docs.djangoproject.com/en/5.1/ref/models/instances/#django.db.models.Model.get_FOO_display)

