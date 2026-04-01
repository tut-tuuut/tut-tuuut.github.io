---
layout: til
title: Docker-compose build . - qu'est-ce que ça fait donc ?
tags: docker dockercompose
---

Dans un fichier docker-compose :

```
build .
image: truc
```

Build l'image à partir du Dockerfile, et la tague "truc" pour économiser le temps de build.

