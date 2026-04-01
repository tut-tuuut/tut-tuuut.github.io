---
layout: til
title: Lancer une commande CasperJS
tags: casperjs
---

Commande de base :

```
casperjs --includes=config/config-.coffee,config/client/.coffee test create-new-pn-client.coffee
```

La variable `test` est un hack qui permet d'inclure plusieurs fichiers de configuration.

Pour ignorer les erreurs de certificats HTTPS, ajouter l'option `--ignore-ssl-errors=yes`.

