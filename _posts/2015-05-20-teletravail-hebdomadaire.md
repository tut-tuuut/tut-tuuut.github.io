---
layout: post
title: "Un retour d'expérience sur du télétravail hebdomadaire"
tags: travail télétravail
categories: travail
---

Depuis six mois, je télétravaille à peu près tous les mardis. Comment en suis-je arrivée là et comment ça se passe pour moi ? <!-- more -->

## Pourquoi j'ai commencé le télétravail régulier

_tl;dr;_ Parce que les transports me coûtaient cher en temps et en euros.

Avant, j'habitais à 10 minutes à pied de mon travail, dans le 8<sup>e</sup> arrondissement de Lyon. Je ne perdais donc pas de temps dans les transports : le temps que je payais l'assistante maternelle pour s'occuper de Gaminette était essentiellement du temps de travail (elle faisait quand même de belles semaines de 48 heures…).

J'arrivais au travail vers 9h05-9h10 et je repartais tranquillement à 18h15, je pouvais tirer jusqu'à presque 18h30 de temps à autre sans rallonger le salaire de la nounou trop conséquemment.

En novembre 2014, ma boîte a déménagé pour des locaux beaucoup plus agréables à vivre (oui parce que dans le 8<sup>e</sup> on devait choisir entre les WC avec cuvette ou les WC avec lumière, par exemple) situés dans le 9<sup>e</sup>, soit… à l'autre bout de la ville.[^arrondissements-lyon]

J'ai rapidement fait le calcul : je passais de 10 minutes à plus de 40 minutes de trajet. Si je voulais garder le même volume horaire de travail, je devais payer la nounou 5 heures de plus par semaine.

Après quelques tâtonnements, j'ai réaménagé mes horaires de présence dans l'entreprise : de 9h - 18h15, je suis progressivement arrivée à l'intervalle 9h30 - 18h, sans possibilité de rallonger outre mesure. J'ai raccourci ma pause midi en conséquence, soit en partant manger plus tard, soit en reprenant le travail plus tôt, selon les horaires.

Mais cela impliquait quand même de payer ma nounou 50 heures au lieu de 48 heures hebdo, et ça m'embêtait à cause de la limite légale de 48h par semaine (et aussi du prix, hein). Surtout que sur ces 50 heures, il y en avait presque 8 que je passais dans les transports. 

Les transports me coûtaient donc 30 € par mois de carte TCL + 30 € par _semaine_ de nounou… pour faire des sudoku entourée de gens qui font la gueule, ça faisait un peu cher à mon goût.

J'ai donc demandé à mon chef un jour de télétravail régulier par semaine afin de redescendre la nounou à 48h par semaine et gagner un peu de temps de travail. En résumé, c'est donc du télétravail "contraint" par des raisons financières et temporelles.

## Comment je m'organise

### Quand ?

Je télétravaille tous les mardis. J'ai choisi ce jour-là parce que c'était un jour sans réunion importante régulière (nous avions par exemple les rétrospectives de sprint le mercredi, des réunions d'équipe le lundi, des réunions techniques le vendredi…).

À l'occasion, il m'arrive de télétravailler davantage (quelques jeudis par-ci par là) pour une occasion particulière (besoin de ne pas être interrompue sur un sujet en particulier, colis qui va être livré chez moi, entretien de la chaudière, etc.).

### Choisir les tâches à faire en télétravail

Concrètement, le lundi soir, je m'assure d'avoir du travail pour m'occuper toute la journée du mardi. Généralement, j'essaie de faire en sorte que ce soit des tâches très "codesques", dans lesquelles je peux me mettre en mode "tunnel". C'est ce que j'aime le mieux faire en télétravail : c'est le genre de travail qui marche même mieux en télétravail qu'en open space (où on a des interruptions fréquentes, qui sont dévastatrices sur des tâches techniquement complexes nécessitant beaucoup de concentration).

Parfois il n'y a pas le choix, et je récupère quelques tâches d'exploitation.

### Communiquer

En télétravail ou non, je suis branchée sur le Hipchat interne de la boîte. Il est très utilisé par les techniques, légèrement moins par les marketeux. Nous faisons passer la plupart des informations importantes dans le chat (ex. "je vais déployer tel projet" ou "j'ai un problème sur cette story"). Cette bonne habitude fait que parfois, on ne se rend même pas compte qu'un des membres de l'équipe est en télétravail… (ex. « Il est où Olivier ? »)

Parfois, on ne s'en sort pas avec le chat et c'est plus simple de discuter à l'oral d'un point en particulier. Dans ce cas-là, on n'hésite pas à s'appeler (téléphone, kit mains libres, tout simplement)… en utilisant en plus le support "chat à l'écrit" pour partager des liens et autes. L'« araignée » de la salle de réunion permet aussi des réunions téléphoniques au besoin.

Dans le cadre du télétravail, j'utilise très peu les e-mails.

### Stand-up meeting

Vers 13h45 le mardi (le stand-up meeting de l'équipe est à 14h), j'envoie sur le chat interne de la boîte ma partie du stand-up : où j'en suis, combien de temps j'ai passé sur quoi, ce que je compte faire l'aprèm et le lendemain, est-ce que je suis bloquée. De cette manière, mes collègues savent où j'en suis.

Il manque un peu la partie « je sais où en sont les collègues », c'est dommage… J'ai tendance à demander sur le chat si j'ai particulièrement besoin de savoir un élément précis. (ex. « quelqu'un a déjà pris la story 455 sur le bug kikoolol de la liseuse ? »)

### Environnement de dev

LeChef a mis en place un VPN qui marche très bien pour que je puisse taper sur les serveurs de prod pour les déploiements ou les tâches d'exploration ponctuelle. Il me sert aussi si j'ai besoin d'aller sur le NAS sur le réseau interne (de moins en moins utilisé).

Le reste de l'environnement de dev est strictement local, il me suit partout où va mon PC portable : je n'ai pas de dépendance à une machine posée sur le réseau interne de la boîte.

## Les avantages

Le premier avantage entre tous : gagner du temps de transport. J'ai moins le sentiment de perdre du temps de travail et de l'argent à courir d'un métro à l'autre. Mon jour de télétravail, mes transports se limitent à poser Gaminette chez l'assmat (5 minutes aller) et à la chercher le soir. Je gagne du temps de travail, de la sérénité et de l'énergie.

J'aime bien aussi avoir une journée dédiée par semaine où je sais que je vais pouvoir faire des trucs bien compliqués sans être dérangée.

Et il faut avouer que la partie « je peux me faire un mug cake à 16h, le manger sur ma terrasse et avoir une moustache de chocolat jusqu'aux oreilles sans que personne ne se moque de moi » est plutôt agréable aussi.

## Les murs que je me suis pris

Au début, je me disais que j'allais pouvoir rattraper un peu le ménage et le rangement de l'appart entre deux tâches de boulot. Hé ben non. Un jour de télétravail n'est pas un jour de congé. Au final, ma journée ressemble à deux longs tunnels de travail de 3-4 heures dont je sors uniquement quand j'ai faim. Je me garde une petite heure de pause midi que j'emploie essentiellement à manger et à faire une sieste. Et parfois je fais la vaisselle. Une fois, en six mois, j'ai étendu une lessive.

Sinon, j'ai déjà eu des jours de télétravail où je n'arrivais pas à "rentrer dans le truc" et où je me rendais compte que je n'avançais pas sur les tâches que j'avais à faire. Je ne sais pas si j'aurais mieux réussi à me concentrer si j'avais été sur place. Peut-être que quand ça veut pas, ça veut pas (surtout quand ton boulot du jour c'est de changer la couleur d'un bouton pour un client relou alors que tu as juste envie de faire de la grosse alogo qui tache).

À part ça, globalement ça se passe bien : j'arrive bien à bosser et je me sens mieux après une journée de télétravail qu'après une journée d'allers-retours en métro.

## Et maintenant ?

Maintenant, pour des raisons temporelles encore, je passe à 80 %, je vais arrêter de travailler le jeudi. Mais je garde mon jour de télétravail la plupart des mardis. Ça marche trop bien pour laisser tomber. ;)

[^arrondissements-lyon]: À Lyon, contrairement à Paris, les arrondissements ne sont pas situés « en escargot » mais ont été numérotés dans l'ordre chronologique de leur création, au fur et à mesure que Lyon phagocytait les communes environnantes (La Guillotière, Vaise, etc.).
