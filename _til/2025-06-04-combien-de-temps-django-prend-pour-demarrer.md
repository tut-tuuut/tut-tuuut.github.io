---
layout: til
title: Vérifier le temps que prend Django pour démarrer
tags: django
---

Via Antonin M chez Betagouv

```python
time python -c "import os; os.environ['DJANGO_SETTINGS_MODULE'] = 'TON_PROJET.settings'; import django; django.setup()"
```

