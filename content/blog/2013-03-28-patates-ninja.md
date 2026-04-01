---
layout: post
title: "La boussole des patates ninja"
category: tech dessin
---

Ce soir j’ai découvert les opérateurs binaires (ou bit à bit) en programmation, et — surtout – des cas d’utilisation concrète.<!-- more --> Comme à chaque fois que je découvre un truc chouette, je suis toute contente.

![](/img/2012/binaires1.png)

J’ai expliqué tout ça à un gentil monsieur barbu, et je vais vous réexpliquer.

Noooon ! Partez pas ! J’ai dessiné des patates mignonnes et des patates ninja ! Siouplé ! \o/

Les opérateurs binaires c’est quoi ? Ce sont des opérateurs qui comparent deux trucs bit à bit. Pour ne pas effrayer les gens normaux qui pourraient passer par ici, imaginons que nous stockons nos données dans des patates, comme celle-ci :

![](/img/2012/binaires2.png)

Les patates peuvent être noires ou blanches. Elles ne peuvent pas contenir d’information plus consistante que ça, donc si on veut avoir plus d’informations, il faut utiliser plus de patates.

![](/img/2012/binaires3.png)

Les opérateurs binaires sont donc des opérateurs qui, à partir de deux groupes de patates, fabriquent un nouveau groupe de patates en comparant une par une les patates des deux premiers groupes (on dit « opérandes » quand on a une barbe et des lunettes).

Par exemple, l’opérateur `&` (« et bit-à-bit ») ne fait des patates noires que si les deux patates sont noires dans les couples qu’il compare :

![](/img/2012/binaires4.png)

L’opérateur `|` (« ou bit-à-bit ») fait une patate noire si au moins une des deux patates est noire dans la paire de patates qu’il regarde :

![](/img/2012/binaires5.png)

Et on a aussi le `^` (« ou exclusif bit-à-bit ») qui renvoie une patate noire si une et une seule des patates de la paire est noire :

![](/img/2012/binaires6.png)

Donc voilà, c’est plutôt inutile à première vue, comme ça, mais imaginez. Imaginez que vous avez un jeu — donc un programme informatique – avec une patate ninja. Comme ça :

![](/img/2012/binaires7.png)

Et elle se déplace dans un monde où il existe **4 directions** : le nord, le sud, l’est et l’ouest. **Chacune est représentée dans votre programme par un groupe de patates** (de bits) contenant chacun **une seule patate noire** :

![](/img/2012/binaires8.png)

En réalité, vous utiliserez 1, 2, 4 et 8 dans votre programme. Une sombre histoire de compter en binaire, que je ne sais expliquer qu’avec des shadoks.

Quand tout est simple, si vous voulez déplacer votre ninja de coordonnées `x` et `y, vous regardez dans quelle direction il va et vous agissez en conséquence :

<pre>
si directionDuNinja == NORD alors y_du_ninja = y_du_ninja + 1 ;
sinon si directionDuNinja == SUD alors y_du_ninja = y_du_ninja - 1 ;
sinon si directionDuNinja == EST alors x_du_ninja = x_du_ninja +1 ;
sinon si directionDuNinja == OUEST alors x_du_ninja = x_du_ninja - 1 ;
</pre>

Sauf que ! Sauf que votre ninja peut très bien aller dans deux directions à la fois. Le Sud-est, vous connaissez ? Lui aussi, manque de bol.

![](/img/2012/binaires9.png)

C’est un peu la louze là, parce qu’il va en même temps vers le sud et vers l’est. Qu’est-ce qu’on met dans la variable `directionDuNinja` ? On fait une direction `SUDEST` et on ajoute des millions de tests ?

On aurait des trucs du genre « si direction == sud ou sud-est ou sud-ouest », alors le « y_du_ninja = -1 », et des conditions en plus sur toutes les directions.

Regardons ce que ça donne quand on sort nos opérateurs binaires. D’abord, **donnons une valeur adéquate à la direction `SUDEST`…**

![](/img/2012/binaires10.png)

Et ensuite, regardons à tout hasard ce que donne l’opérateur `&`…

![](/img/2012/binaires11.png)

Oh, ça donne quelque chose qui contient une patate noire !

Et si on essaie avec le Nord…

![](/img/2012/binaires12.png)

**Que des patates blanches** ! On tient un truc pour tester des directions doubles avec des constantes simples !

En maths, on appellerait ça un **produit scalaire** : ça vaut 0 quand les deux bidules qu’on compare n’ont rien à voir l’un avec l’autre, et ça a une grosse valeur (= plein de patates noires) quand les deux bidules comparés sont très semblables.

Ya des gens qui se sont amusés à appeler ces groupes de patates des « vecteurs » et à construire tout un ensemble de théories mathématiques choupi là-dessus, qui s’appelle « l’algèbre linéaire ». Je pensais que j’avais oublié tout ça, mais les concepts me sont vite revenus quand j’ai mis les doigts dedans.

![](/img/2012/binaires13.png)

Mon neurone taupin n’est pas mort ! Vive mon neurone taupin !
