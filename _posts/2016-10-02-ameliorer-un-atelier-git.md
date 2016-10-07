---
layout: post
title:  "Réflexions pour améliorer un atelier git"
categories: conférence technique git
tags: conférence technique git
---

J'ai donné cette année, en binôme avec Guillaume, un atelier d'1h30 à Paris Web, intitulé _Git is choupi_. J'ai eu des bons retours, mais je n'en suis pas tout à fait satisfaite alors je livre ici en brut ce qui a mal marché à mon goût et comment j'imagine que je pourrais l'améliorer.

## Avant l'atelier

On a essayé de sonder le public via twitter pour avoir une idée du niveau des participants. Pour ça, on a fait un google form très court où on demandait en gros aux participants s'ils avaient déjà utilisé un gestionnaire de versions et si ils avaient déjà vu/utilisé une liste de commandes git données. Il y avait aussi un champ texte libre.

En décortiquant les réponses, on a évalué que le public « cible » ça allait être des gens qui ont déjà touché un peu à git mais qui ont peur de l'utiliser à pleine puissance (en utilisant des branches) ou qui font des trucs un peu au hasard. On a donc construit notre présentation avec les objectifs suivants :

* montrer comment visualiser le graphe des commits,
* expliquer la signification des principales opérations (commit, merge, rebase, etc.) sur ce dernier,
* manipuler la ligne de commande git plutôt que le client graphique,
* ouvrir vers d'autres horizons en fonction des réponses au champ texte libre (dépôts distants, workflows).

On avait aussi précisé, dans la description de l'atelier, qu'il était important d'avoir git installé sur l'ordinateur avant de venir. D'expérience, je sais que les wifi des écoles où ont lieu les ateliers paris web ont souvent des <abbr name="proxy à la con">PALC</abbr> qui compliquent singulièrement l'utilisation de quoi que ce soit d'autre que HTTP sur le wifi. Exit donc en général les `apt-get install` et autres `brew install`.

Là où on a commis notre première petite erreur, c'est qu'on a oublié de mettre à jour la description de l'atelier quand on a décidé qu'il faudrait aussi gitk.

## Comment s'est déroulé l'atelier

La salle a été complète dès 14h15 pour l'atelier qui commençait à 14h30. J'ai fait quelques tours de salle pendant qu'elle se remplissait pour redemander aux personnes qui étaient là si elles avaient déjà installé git, et de s'en occuper le cas échéant dans la mesure du possible.

Le principe initial était de partager les diapos entre Guillaume et moi selon les sujets que l'on maîtrisait le mieux. Finalement, Guillaume a fait l'essentiel de la présentation pendant que je tentais de démêler les problèmes des participants.

Comme je le craignais, il y a eu quelques « j'ai pas installé git, comment je fais ? » dès le premier exercice. Comme je le craignais, le <abbr name="Proxy à la con">PALC</abbr> de l'école empêchait l'installation de git et gitk via apt-get et autres homebrew. Nous avons donc dû nous débrouiller avec les installeurs sourceforge et avec `git log --graph`.

Ce que je n'avais pas anticipé, par contre, c'est qu'il y avait aussi de grands débutants en ligne de commande : j'ai dû expliquer `mkdir` et `pwd` à deux personnes et le fonctionnement de vim à quelques autres. Ce n'est pas tant d'avoir dû l'expliquer qui m'embête (moi aussi j'ai été une n00b et il m'a fallu du temps pour être efficace au travail), mais plutôt d'avoir dû l'expliquer plusieurs fois en les distrayant de la partie « git » qui était le cœur de l'atelier, et en m'empêchant de m'occuper des participants qui étaient davantage notre cible.

À part ça j'ai découvert des bugs windows auxquels je n'ai strictement rien compris, j'ai voulu expliquer les branches à l'aide d'une métaphore « retour vers le futur » à une fille à qui ça a fait très peur et j'ai empêché plusieurs personnes de commiter tout leur dossier utilisateur dans un dépôt git local.

## À essayer la prochaine fois

Je suis embêtée à l'idée de laisser en plan les grands débutants. Tous les gourous de la ligne de commande ont un jour dû apprendre à taper leur premier `mkdir`. Par contre, j'aimerais n'avoir besoin d'expliquer qu'une seule fois et pas autant qu'il y a de débutants : je caresse l'idée de regrouper les participants par groupes de niveau dans la salle.

Dans ce cas, comment aider les participants à auto-évaluer leur niveau ? Peut-être en affichant au mur `mkdir plop` puis `:wq` et un peu plus loin `git commit -m "Youpi"` et encore un peu plus loin `git rebase --interactive master`. On leur demande de s'assoir à la première affichette qu'ils ne comprennent pas.

Une piste à suivre pourrait aussi être de proposer un atelier « ligne de commande » avant l'atelier « git ». Je garde cette idée pour la prochaine fois que j'assiste à un événement où le public propose des sujets (les informelles paris web ou les ateliers Sud Web, par exemple).
