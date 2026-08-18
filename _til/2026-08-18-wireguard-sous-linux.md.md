---
layout: til
title: Wireguard sous Linux
tags:
  - linux
  - gnome
---
Importer une config Wireguard :

```bash
nmcli connection import type wireguard file MonChouetteVpn.conf
```

Empêcher la connexion automatique d'une connexion VPN wireguard :

```bash
nmcli connection modify MonChouetteVpn autoconnect no
```