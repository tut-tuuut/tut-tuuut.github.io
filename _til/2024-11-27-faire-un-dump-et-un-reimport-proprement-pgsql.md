---
layout: til
title: Faire un dump et l´importer proprement en PostgreSQL
tags: pgsql
---

Faire un dump sans les infos de propriétaire et de privilèges :

```
pg_dump --format=custom --no-owner --no-privileges lenomdemabase > lenomdemabase.pgdump
```

Restaurer le dump :

```
pg_restore --format=custom --no-owner --no-privileges --dbname lenomdemabase --username lenomdemonuser lenomdemabase.pgdump
```

Dans le `pg_restore` la partie `--username lenomdemonuser` est TRÈS importante.

Sinon le user propriétaire des tables sera `postgres` et ça va poser des problèmes. 
