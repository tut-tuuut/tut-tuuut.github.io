---
layout: post
title: "Fusion de dépôts et problèmes de casse avec git"
tags: ereader eink
categories: git
---

Youpi, je vais vous raconter une aventure de technicienne !<!-- more -->

Cet après-midi, avec ma collègue, on a voulu travailler ensemble sur un dépôt git que j'avais créé sur mon poste (avec un petit `git init`) et déjà bien rempli (avec pas mal de `git ci`).

Théoriquement, avec git on peut parler directement d'un dépôt local à un autre, mais ça implique d'ouvrir du partage de fichiers sur le réseau et c'est un peu pénible. Nous avons plutôt l'habitude de passer par un dépôt central, posé à un endroit accessible et protégé.

En l'occurrence, ces dépôts centraux, ce sont des dépôts privés sur Github pour notre entreprise. Pendant que je regardais ailleurs (= pendant que je prenais une pause goûter-twitter), un de mes collègues a cliqué sur « créer le dépôt » (jusque là, tout va bien).

Du coup, maintenant que le dépôt distant avait été créé, tout ce que j'avais à faire, c'était ajouter le « remote » à mon dépôt local puis pousser tout mon bazar sur le dépôt distant.

    git remote add origin git@blablabla.github.com.git
    git push -u origin master

Et là, patatras ! Voici ce que me raconte git :

    $ git push --set-upstream origin master
    To git@bitbucket.org:tut_tuuut/demo-fusion-de-depots.git
     ! [rejected]        master -> master (fetch first)
    error: failed to push some refs to 'git@bitbucket.org:tut_tuuut/demo-fusion-de-depots.
    hint: Updates were rejected because the remote contains work that you do
    hint: not have locally. This is usually caused by another repository pushing
    hint: to the same ref. You may want to first integrate the remote changes
    hint: (e.g., 'git pull ...') before pushing again.
    hint: See the 'Note about fast-forwards' in 'git push --help' for details.

Ooooh… kééééé…

Contrairement à la dernière fois, git est plutôt sympa sur ce coup-là : il donne des indications sur la cause probable du problème (« another repository pushing to the same ref ») et sur la solution qu'on peut adopter (« first integrate the remote changes »).

Super, mais mon collègue a seulement créé le dépôt, il n'a pas poussé ses modifs dessus puisque c'est moi qui ai écrit le début du code… Mystère…

Comme j'ai toujours la trouille du git pull, je commence par taper `git fetch`.

    ➭ git fetch origin
    warning: no common commits
    remote: Counting objects: 6, done.
    remote: Compressing objects: 100% (3/3), done.
    remote: Total 6 (delta 0), reused 0 (delta 0)
    Unpacking objects: 100% (6/6), done.
    From bitbucket.org:tut_tuuut/demo-fusion-de-depots
     * [new branch]      master     -> origin/master

J'ai bien rapatrié les modifs du dépôt distants, mais j'ai un avertissement intéressant : « no common commits ». Je commence à comprendre ce qui s'est passé. Il y a eu un commit sur le dépôt distant nouvellement créé : en effet, github, à la création d'un dépôt git, vous autorise à créer un fichier README.md… directement depuis l'interface web. Et ce fichier est commité sur la branche master de votre projet.

En effet, en allant voir sur l'interface web, je constate la présence d'un « lisez-moi » sur la page d'accueil du nouveau dépôt.

Comment je fais, moi ? Je ne veux pas supprimer et re-créer le dépôt, essentiellement parce que je n'ai pas les droits d'administration dessus. Je ne veux pas non plus perdre tout mon historique de modifs locales.

À ce moment-là, mon arbre d'historique a une tête assez inquiétante : 

![Deux arbres](/img/2014/09/waaat.png)

J'ai commencé par tenter un « rebase » de ma branche « master » sur « origin/master » mais j'ai eu des conflits étranges dans tous les sens. Finalement j'ai effectué un simple `merge`.

    git merge origin/master

OK, ça semble bien se passer, d'après ce que me dit git :

    git merge origin/master
    Merge made by the 'recursive' strategy.
     README.md | 1 +
     1 file changed, 1 insertion(+)
     create mode 100644 README.md


Pour la plupart des gens, l'histoire s'arrête ici.
Chez moi, il semblerait qu'il manque quelque chose…

    ➭ git st
    On branch master
    Changes not staged for commit:
      (use "git add &lt;file&gt;..." to update what will be committed)
      (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
    
        modified:   Readme.md
    
    no changes added to commit (use "git add" and/or "git commit -a")

On dirait qu'il y a un problème de fusion entre le fichier Readme.md que j'ai ajouté et le README.md créé sur le dépôt distant…

J'ai essayé plein de trucs, mais la seule solution qui a fonctionné, ça a été de supprimer les deux versions et d'en re-créer un nouveau :

    git rm Readme.md
    git rm README.md
    git commit -m "Remove all the things"

    vim README.md
    git add README.md
    git commit -m "Readme all the things"

Je trouve ça bizarre, cette histoire de mélange bizarre de casse alors que je suis sous Mac OS (qui est sensible à la casse). J'ai fini par trouver la réponse dans la config du dépôt (le fichier `config` dans le dossier `.git`) : il contient `ignorecase = true` dans la section `[core]`.

    [core]
            repositoryformatversion = 0
            filemode = true
            bare = false
            logallrefupdates = true
            ignorecase = true
            precomposeunicode = true
    [remote "origin"]
            url = git@bitbucket.org:tut_tuuut/demo-fusion-de-depots.git
            fetch = +refs/heads/*:refs/remotes/origin/*

Je ne suis pas sûre que ce `ignorecase = true` soit une bonne idée sur les OS sensibles à la casse, car on peut se retrouver avec des cas bizarres comme j'ai eu ici (deux fichiers différents pour l'OS mais identiques pour git). Pourtant, il est activé par défaut quand je lance un `git init` sur mes deux ordis… À garder en tête si vous avez des soucis. :)

Si vous voulez, vous pouvez aller voir [le dépôt avec lequel j'ai refait mes essais pour cet article][ledepot]. Je l'ai fait sur bitbucket, parce qu'il affiche le graphe des commits en ligne.

[ledepot]: https://bitbucket.org/tut_tuuut/demo-fusion-de-depots/commits/all
