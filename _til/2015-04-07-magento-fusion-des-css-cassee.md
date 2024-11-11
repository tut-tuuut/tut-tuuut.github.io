---
layout: til
title: Magento - fusion des CSS cassée
tags: magento
---

Magento introduit des erreurs de syntaxe si les CSS à concaténer contiennent des url() avec des quotes.

Pas bien :

```
background: #eee url( '../images/default/grid/loading.gif' ) no-repeat 5px 5px;
```

Ça donne ceci :

```
background: #eee url('https://my-domain.com/js/extjs/resources/images/default/grid/loading.gif'') no-repeat 5px 5px;
```

Certains navigateurs s’emmêlent les pinceaux avec les deux guillemets finaux.

Il faut veiller à déclarer les URL relatives sans apostrophes :

```
background: #eee url(../images/default/grid/loading.gif) no-repeat 5px 5px;
```

