---
layout: til
title: Déployer une branche avec Capistrano
tags: capistrano
---

OK :

```
./bin/cap deploy -s branch=dev/thisismybranch
./bin/cap deploy -S revision=358e81487e467a982d8e85bada99260211b336f8
```

Risky :

```
./bin/cap deploy -S revision=devel/thisismybranch
```

If your local branch is not at the same stage as on origin, you will deploy origin/devel/thisismybranch, but you will tag your local commit devel/thisismybranch.

