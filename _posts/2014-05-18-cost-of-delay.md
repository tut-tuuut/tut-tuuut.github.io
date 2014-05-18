---
layout: post
title:  "Le coût du retard — retour sur le Mix-IT 2014 (3)"
tags: mix-it
---

Allez, hop, on continue. Il y a plein de choses à raconter sur ce Mixit, et je m'attaque au plus gros morceau : [priorizing ideas using cost of delay][session-cost-of-delay]. Cette conf est celle qui m'a le plus intéressée, mais aussi celle que j'ai le moins bien comprise car elle n'entrait pas dans mon champ de compétences direct (ce qu'on appelle « la paperasse » dans ma boîte, par opposition à « la technique »). Je vais essayer de démêler un peu et de produire un résumé en français.

Je vais repomper mes notes de la conf mais je vais combler les trous à l'aide du site _[farming black swans][ressource-cod]_.

Déjà, il faut que je trouve la traduction française du terme « cost of delay ». Sur google, je trouve autant de « prix du retard » que de « coût du retard », et aucun des deux ne se rapporte à la notion qui m'intéresse. Je vais parler de « coût », plutôt.

## Qu'est-ce que le « coût du retard » ?

Donc, qu'est-ce que le « coût du retard » ? C'est ce que ça coûte, concrètement, de retarder la sortie d'une fonctionnalité ou d'un site d'une semaine.

Attention cependant, on ne parle pas forcément d'un coût direct. On peut aussi parler de manque à gagner. Retarder la sortie d'une fonctionnalité d'une semaine, par exemple, nous prive de la valeur qu'aurait produite cette fonctionnalité pendant une semaine.

## La valeur

### Le type de valeur

La valeur ajoutée d'une fonctionnalité rentre dans une de ces catégories :

* une augmentation de revenus (par exemple, augmenter directement le nombre de ventes sur un site) ;
* une sécurisation des revenus (par exemple, encourager les clients à revenir commander plusieurs fois) ;
* une réduction de coût (l'automatisation d'une tâche manuelle fastidieuse, par exemple) ;
* un évitement de coût (mettre en place des ajustements pour éviter de ramasser des amendes, par exemple).

### Évaluer… la valeur (en euros !)

Il y a plusieurs moyen d'évaluer une fonctionnalité en unités € :

* **estimer le bénéfice direct** du changement : par exemple si on envisage d'attirer 20 % de clients supplémentaires ou d'augmenter le taux de conversion de quelques pourcents, c'est un bénéfice direct. 
* **estimer le coût des autres solutions** : par exemple, clarifier des documents à destination des clients finaux épargnera quelques heures de SAV par semaine à un opérateur. La « valeur par semaine » de la tâche est donc égale au temps passé × salaire horaire de l'opérateur.

## Les « profils » d'urgence

Tous les retards n'ont pas le même genre de conséquences. Voyons trois situations possibles. Notons que **le premier cas est le plus courant**.

### Premier cas : idées à long terme, maximum constant

On a une idée de fonctionnalité qui a juste pour but de réduire les coûts de fonctionnement (ou d'éviter des coûts débiles, comme des amendes). Si on prend N semaines de retard, on « paie » juste les coûts de fonctionnement pendant N semaines.

![Premier profil d'urgence](/img/2014/05/costdelay1.png)

### Second cas : court terme, maximum affecté par le retard

On a un site de e-commerce, on veut être prêts pour le début des soldes donc on prépare un deuxième serveur pour tenir la charge. Si on est en retard et que le serveur tombe parce qu'il n'a pas de serveur de secours, on perd toutes les ventes du début des soldes. Premier coût de retard. Ensuite, le serveur tient la charge, mais les internautes sont partis faire leurs courses ailleurs et il en vient moins une fois la folie initiale passée.

![Deuxième profil d'urgence](/img/2014/05/costdelay2.png)


### Troisième cas : long terme, maximum affecté par le retard

On arrive sur un nouveau marché tout fou tout innovant (par exemple, les applications smartphone, le livre numérique…). Machin vend des MachinPhone, et ouvre son propre AppStore, qu'il appelle le MachinStore. Évidemment, les appareils Machin ne sont compatibles qu'avec les applications MachinStore. Ensuite, avec un peu de retard, arrive Bidule sur le même marché, qui vend un BidulePhone avec des applications BiduleStore. Eh bien Bidule ne va pas récupérer de sitôt les clients déjà captés par Machin. Le coût du retard est ici une perte de parts de marché à long terme pour Bidule.

![Troisième profil d'urgence](/img/2014/05/costdelay3.png)

## À quoi ça sert ?

Il faut voir « le coût du retard » comme un outil pour vous aider à ordonner vos idées et vos projets par priorité. C'est un chiffre, donc c'est facile à comparer. En outre, c'est un chiffre qui n'est pas hyper difficile à calculer dans le cas d'urgence le plus simple.

On peut aller encore plus loin en calculant [le coût du retard divisé par le temps de réalisation][cd3] (ou CD3). On considère ensuite que les fonctionnalités qui ont un CD3 plus élevé sont à réaliser en premier. De cette manière, on se concentre sur les idées qui sont plus rapides à réaliser et plus coûteuses à reporter.

[cd3]: http://blackswanfarming.com/cost-of-delay-divided-by-duration/
[light-blog]: http://www.mix-it.fr/lightning/543/blogger-chaque-jour-pour-etre-riche-et-celebre
[slides-david]: http://blog.javabien.net/2014/04/29/
[light-debutants]: http://www.mix-it.fr/lightning/560/5-apprentissages-pour-le-programmeur-debutant
[dgageot]: https://twitter.com/dgageot
[jekyll]:    http://jekyllrb.com
[mix-it]: http://www.mix-it.fr/
[session-ploum]: http://www.mix-it.fr/session/382/et-si-nous-n-etions-qu-au-debut-
[session-kick-ass]: http://www.mix-it.fr/session/405/how-to-do-kick-ass-software-development
[session-brain]: http://www.mix-it.fr/session/369/visualization-what-s-my-brain-got-to-do-with-it-
[session-node]: http://www.mix-it.fr/session/361/tour-d-horizon-de-node-js
[session-machine-learning]: http://www.mix-it.fr/session/500/machine-learning-et-regulation-numerique
[session-cost-of-delay]: http://www.mix-it.fr/session/515/prioritising-ideas-using-cost-of-delay
[session-biotech]: http://www.mix-it.fr/session/540/biotech-breaks-free-and-so-does-tech-
[session-webmobile]: http://www.mix-it.fr/session/397/le-web-est-la-plateforme-mobile-
[session-party1999]: http://www.mix-it.fr/session/494/party-like-it-s-1999
[session-gandalf]: http://www.mix-it.fr/session/492/coach-like-a-wizard-agile-wisdom-of-gandalf
[session-comm]: http://www.mix-it.fr/session/518/consulting-secrets-for-effective-communication
[frappadingue]: http://www.frappadingue.net/les-courses/rhone-xtrem/
[magie]: https://www.youtube.com/watch?v=5igHSsydm1Q
[ressource-cod]: http://blackswanfarming.com/cost-of-delay/

*[CD3]: Cost of Delay Divided by Duration
