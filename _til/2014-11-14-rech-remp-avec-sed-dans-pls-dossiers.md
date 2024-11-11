---
layout: til
title: Rechercher et remplacer avec sed dans plusieurs dossiers
tags: cli
---

```bash
find ./prefixe-du-dossier-* -type f -exec sed -ibak -e 's#search#replace#g' {} \;
```
