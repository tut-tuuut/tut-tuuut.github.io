---
layout: post
title:  "Erreur git « Failed to lock »"
tags: git
categories: tech
---

## tl; dr;

* On ne peut pas avoir une branche nommée `truc/machin` et une autre nommée `truc` sur le même dépôt. Si tu n'arrives pas à créer/pusher `truc/machin`, tu as peut-être déjà une branche nommée `truc`.
* Git appelle ça des « dossiers » quand on utilise des branches avec des préfixes suivis d'un slash comme `dev/feature-cool` et `dev/feature-mieux`, et c'est sympathique parce que certains clients les affichent joliment.
* Parfois, Stackoverflow, ça fait aussi peur que Doctissimo.

## Version longue

Ce matin j'ai voulu tranquillement lancer un petit `git push` pour envoyer ma grosse branche[^non] de feature sur le dépôt git partagé par tous les dév de la boîte. Il s'agissait d'un dépôt github mais le problème n'est pas spécifique à github.

J'ai eu un message d'erreur inquiétant : le dépôt distant refusait que je « push » ma branche, intitulée « dev/tralala », en me donnant un message sybillin. Ça ressemblait à ça :

<pre>
➭ git push -u origin dev/tralala
Total 0 (delta 0), reused 0 (delta 0)
error: unable to resolve reference refs/heads/dev/tralala: Not a directory
remote: error: failed to lock refs/heads/dev/tralala
To git@youpi.org:tut_tuuut/first-test.git
 ! [remote rejected] dev/tralala -> dev/tralala (failed to lock)
error: failed to push some refs to 'git@youpi.org:tut_tuuut/first-test.git'
</pre>

Les deux lignes intéressantes sont les suivantes :

<pre>
error: unable to resolve reference refs/heads/dev/tralala: Not a directory
 remote: error: failed to lock refs/heads/dev/tralala
</pre>

et 

<pre>
 ! [remote rejected] dev/tralala -> dev/tralala (failed to lock)
</pre>

Comment se fait-ce ? Kessé « failed to lock » ? Comment je push moi ? J'ai un truc à pusher là ! C'est important !

## Essayons d'abord de pusher

J'ai cherché sur google « failed to lock git » et j'ai atterri sur StackOverflow.

Un peu comme si j'avais tapé « rhume doctissimo », j'ai trouvé des réponses très inquiétantes, où les uns conseillaient aux autres de supprimer le remote et de le réimporter à partir d'une copie locale, par exemple… Mais je me voyais mal aller voir mon DT pour lui demander si par hasard il pouvait supprimer ce petit dépôt sur lequel on bosse depuis deux ans, avec ses 55 branches[^branches] et 1600 commits.

Ouais, non, vraiment, ça ne me tentait pas.

Les réponses stackoverflow et compagnie donnaient l'impression que le dépôt github était peut-être corrompu. J'ai créé une branche pipeau, nommée genre « check/is-push-ok », et le push a fonctionné sans problème.

Hmm.  
Apparemment, le problème venait donc du nom de ma branche[^oups].

On a trouvé en creusant un peu, sur l'intuition d'un collègue : le dépôt distant contenait une branche nommée « dev ». L'existence de cette branche « dev » distante empêchait quiconque de pousser une branche nommée « dev/quelquechose » sur le dépôt distant.

On a vérifié : cette branche « dev » pointait sur un commit vieux de plus de deux ans… Elle avait 1515 commits de retard sur la branche « master » et 0 commit d'avance. On a donc décidé de la supprimer du dépôt github. Comme ceci :

<pre>git push origin :dev</pre>

Ensuite, j'ai pu pusher tranquillement[^dev]. Ouf !

## Essayons ensuite de comprendre

La présence d'un slash dans le nom de la branche a visiblement un effet plus important qu'un simple préfixe  : on aurait pu choisir `dev-` au lieu de `dev/` et on aurait sûrement eu moins de problèmes.

J'ai donc creusé un peu pour voir, et j'ai découvert qu'une fois qu'on a une branche nommée `truc` sur un dépôt, on ne peut pas créer une branche nommée `truc/bidule` sur le même dépôt. Pas besoin de remote pour avoir le problème.

<pre>
➭ git branch truc
➭ git branch truc/bidule
error: unable to resolve reference refs/heads/truc/bidule: Not a directory
fatal: Failed to lock ref for update: Not a directory</pre>

Sans pourrir aucun dépôt distant, j'avais réussi à reproduire le truc. Et en prime, je remarquais l'existence de la première ligne du message d'erreur : « not a directory ».

J'ai voulu voir ce qui se passait si je créais la branche « avec slash » d'abord.

<pre>
➭ git branch youpi/tralala
➭ git branch youpi
error: there are still refs under 'refs/heads/youpi'
fatal: Failed to lock ref for update: Is a directory
</pre>

Tiens tiens, maintenant le message d'erreur c'est « is a directory »… Hmm.

Ainsi, quand on crée une branche « truc/machin », git crée automatiquement un « dossier » nommé « truc » et une « branche » nommée « machin » sous cette référence « truc ».

Et quand c'est un dossier, on ne peut pas le remplacer par une branche sans supprimer d'abord le « contenu » du dossier. À l'inverse, quand ce n'est pas un dossier, on ne peut pas le transformer en dossier sans supprimer d'abord la référence « branche » qui a ce nom-là.[^tag]

Et en prime, comme par hasard, je découvre que le client SourceTree affiche effectivement les « préfixes en slash » comme des dossiers. Un exemple avec les branches des sources de ce blog, que je sépare entre les bidouilles techniques et les brouillons de notes :

<pre>~/code/tut-tuuut.github.io:post/erreur-git-chelou ✗ ➭ git branch
  dev/change-css
  master
  post/cnv-accouchement
  post/doctrine-migrations
* post/erreur-git-chelou
  post/import-old-blogs
  post/journee-sage-femmes
  post/nounou-malade
  post/sein-bibi
  post/tache-tache
  post/zen-vomi</pre>

Voici ce que ça donne dans l'affichage de sourcetree :

![Les branches dans sourcetree](/img/2014/06-27-branches-blog.png)

Des branches rangées ! Youpi ! \o/

Ce qui commençait comme une embrouille effrayante avec git s'est donc terminé par la découverte d'une fonctionnalité sympa ! Je suis contente.[^yep]


[^non]: Malgré les apparences, ce n'est pas une phrase graveleuse.
[^branches]: Ce sont des branches « de feature » comme on dit : on oublie souvent de les supprimer une fois qu'elles sont fusionnées. Le nombre de branches fusionnées et non supprimées augmente beaucoup moins vite depuis que Github permet de supprimer la branche après la fusion d'une _pull request_, cela dit.
[^oups]: Et j'avais dû pusher de la merde pour découvrir ça.
[^dev]: On suppose que la branche « dev » distante était un reliquat d'une époque aujourd'hui révolue où on utilisait un workflow de développement façon GitFlow, avec une branche « dev » et une branche master dans laquelle la branche « dev » est périodiquement fusionnée. Aujourd'hui on est plus proches d'un workflow à la GitHub, où on crée une branche par fonctionnalité, puis on la fait relire via une _pull request_, puis on fusionne dans master et on passe en prod immédiatement. Quant à la présence de cette branche sur le dépôt distant, c'est probablement un push accidentel tapé un peu vite qui a envoyé la branche sur le dépôt central.
[^tag]: Je pense qu'on peut remplacer « branche » par « tag » dans tout ce qui précède.
[^yep]: Ouais il ne m'en faut pas beaucoup pour être contente.
