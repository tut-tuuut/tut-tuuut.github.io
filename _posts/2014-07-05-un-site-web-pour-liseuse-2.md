---
layout: post
title: "Un site web pour liseuse - l'intégration"
tags: ereader eink
categories: tech web
---

Je vous avais laissés sur votre faim voilà <del>presque une semaine</del> (ahem) un peu plus d'un mois, avec une explication du fonctionnement de l'encre électronique. Ce qu'il faut en retenir, c'est que la nuance de gris qui apparaît sur l'écran est déterminée par la quantité de billes blanches ou noires que vous voyez.

Ce principe physique de fonctionnement impose des limites, notamment en termes de performances. En effet, le changement de couleur que vous voyez sur l'écran est déterminé par un mouvement de petites billes solides. De fait, la performance de l'écran est directement dépendante de la vitesse des billes.

Et, scoop : une bille solide dans un liquide, ça va beaucoup moins vite qu'un photon ou un électron. Donc un écran à encre életronique, ça va beaucoup moins vite qu'un écran classique d'ordi ou de smartphone. Genre plusieurs milliers de fois moins vite.

En outre, je vous avais expliqué que les liseuses, pour éviter la rémanence d'images « fantômes », forçaient de temps en temps un passage par le tout noir et le tout blanc pour « trier » les billes comme il faut.

Concrètement, ça se manifeste par des sortes de « flash » de l'écran. Pour changer de couleur, un pixel passe d'abord au noir, puis au blanc, et finalement prend sa couleur finale (une nuance de gris).

Quand vous lisez un epub[^pdf] sur liseuse, vous pouvez configurer le lecteur pour que l'écran ne se rafraîchisse pas à chaque fois que vous changez de page. Par exemple, ma liseuse est configurée pour rafraîchir toutes les dix pages au lieu de trois ou quatre par défaut. Je trouve ça hyper pénible cet écran qui devient tout noir puis tout blanc… Mais les images fantômes gênent pas mal la lecture aussi. À chacun de trouver son compromis.

Quand on est dans le navigateur intégré de la liseuse, en revanche, il n'y a pas de notion de « je tourne la page » : parfois il faut faire défiler le contenu, parfois le contenu défile tout seul, parfois il est animé… Le pilote de ma liseuse gère ça en rafraîchissant les pixels par-ci par là (donc je vois des traînées noires autour des logos animés Google, par exemple), et en rafraîchissant tout l'écran une fois de temps en temps (et là, ça fait écran blanc puis écran noir avant d'afficher le nouveau contenu).

La première optimisation que vous pouvez faire pour un site liseuse, c'est : surtout, ne poussez pas l'utilisateur à faire défiler la page. Les barres de défilement n'existent pas sur liseuse. Nulle part.

Ah, ça vous change les règles de design, ça.

Il faut donner des boutons de pagination pour tout et n'importe quoi (de la description des produits aux CGV en passant par l'aide en ligne), calibrer les textes pour qu'ils rentrent sur un écran de liseuse… Avant même de parler technique, il y a déjà donc un gros travail de design et de découpage de contenu.

Le fun technique commence dès les premières lignes de l'intégration HTML/CSS. On doit prendre garde à préserver le flux naturel des éléments, et à ce titre, éviter le positionnement absolu, les flottants, etc. Pourquoi ? J'avoue que je n'ai pas la réponse à la question. Je suppose que le navigateur dessine ces éléments un peu plus tard, et que sur ce genre de machine, le « un peu plus tard » se transforme vite en « beaucoup plus tard ». (J'ai prévu de lire [ce long article][tuto-rendering], un jour…) Autant sur un ordinateur de bureau je ne me serais jamais posé la question des performances de `position:absolute`, autant, sur liseuse… J'ai l'impression de revivre ma première intégration IE6. Mais avec des propriétés CSS3. C'est un peu bizarre comme sensation.

La suite du fun technique continue quand on veut interagir avec l'utilisateur : les zones « cliquables » doivent être gigantesques pour les gros doigts des utilisateurs et les capteurs résistifs de l'écran. Il faut donner un feedback visuel le plus vite possible, sans attendre le serveur, pour que l'utilisateur n'ait pas l'impression que le bousin a planté.

Et, donc, grâce aux performances de l'écran, on ne peut pas mettre ce qu'on veut comme animation dans ces feedbacks visuels.

Par exemple, ça, c'est un désastre : ![Un loader que la liseuse n'aime pas](/img/2014/07/loader.gif)

J'ai mis un peu de temps à comprendre pourquoi la liseuse n'affiche pas bien ce genre de GIF. J'ai créé des GIF moches et un [test javascript][test] pour isoler le problème.

J'ai donc compris que pour *arriver* sur du blanc ou du noir, la liseuse n'avait pas de problème. En revanche, pour arriver sur n'importe quelle nuance de gris intermédiaire, la liseuse rafraîchit les pixels en passant par le noir et le blanc pleins[^urgh]. Je vous laisse imaginer le joli gloubi-boulga de noir, gris et blanc clignotant généré par la liseuse à qui on a donné l'innocent petit ![loader pourri](/img/2014/07/loader.gif) de tout à l'heure.

Bref. Alors je me suis dit que puisque les nuances de gris c'était compliqué, j'allais faire un gif noir et blanc et la liseuse serait contente :

![Un loader en noir et blanc](/img/2014/07/loader-ereader-moving.gif)

(Ce gif a été fabriqué avec Gimp en 10 minutes, et pourtant j'en avais des préjugés quand je m'y suis mise…)

Ce gif est grosso modo constitué d'un carré de 30 &times; 30 pixels qui bouge de 30 pixels toutes les 500 ms. Au début ça me semblait chouette, mais ça demande beaucoup de travail en continu pour l'écran (qui utilise de l'électricité uniquement pour _changer_ la couleur) : il doit agir en même temps pour passer 900 pixels noirs vers le blanc et 900 pixels blancs vers le noir, soit 1800 pixels à gérer simultanément. Et en pratique, la liseuse avait un peu de mal à faire tout ça en même temps alors au bout d'un moment elle s'est satisfaite d'un carré qui clignotait sur les deux positions du milieu.

Moi j'étais moins satisfaite.

Du coup j'ai fait un gif comme ça :

![Un autre loader en noir et blanc](/img/2014/07/loader-ereader-filling.gif)

Là, la liseuse y arrive mieux : elle n'a que 900 pixels à modifier du blanc vers le noir pendant 4 étapes, puis 900 &times; 4 pixels à modifier d'un coup à la fin. J'ai trouvé le ressenti bien meilleur avec cette solution, même si c'est une fausse barre de progression qui est en réalité un _loader_… bouh, tricheuse que je suis !

Voilà. Si j'ai d'autres anecdotes d'intégration pour liseuse et de prise de tête sur des détails débiles, je vous les livrerai avec plaisir… en essayant de ne pas trop me plaindre. ;)

[test]: /tests/shades-of-grey.html
[tuto-rendering]: http://www.html5rocks.com/en/tutorials/internals/howbrowserswork/


[^pdf]: Un epub ou un mobi (format amazon). Ces formats sont constitués grosso modo de fichiers HTML zippés, et c'est ceux-ci que les liseuses savent lire. Les fichiers PDF n'ont rien à voir avec ça et sont une plaie à lire sur liseuse.
[^urgh]: En fait, parfois, la machine arrive à gérer l'arrivée sur les nuances de gris intermédiaires sans passer par un noir ou un blanc plein… Mais plutôt quand le changement de nuance provient d'un gif animé qui change de trame, pas quand ça vient d'un événement javascript. Mais ce n'est pas valable pour toutes les nuances de gris. Ni pour tous les gifs animés. C'est la fête.
