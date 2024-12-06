---
layout: til
title: Routes vers l’admin Django
tags: django
---

Comment faire des liens vers des listes ou des formulaires dans l'admin Django ?
Je suis allée voir dans le code source.

```python
"admin:%s_%s_add" % (opts.app_label, opts.model_name)

"admin:%s_%s_changelist" % (self.opts.app_label, self.opts.model_name),
```

