---
layout: post
title: "Petits détails techniques pour le nanowrimo"
category: tech ecriture
tags: écriture "ligne de commande" leanpub
---

Le [NaNoWriMo](http://nanowrimo.org/about) a commencé cette année, dans la joie et la bonne humeur. Pour rappel, le but est d'écrire pendant le mois de novembre un roman de 50.000 mots, soit environ 200 pages, à partir de zéro.

Cette année, je tente d'utiliser Leanpub, combiné avec un dépôt Bitbucket privé, pour garder mon roman à jour.

Concrètement, j'ai un dossier qui ressemble à ça, que je versionne sur git :

    .
    ├── README.md
    ├── manuscript
    │   ├── Book.txt
    │   ├── chapter1.md
    │   ├── chapter2.md
    │   ├── chapter3.md
    │   └── images
    │       └── title_page.png
    └── notes
        ├── dares.md
        └── idees.md

J'écris mon roman (à l'aide d'un éditeur de texte tout bête) dans le dossier `manuscript`. Le fichier `Book.txt` contient la liste de tous les fichiers de contenu, qui sont ici les chapterX.md. Le compilateur de Leanpub s'en sert pour compiler en PDF, epub et mobi les fichiers dans le bon ordre.

Par contre, la spécificité du NaNo, c'est de dire chaque jour, sur le site, à combien de mots on en est. Au fur et à mesure de l'avancée du mois, une courbe se trace automatiquement, qui compare l'objectif théorique du jour avec le compte de mots réel.

## Comment compter les mots d'un ensemble de fichiers texte ?

Dans mon cas, c'est simple comme bonjour :

{% highlight bash %}
wc -w manuscript/*.md
{% endhighlight %}

L'utilitaire `wc` (pour wordcount) permet de compter le nombre de lignes, de mots et d'octets dans un fichier texte. J'ajoute l'option `-w` pour n'afficher que les mots, et je lui dis de compter pour tous les fichiers portant l'extension `md` dans le dossier `manuscript`.

Le résultat ressemble à ceci :


         846 manuscript/chapter1.md
         712 manuscript/chapter2.md
         395 manuscript/chapter3.md
        1953 total

## Copier-coller le contenu de plusieurs fichiers texte

Bon, c'est chouette, mais en fait sur le site du NaNo, il y a un utilitaire qui permet de compter les mots. Il faut d'ailleurs l'utiliser à la fin du mois pour « valider » le nombre de mots et dire « OK t'as gagné » ou le contraire. Le principe est de coller le texte dans une zone sur le site puis de laisser le robot du NaNo compter à notre place :

![Même pas 2000 mots et on parle déjà de bouffe. Bravo.](/img/2015/11/nano-wcvalidator.png)

(Bonus l'extrait du roman qui parle déjà de bouffe et de drague relou, alors que je comptais parler d'explosions et de moines cultistes. Bien bien.)

D'où la question : comment copier-coller d'un coup, sans se prendre la tête, le contenu de N fichiers texte ?

C'est faisable facilement en ligne de commande sur Mac OS X :

{% highlight bash %}
cat manuscript/*.md | pbcopy
{% endhighlight %}

`cat` est une commande de base qui se contente d'afficher le contenu d'un fichier (ou de n'importe quoi, d'ailleurs) sur la sortie standard (ou n'importe où, en fait). Ici, j'envoie la concaténation de tous les fichiers `*.md` dans un petit tuyau `|` (le « pipe », prononcez païpe) à la sortie duquel je colle la commande `pbcopy` qui, sur un Mac, a pour effet de copier dans le presse-papier.

Une fois cela fait, je n'ai plus qu'à lancer un petit cmd-V sur le site du NaNo et hop. J'ai mon _wordcount_ validé.

Sur Linux, il existe plusieurs commandes pour remplir le presse-papiers, et il existe aussi plusieurs presse-papiers. Apparemment, `xsel` est une bonne piste, ou `xclip`. Ça doit dépendre de l'OS, de l'environnement graphique, tout ça.

## Compter les mots dans une sélection

Oui, mais pendant le NaNo, on fait aussi des _word wars_ : on se donne un délai (généralement une quinzaine de minutes) durant lesquelles on se démène pour écrire autant que possible. À la fin, on compte les mots et celui qui en a écrit le plus gagne quelque chose (ou pas. Ça dépend.). C'est une technique d'une efficacité redoutable pour engranger beaucoup de mots en peu de temps.

Par contre, comment compter facilement les mots à la fin d'une word war ? On peut décider de compter les mots juste avant et juste après. Mais il faut y penser…

Ma technique habituelle consiste simplement à mettre un signe distinctif dans le texte au début de la word war, comme `>>WW`, et un autre à la fin, comme `<<WW`, et à compter les mots entre le marqueur de début et le marqueur de fin. Quand j'avais un éditeur de texte un peu sophistiqué, c'était facile : il me suffisait de sélectionner le texte et la barre d'outils me disait combien de mots j'avais sélectionnés. Là, sous sublime text 2, pas possible. Je n'ai que le nombre de lignes et le nombre de caractères de la sélection…

Donc ce que je fais, c'est que je sélectionne le texte que j'ai écrit pendant ma word war, je fais un petit cmd-C, puis je lance cette commande :

{% highlight bash %}
pbpaste | wc -w
{% endhighlight %}

Et j'obtiens le nombre de mots de ma sélection.

Là encore, `pbpaste` n'est valable que sous Mac OS X. Sous Linux, il faut tâtonner un peu. Les gens de twitter me suggèrent deux commandes, à essayer chez vous :

* `xsel --clipboard --output | wc -w`
* `xclip -o -selection clipboard | wc -w`

On retrouve `xsel` et `xclip`, j'imagine que les options ne sont pas les mêmes selon que l'on veut mettre des trucs dans le presse-papiers ou les sortir.


Voilààà. Maintenant, vous aussi, vous saurez utiliser la ligne de commande pour compter les mots pour le NaNo ! \o/
