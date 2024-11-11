---
layout: til
title: pip-compile échoue et ne me dit pas pourquoi
tags: pip piptools python
---

Parfois `pip-compile` se prend les pieds dans le tapis avec une erreur toute nulle : 

```
failed to parse pyproject.toml
```

Pour avoir une erreur claire : 

```
pip install -e .
```

Aujourd'hui, le problème, c'était le répertoire du projet Django à côté de deux répertoires qui cassaient l'autodiscovery.

Pour résoudre, deux possibilités de modif du package.toml :

```
[tools.setuptools]
py-modules=[]
```

ou bien : 

```
packages = ["mon package"]
```
