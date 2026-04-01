---
layout: til
title: Le patch suhoshin et les fichiers .phar
tags: php
---

Exécuter le script de vérification :

```
curl http://getcomposer.org/installer | php
```

Il y a des chances pour qu'il demande d'ajouter ceci dans un php.ini quelque part :

```
suhosin.executor.include.whitelist = phar
```
