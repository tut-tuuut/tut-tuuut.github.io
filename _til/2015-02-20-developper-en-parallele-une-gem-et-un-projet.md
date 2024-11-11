---
layout: til
tags: ruby bundler
title: Développer en parallèle sur une gem et sur un projet qui utilise cette gem
---

Pour travailler sur la gem locale : 

```
bundle config local.GEM_NAME /path/to/local/git/repository
```

Pour lister les configs de gemmes locales :

```
bundle config
```

Pour supprimer une config de gemme locale :

```
bundle config --delete local.GEM_NAME
```

