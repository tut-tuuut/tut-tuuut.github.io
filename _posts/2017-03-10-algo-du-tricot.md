---
layout: post
title:  "L'algo du tricot"
categories: algorithmique tricot
---

Il y a quelques semaines, pour des raisons qui restent à expliquer, j'ai ressenti l'appel impérieux de ma nouvelle passion : le tricot. J'ai donc acheté une pelote et une paire d'aiguilles n<sup>o</sup> 8, et je m'y suis mise. J'ai commencé avec une vidéo youtube, puis deux, puis… puis j'ai racheté des aiguilles plus petites, et d'autres pelotes, et…

Bref, ça me plaît.

Ça me plaît même… euh… un peu trop, diraient certains.

Mais qu'importe ! Je veux vous faire partager quelques réflexions à ce sujet. Commençons par les notions de base.

## Le tricot : quelques notions de base

L'action de _tricoter_ (_to knit_ en anglais) consiste à transformer un tas de _pelotes_ de fil (de laine ou de coton) en quelque chose d'autre, généralement plus ou moins utile, appelé une _pièce_, au moyen d'une paire d'aiguilles à tricoter (ou d'un crochet). Une pièce en cours de tricotage est appelée généralement le _travail_.

J'imagine bien que vous vous demandez quelle mouche m'a piquée et où je veux en venir. Attendez un peu, et profitez de la connaissance à l'état pur qui s'offre à vous, bon sang ! Je continue.

On tricote des _mailles_ (_stitches_ en anglais), qui sont l'unité de base d'une pièce tricotée, lesquelles forment des _rangs_ (_rows_). Une maille peut être tricotée à l'endroit ou à l'envers (en anglais on parle de _knit_ ou de _purl_). Une _augmentation_ (_increase_) consiste à ajouter des mailles dans un rang. Une _diminution_… je vous laisse compléter. (Et ça se dit _decrease_ en anglais !)

On peut tricoter de deux manières :

* en _allers-retours_, où on retourne le travail à chaque fin de rang (on tricote donc la première maille du rang suivant sur la dernière maille du rang précédent),
* en _rond_, où on tricote le début du rang suivant sur la première maille du rang précédent (à l'aide d'aiguilles circulaires ou à doubles pointes).

Il est aussi possible de tricoter un bout du travail en allers-retours et un autre bout en rond. C'est open. Vous pouvez faire tout ce que vous voulez. Ça sera peut-être moche, par contre. On n'a rien sans rien.

Après mes premiers essais de -carrés- -rectangles- quadrilatères tricotés, j'ai voulu me fabriquer quelque chose, pour moi. Mais comme j'étais toute débutante, j'ai cherché des idées et des conseils sur le grand internet du monde…

…et au fil (haha) de ma navigation, j'ai trouvé des idées. Plein !

## Ravelry : le réseau social des tricoteuses et tricoteurs

Oui, il existe un réseau social dédié au tricot et au crochet. Le site s'appelle Ravelry. Il contient un catalogue immense de modèles partagés par les membres, souvent gracieusement. On y trouve des instructions pour tricoter des chaussettes, des moufles, des pulls, des chauffe-épaules, des couvertures…

Évidemment, je me suis empressée de créer un compte dessus. Toute cette potentialité de tricot qui s'ouvrait à moi, c'était génial ! J'allais pouvoir me changer les idées du boulot ! PARFAIT !

J'ai téléchargé des dizaines de PDF d'instructions en m'exclamant « ce bonnet est trop beau », ou « j'adore ces mitaines », ou encore « il faut que je me fasse ce pull ». Et puis… et puis j'ai ouvert un des fichiers PDF sus-mentionnés. Voici ce que j'ai vu :

![(RS) kfab, *kfab, slipm, kfab, knit to one st before sm; repeat from * twice, kfab, slipm, kfab, kfab. (10 sts inc.)](/img/2017/knit-wut.png)

J'ai eu à peu près la même réaction que vous, je crois.

![WHAT??](/img/2017/lolwut.jpg)

Bon, après j'ai cherché un peu dans le PDF et il expliquait tout bien les abréviations utilisées :

> - **k** knit
> - **k2tog** knit 2 stitches together
> - **kfab** knit into the front and back of stitch
> - **LH** Left Hand
> - **m1** make one - increase by picking up the bar between the stitches from the front with the left needle and knit it through the back of the picked up bar.
> - **p** purl
> - **RH** Right Hand
> - **RS** Right Side
> - **slipm** slip marker from left needle to the right needle sm stitch marker
> - **SOR** Start of Round
> - **ssk** slip slip knit - Slip two stitches knit-wise one at a time. Use left needle to knit through both stitches to decrease.
> - **st/s** stitch/es


Après je suis retournée voir les instructions. Je les ai relues avec attention.

Et là, j'ai enfin compris.

## Écrire un modèle de tricot, c'est comme écrire un programme

Mais vraiment.

Écrire `kfab` au lieu de `knit into the front and back of stitch`, c'est définir une fonction pour alléger le code.

Et `*kfab, slipm, kfab, knit to one st before sm; répéter deux fois depuis *`, en programmation, ça s'appelle une boucle `for`.

Et ces gros tableaux imbitables en fonction de la taille du vêtement que l'on tricote, c'est presque une utilisation de variables. (Ou en tout cas ça serait bien !)

On a aussi des boucles `while`. Par exemple, « tricoter tout à l'envers, puis tricoter tout à l'endroit, répéter ces deux rangs _jusqu'à ce que la pièce mesure 30 cm_ ».

On a même une notion de somme de contrôle : je croise souvent des _à la fin de ce rang, vous devriez avoir 118 mailles_.

Qu'on ne vienne pas me répéter que les nanas ne savent pas coder : celles qui écrivent des modèles de tricot font preuve d'une capacité d'abstraction et de modélisation plutôt remarquable. Sans parler de la concentration nécessaire pour comprendre puis suivre un modèle sans se tromper.

(Fin de la parenthèse féministe.)

## Poussons la métaphore encore plus loin

Si le modèle, c'est le programme, ne boudons pas le plaisir de creuser la question encore plus !

Le programmeur, c'est la personne qui écrit le programme, donc ici, l'auteure du modèle. Le processeur, la machine qui exécute le programme… ce serait… la tricoteuse ? Moi, donc ?

Les pelotes sont les données d'entrées, le pull est la donnée de sortie, le résultat de l'exécution du programme. Les aiguilles sont… la tête d'écriture sur le disque dur ?

On a des programmes qui se prêtent bien au multi-thread (on peut se mettre à plusieurs tricoteuses pour fabriquer chacune un carré de couverture et tout assembler à la fin) et d'autres, pas du tout (un pull tricoté en rond sans couture, il faut le faire seule… ou à la limite on peut se mettre chacune sur une manche vers la fin).

Sinon, plus subtil : vous savez qu'un programme est analysé par l'ordinateur pour en faire des instructions qu'il comprend (on parle de langage machine, bas niveau). La plupart des langages de programmation ont plusieurs niveaux d'abstraction. Je sais que mon cerveau n'est pas capable d'interpréter directement les instructions complexes ci-dessus. J'ai besoin de les redécouper en instructions plus simples (quoique pas forcément élémentaires) : au lieu de « répéter les deux rangs précédents 8 fois », je vais me faire un fichier excel avec 9 fois les deux rangs décrits, et je vais les cocher au fur et à mesure. J'hésite entre une analogie entre le langage machine ou simplement l'opcode de PHP. L'opcode, c'est encore du "relativement" haut niveau (du genre "je tricote 118 mailles à l'endroit, une augmentation, 2 mailles à l'endroit…"). Le langage machine, ce serait plutôt "je pique l'aiguille dans la maille, j'enroule le fil et je ramène l'aiguille"

![Alternance débile de rangs normaux et de rangs d'augmentation, dont les 8 premiers sont cochés](/img/2017/excel-tricot.png)

D'ailleurs je vois en écrivant cette note qu'il manque 3 rangs d'augmentations dans mon excel… Cela pourrait expliquer que mon truc ait l'air trop petit. Je vais recompter.

(Oui, je fais des excel de tricot, et j'assume. Voilà.)
(Ah oui et effectivement, je tricote en franglais. Ça va plus vite de dire _knit_ et _purl_ dans ma tête que _tricoter une maille à l'endroit_ et _tricoter une maille à l'envers_ !)
