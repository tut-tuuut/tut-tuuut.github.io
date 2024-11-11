---
layout: til
title: Grep sur phpinfo() en ligne de commande
tags: cli php
---

```
php -r 'phpinfo();' | grep php.ini
```

