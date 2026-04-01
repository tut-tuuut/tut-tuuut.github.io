---
layout: til
title: Sécurité des iframes
tags: iframe web
---

### Option historique : `X-frame-options`.

- Accepte DENY : impossible d'inclure le site dans une iframe ;
- ou SAMEORIGIN : seulement possible d'iframer le site depuis lui-même.

### Option actuelle : CSP frame-ancestors

Utiliser cette option de CSP en combinaison avec `X-frame-options: DENY`.

Compatible chrome, firefox, safari 10+, Edge 15+, mais incompatible IE.  
Interroger les usagers/logs pour connaître les navigateurs.

