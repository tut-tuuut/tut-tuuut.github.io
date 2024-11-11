---
layout: til
title: Django ORM - filter prefetch_related
tags: python django
---

```python
from django.db.models import Prefetch

Person.objects.filter(...)
  .prefetch_related(
    Prefetch(
      "order_set",
      queryset=Order.objects.filter(...),
      to_attr="orders_filtered"
    )
  )
```

