---
layout: til
title: Git push force with lease
tags: git
---

```
git push --force-with-lease
```

Évite d'écraser le travail des autres quand on fait un git push force.

Idée d'alias : 


```
git config --global alias.pfl "push --force-with-lease"
```