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

PALC qui empêche l'installation de trucs (git et gitk) via homebrew

=> on s'est démerdés avec les installeurs sourceforge et git log --graph

2-3 « j'ai pas installé git comment je fais » dès le premier exercice

explication des bases de la CLI à qq-uns et celles de vim à beaucoup

3-4 personnes qui font un `git init` dans leur dossier home (je les ai repêchés avant qu'ils fassent un `git add . && git commit -m "yolooo"`)

j'ai voulu expliquer les branches en utilisant une métaphore retour vers le futur, la nana a eu vraiment très peur de moi :'(


des bugs inédits sur windows

## Bilan


