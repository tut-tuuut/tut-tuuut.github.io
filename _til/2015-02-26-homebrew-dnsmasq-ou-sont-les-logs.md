---
layout: til
tags: dnsmasq
title: Dnsmasq sous Homebrew - mais où sont les logs ?
---

Les logs de dnsmasq sont dans `/var/log/system.log`. Donc pour voir ce que dnsmasq a logué :

```
grep dnsmasq /var/log/system.log
```

Souvent, chez moi, les erreurs sont assez claires :

> dnsmasq[52895]: error at line 1 of /etc/dnsmasq.d/tea-solr
> dnsmasq[52895]: FAILED to start up


