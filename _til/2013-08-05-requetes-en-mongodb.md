---
layout: til
title: Requêtes en MongoDB
tags: mongodb
---

« where distribution is not null » :

```
db.ebooks.findOne({distribution: {$ne: null}})
```

« where distribution is null » :

```
db.ebooks.count({distribution:null})
```

Avec des embedded documents ça marche aussi :

```
db.ebooks.count({"distribution.global":{$ne : null}})
```


