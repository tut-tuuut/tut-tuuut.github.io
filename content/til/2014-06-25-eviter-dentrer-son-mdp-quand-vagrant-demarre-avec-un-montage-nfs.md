---
layout: til
title: Éviter d'entrer son mot de passe quand Vagrant démarre avec un montage NFS
tags:
---

Méthode sale si vagrant est le seul programme qui modifie les exports NFS :

```
sudo chown `whoami`:staff /etc/exports
```

Il y a une méthode plus « propre » qui consiste à [autoriser sans mot de passe certaines commandes normalement réservées au `sudo`](https://developer.hashicorp.com/vagrant/docs/synced-folders/nfs). Le seul problème c'est que je n'ai pas trop compris ce qu'il faut faire…

