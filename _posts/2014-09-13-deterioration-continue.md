---
layout: post
title:  "Détérioration continue"
tags: assistante maternelle
categories: maternite design
---

Pas de grosse réflexion sur le monde aujourd'hui ni de grosse découverte. J'ai juste mesuré le chemin parcouru sur un de mes fichiers excel, ça m'a fait réfléchir sur l'utilisabilité des interfaces homme-machines, et je voulais vous le montrer.

Quand j'étais enceinte, le truc qui m'effrayait le plus avec ma maternité à venir, ce n'était pas l'accouchement ni les couches, ni de laisser mon bébé à une inconnue.

C'était la paperasse qui venait après la naissance.  
(J'avais déjà géré la paperasse pré-naissance sans pleurer ou presque, entre la sécu et les mutuelles… Mais la paperasse post-naissance, ça me faisait _vraiment_ peur.)

Je savais que j'allais employer une assistante maternelle pour garder Gaminette, et je craignais plus que tout de devenir « employeur » et de devoir faire des déclarations de salaire, de charge, de trucs et de machins. J'avais peur de mal le faire, de me tromper dans les calculs et que ça me retombe sur le bec plus tard, d'une façon ou d'une autre.

Ainsi, j'ai passé pas mal de temps au relais d'assistantes maternelles du quartier pour qu'on m'explique (plusieurs fois)(avec trace écrite) comment calculer le salaire net, les congés, le salaire brut, les années incomplètes ou complètes, la mensualisation et tout le tralala. 

L'accouchement et la fin du congé mat' arrivant, j'ai fini par devoir me lancer.  
L'écriture du contrat et le calcul du salaire se sont passées étonnament bien. Sur les conseils de la dame du relais, j'ai utilisé le [contrat type du département de l'Ain][contrat-ain], qui est très bien, il y a juste à compléter les infos dans des petites cases joliment tracées.

Une fois le contrat signé, j'ai prêté la Gaminette à la nounou et j'ai commencé à compter les heures (pas parce que je me languissais de revoir mon bébé, non, juste pour savoir combien j'allais devoir payer).

Pour le premier mois, Gaminette n'a été gardée que deux semaines environ. Comme elle était toute petite petite, on s'est mis d'accord avec la nounou pour que je ne lui paie pas d'indemnité de repas (je fournissais lait et biberons). Je n'avais que le salaire horaire (3,50 € net par heure, majorés de 20 % à partir de la 46<sup>e</sup> heure) et l'indemnité d'entretien (3,50 € par jour) à payer.

Par crainte de me tromper et d'oublier des éléments, j'ai stocké tout ça dans un tableur Google Documents au fur et à mesure, et ça a donné ceci :

![Mes calculs de février](/img/2014/09/excel-nounou/2-fevrier.png)

Hyper sexy, hein ?

(Non.)

Compter, c'était bien, mais après, il allait falloir déclarer tout ça à l'URSSAF. C'était ça, le truc qui m'inquiétait le plus.

En fait, ce n'est pas si terrible que ça. En l'occurrence, quand on emploie une assistante maternelle, on déclare tout sur un site dédié, dans un formulaire qui ressemble à ceci :

![Le site de Pajemploi](/img/2014/09/excel-nounou/1-pajemploi.png)

Donc sur ce mois-ci, c'était facile : j'ai déclaré la stricte vérité, à l'heure et au centime près.

À partir du deuxième mois, j'ai procédé à ce qu'on appelle la « mensualisation » du salaire de la nounou, pour qu'elle gagne à peu près la même chose tous les mois (et pour que je dépense à peu près la même chose tous les mois aussi). En gros, on calcule le nombre d'heures totales théorique sur l'année, et on divise par 12, ça donne le salaire de base à verser chaque mois.

On ajoute ensuite les indemnités d'entretien (toujours pas d'indemnité de repas) au salaire de base, ça donne le montant à écrire sur le chèque.

J'ai ajouté un onglet dans mon fichier Google Doc, et j'ai fait un truc propre : j'écrivais les données dans les cases jaunes, et dans les cases bleues j'avais les résultats des calculs (à déclarer et à payer)… Et… patatras, au moment de déclarer, je me suis rendu compte que j'avais oublié un truc et je l'ai ajouté à la va-vite à côté.

![Excel nounou, première version](/img/2014/09/excel-nounou/3-v1.png)

J'ai utilisé quelques mois ce fichier sans en modifier la structure (je dupliquais le dernier onglet, je complétais le nombre « réel » de jours d'activités du mois, je recopiais sur le chèque et sur le site de l'URSSAF).

Ensuite, à la fin du mois de mai, il a fallu calculer les congés payés acquis sur la période (février -> mai) pour les payer sur la période suivante (juin -> mai). J'ai un peu galéré pour trouver combien je devais payer la nounou au titre des congés payés, j'ai d'ailleurs arrondi un peu au hasard par moments.

Ensuite, j'ai franchement galéré pour savoir _comment_ je lui payais les congés et comment je déclarais tout <del>ce bordel</del> ça. J'ai fini par comprendre que le salaire par jour était important (c'est un peu long à expliquer), alors j'ai ajouté un petit « check » pour savoir s'il avait une valeur acceptable pour la CAF. J'ai aussi ajouté, dans le bloc « données », les informations relatives aux congés payés.

J'en ai profité pour changer le code couleur, afin de coller plus aux habitudes excel de mon mari : les données en vert, les calculs intermédiaires en gris, les résultats en jaune.

![Le site de Pajemploi](/img/2014/09/excel-nounou/4-v2.png)

On remarque au passage que j'ai ajouté des trucs sur une deuxième colonne, puis sur une troisième, pour ne pas casser les formules cachées dans les cases. Il y a aussi une case verte qui ne correspond pas à une donnée à entrer, mais bien à un résultat de calcul (c'est du formatage conditionnel).

J'avais un peu de mal à déclarer les salaires à minuit, quand j'avais sommeil, parce que je devais réfléchir à la correspondance entre les noms dans mon tableau et les noms dans le formulaire de l'URSSAF… mais je m'en sortais encore à peu près. C'était « juste un peu chiant ».

Bon. Après ça, la vie a continué. Et puis Gaminette a commencé à manger de la viande, donc la nounou a commencé à me faire payer des indemnités de repas (3 € par repas, 2 € par goûter). J'ai monstrueusement galéré pour ajouter les cases « repas » et « goûter »… Et le résultat était hautement bordélique, avec des cases un peu à droite à gauche. Il commençait doucement à être difficile à lire…

Ce bazar de cases en gras, en jaune, en vert, à gauche, à droite, avec des noms qui ne correspondaient à rien de concret côté URSSAF, c'était trop difficile à lire et trop long à expliquer. Il fallait trop réfléchir pour remplir le formulaire, alors que le but du tableau, c'était quand même de ne pas réfléchir, justement…

Alors j'ai ajouté ça dans mon tableau, en copiant _stricto sensu_ les noms des champs du site de l'URSSAF :

![Le site de Pajemploi](/img/2014/09/excel-nounou/5-v3.png)

Et j'ai tout simplement masqué les autres lignes de calcul. Ma prochaine déclaration URSSAF, je la ferai à 2 h du mat’ et je la ferai correctement quand même !

En réfléchissant à tout ça, je me dis que cette histoire toute bête de fichier excel est à garder en tête quand on conçoit des interfaces, ou qu'on leur ajoute des fonctionnalités petit à petit sans vérifier la cohérence de l'ensemble.  
À partir de quand l'utilisateur de votre produit va-t-il cesser de dire que « c'est juste un peu chiant » ou « c'est juste un peu bordélique » pour dire « c'est de la merde, je vais voir ailleurs » ?


[contrat-ain]: http://www.ain.fr/jcms/cd_10394/fiche-le-contrat-de-travail-type