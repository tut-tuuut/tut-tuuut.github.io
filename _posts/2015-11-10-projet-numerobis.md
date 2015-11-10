---
layout: post
title: "Projet numérobis"
category: geekerie bizarre
tags: bash git
excerpt: "Une femme apprend qu'elle est enceinte… si en plus elle sait écrire un peu de bash, ça donne des trucs marrants."
---

Bon.

Je suis enceinte de mon deuxième enfant (yeah !).

J'ai découvert ça mi-mai, le douzième jour de vie de l'embryon : la deuxième barre était très timide, mais indubitablement elle était là. En même temps, j'avais commencé depuis plusieurs jours déjà à manger un deuxième petit-déjeuner à 5 heures du mat’, c'est le genre de signe qui m'avait mis une grosse puce à l'oreille. Là j'en suis à 6 mois, j'ai un gros ventre et j'ai toujours faim à 5 heures du mat’.

Bref. Ce n'est pas le cœur du sujet de l'article d'aujourd'hui (même si ça y participe pas mal). Non, ce que je veux aborder avec vous aujourd'hui, c'est le truc inavouable que j'ai fait en début de grossesse, peu de temps après avoir donné à mon embryon tout neuf son surnom de Numérobis.

Il faut que je vous explique. J'ADORE les barres de progression. Tout part de ces barres de progression. J'adore les voir se remplir au fil des jours, au fil de mon travail. Et il se trouve que parfois, j'atterris sur les forums de futures mamans, et que je vois ça :

![Des barres de progression qui disent quand arrive le bébé](/img/2015/11/doctissimo.png)

Alors certes il y a des fautes, mais surtout, il y a ces espèces de réglettes qui changent un peu chaque jour et qui arrivent au bout le jour de la date théorique du terme. COMMENT VOULEZ-VOUS QUE JE RÉSISTE À ÇA ? Surtout à 5 heures du matin, alors que la plupart de mes neurones dorment encore…

Et en plus, il y a des réglettes de grossesse qui donnent des infos sur le développement du bébé, au lieu de juste superposer un lutin sur un arrière-plan débile :

![Un exemple de réglette instructive : Numérobis is 7.5cm & 30g. Fingers close and toes curl when hands or feet are tickled. Numérobis is 12 weeks & 2 days along. 192 days to go!](/img/2015/11/exemple-instructif.png)

Bref. Du coup, je me suis mis en tête de créer un COMPARATIF DES RÉGLETTES DE GROSSESSE. Je voulais tout savoir. Et surtout, je voulais admirer ces petites réglettes qui se remplissaient au fur et à mesure des jours.

Donc j'ai fait le tour de plein de sites web, essentiellement américains, qui proposaient des _rulers_ pour insérer dans ma signature de forum. Par exemple, [lilypie](http://lilypie.com/) semble être un site dédié aux barres de progression au format PNG, et propose plusieurs variétés de réglettes de grossesse résumant les étapes de développement du fœtus.

J'ai un peu galéré à caler tous les sites sur la même date de début de grossesse : les américains considèrent qu'une grossesse se termine à 40 semaines d'aménorrhée (soit 38 semaines de grossesse « réelle ») mais les français sont plus cool et me laissent une semaine de plus (41 SA) avant d'accoucher. Et puis entre ceux qui me demandent la date des dernières règles (fausse, parce que mes cycles sont inventifs) ou ma date prévue d'accouchement (sans préciser s'ils comptent 40 ou 41 semaines), j'ai mis quelque temps à tout caler comme il faut.

Mais voilà, au bout de quelques efforts, j'avais sept (oui, sept) signatures de forum prêtes à l'emploi pour exhiber fièrement <del>la date de mon dernier rapport seskuel</del> mon fœtus parfait.

J'ai commencé par me fabriquer une petite page web qui affichait simultanément toutes les barres de progression.

![Whéééé des barres de progression partouuut wééé](/img/2015/11/apercu.png)

Mais ça ne me suffisait pas. Je voulais aussi un HISTORIQUE.

![Whéééé une barre de progression qui bouge](/img/2015/11/animated.gif)

Donc j'ai écrit un programme pour automatiser le truc : chaque jour, il irait récupérer les images sur les sites, et il les sauvegarderait quelque part sur mon disque. Comme ça à la fin je pourrais faire un gif animé (effectivement, j'ai pu).

{% highlight bash %}
count=0
for URL in "${URLS[@]}"; do
  TARGET="images/${TARGETS[$count]}/${DATE}.png"
  if [ ! -f "$TARGET" -o ! -s "$TARGET" ]
    then
    /usr/local/bin/wget "$URL" -O "$TARGET"
  fi
  count=$(( count + 1 ))
done
{% endhighlight %}

Voilà. Oui. J'ai écrit un programme pour récupérer automatiquement toutes mes réglettes. Non seulement ça, mais en plus j'ai dû RÉFLÉCHIR pour ça parce que j'avais jamais manipulé de tableaux en bash. Là pour ma première fois, j'ai dû parcourir en parallèle deux tableaux (l'un contenait les URL sources, l'autre les dossiers où je voulais sauvegarder les images).

J'ai quand même poussé le vice (si, si) jusqu'à commiter automatiquement les images dans un dépôt git au fur et à mesure qu'on les récupérait. EN CRÉANT UNE NOUVELLE BRANCHE POUR CHAQUE JOUR et en la fusionnant proprement dans la branche master.

Là, laissez-moi me poser poliment la question suivante :

C'EST PAS POSSIBLE SÉRIEUX J'AVAIS VRAIMENT RIEN D'AUTRE À FAIRE DE MA VIE À CE MOMENT-LÀ OU QUOI ?

![Whéééé un arbre des commits tout propre](/img/2015/11/commits-git.png)

Et j'ai dit à mon ordi de lancer ce programme tous les après-midi (à un moment où j'aurais probablement mon ordinateur allumé). Voici un extrait de ma crontab :

    */5 12-23 * * * cd /le/projet/numerobis &&
         ./reglettes.sh >> /le/projet/numerobis/log/crontab.log 2>&1

Et après, j'ai plus ou moins complètement oublié ce truc pendant 5 mois (il se trouve qu'en fait, j'_avais_ autre chose à faire de ma vie).

Sauf que mon ordi, il n'a pas oublié, lui.

Et il a très patiemment continué de télécharger les images, à peu près tous les jours (s'il était allumé) en les commitant dans un dépôt git, me fabriquant ce merveilleux… euh… historique instructif.

Bon, c'est rigolo, non ? Ça bouuuuge !

![Whéééé une barre de progression qui bouge](/img/2015/11/animated.gif)

 Je pourrais peut-être adapter le script pour les barres de progression du nanowrimo… En attendant, [il est open source depuis peu](https://bitbucket.org/tut_tuuut/numerobis/src/0d6d62fdb94005aa0b58b93970f7b6bae57228e7/reglettes.sh?at=master&fileviewer=file-view-default).
