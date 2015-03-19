---
layout: post
title: "Un site web pour liseuse"
tags: ereader eink
categories: tech web
---

Au travail, je bosse sur des sites web qui servent à vendre des ebooks sur liseuse. C'est quelque chose d'assez… comment dire ? Gratifiant, mais souvent très compliqué.<!-- more -->

La performance sur liseuse, ce n'est pas la même chose que sur le web. Pour faire un site web performant, il existe plein de conseils simples à appliquer : compression gzip, cache, éviter de faire plein de merdouilles en JS ou 500 requêtes MySQL par page, etc.

Tout ça parce que sur un site web « normal », l'essentiel de la lenteur est en fait de la latence réseau ou de la lenteur serveur. En réduisant le nombre d'appels réseau et en se débrouillant bien sur un serveur, on gagne du temps et on devient riche.

Sur un site liseuse, on a le même genre de problématiques évidemment : un gros JS pourri ou un serveur très lent, ça n'aide pas.

Mais sur une liseuse, on a un autre facteur de lenteur : la liseuse. Plus exactement, *l'écran de la liseuse*. Le reste de la machine est somme toute un ordinateur plutôt acceptable, même si ce n'est pas le rêve non plus.

Donc. Un écran de liseuse, c'est lent ? Allons. Tu exagères, Agnès. C'est pas l'écran qui est lent, tout ça c'est ta tête.

Non.

Un écran de liseuse c'est *vraiment* lent.

Pourquoi ? C'est lié à la technologie utilisée pour les écrans « à encre électronique ». Il s'agit de capsules renfermant des petites particules teintées en suspension dans un liquide transparent. Ces capsules sont flanquées de deux électrodes (une « en haut » côté écran, une « en bas » côté invisible pour le lecteur.)

![Principe de l'encre électronique](/img/2014/06/e-ink-principe.png)
(Image de Senarclens pompée [ici][source-e-ink] sous licence CC By-SA 3.0)

Quand les petites boules blanches sont « en haut », vous voyez du blanc. Quand les petites boules noires sont en haut, vous voyez du noir.


Pour changer la couleur d'un pixel, on applique une tension entre les électrodes : les boules blanches et les boules noires se déplacent pour aller vers le potentiel qui leur plaît le mieux. Quand on relâche la tension, les boules restent à leur place.

Voilà pour le principe : en théorie ça marche bien. D'ailleurs, pour le noir et le blanc, ça marche bien : 120 ms sont nécessaires pour passer de l'un à l'autre.

Mais quand on veut des nuances de gris, ça se corse. Et pour une liseuse, vous voulez des nuances de gris, croyez-moi.[^blague-nulle-50-nuances] Vous ne voulez pas lire un roman entier avec juste du noir et du blanc. Vous voulez des nuances pour adoucir le contour des lettres.

Et l'encre électronique, pour le gris, c'est déjà moins puissant. Pour faire du gris, je ne sais pas exactement comment on fait : je me contente de supposer. En l'occurrence, je suppose que l'on applique une tension moins extrême que pour du noir ou du blanc. Les billes vont donc se déplacer vers le potentiel qui les branche, mais moins vite, et elles iront moins loin.

Les particules forment donc, je suppose, un gloubi-boulga situé plus ou moins haut. Selon qu'on voit plus de noir ou plus de blanc, ça donne une nuance de gris plus ou moins foncée.

![Principe de l'encre électronique](/img/2014/06/e-ink-gris.png)

Le problème c'est que ces particules, au bout d'un moment, si on ne leur demande de faire que du gris clair ou du gris foncé, elles finissent par faire un gris moyen : à force d'errer plus ou moins d'un côté ou de l'autre sans grande conviction, elles restent au milieu parce qu'une de leurs copines leur bouche le chemin.

Cela donne des artefacts à l'écran, ce qu'on appelle des « images fantômes ». Elles sont dues à des billes qui ne sont pas à leur place car on ne leur a pas botté le train assez fort.

Pour éviter ça, les fabricants d'e-ink (et surtout les fabricants de pilotes pour écrans e-ink) ont trouvé une parade : de temps en temps, ils donnent un grand coup de tension pour y recoller toutes les billes blanches en bas et toutes les billes noires en haut, puis vice versa.

Un « truc » à savoir pour donner une impression de vitesse sur un site web pour liseuse, c'est donc de savoir dans quel cas l'écran va se « rafraîchir » en passant par le noir et le blanc, pour pouvoir éviter les déconvenues et même profiter de ce « refresh ».

Je vous en parlerai plus en détail demain (ou plus tard, selon ce que racontent les dents de Minimoi), parce que là j'ai sommeil.

Demain je vous raconterai comment ma liseuse a vécu ce GIF :

![1500 ms de délai entre 2 frames](/img/2014/06/1500ms.gif)

…et comment elle n'a pas très bien vécu celui-ci :

![150 ms de délai entre 2 frames](/img/2014/06/150ms.gif)


[^blague-nulle-50-nuances]: Et pas seulement si vous lisez des romans NSFW. (Ceci était une note du comité des blagues nulles. Merci.)

[source-e-ink]: http://commons.wikimedia.org/wiki/File:Electrophoretic_display_001.svg#mediaviewer/File:Electrophoretic_display_001.svg
