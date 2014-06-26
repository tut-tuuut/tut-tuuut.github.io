---
layout: post
title:  "Versionner une base de données avec les migrations Doctrine"
tags: mix-it
categories: conferences tech
---

Il y a une situation, somme toute assez fréquente, plusieurs développeurs travaillent sur le même projet, mais chacun dans leur propre environnement de développement et chacun leur propre base de données.

On a aussi un cas de "multi-base" quand on a une instance de développement distincte de l'instance de production (ce qui est le cas souvent, je l'espère…).

Comment gérer le cas où un dév, dans le cadre de son travail, doit modifier la structure de la base ? Il peut s'agir d'ajouter un champ, d'ajouter un index, de renommer une table… Dans tous les cas, il faut que la modification de structure soit propagée dans les autres instances sinon ça pète.

Un moyen assez courant, au moins en PHP et en Ruby, consiste à utiliser des "migrations" pour suivre ces modifications de base, les versionner et les propager dans les autres instances en même temps que le code.

## Principe d'une migration

Quand on veut modifier une base de données MySQL, on doit _toujours_ écrire des petits bouts de code comme ça :

{% highlight sql %}
ALTER TABLE `tax` ADD COLUMN `rate` DECIMAL(18,2);
{% endhighlight %}

Ça se passe _toujours_ comme ça. Vous pouvez utiliser un PhpMyAdmin qui génère à votre place le SQL qui modifie la structure, mais c'est toujours avec une requête SQL que vous modifiez une base MySQL.

Ensuite, hop hop, on exécute ces petits bouts de code pour modifier la base.

Le principe des migrations (Doctrine ou autre), c'est de _versionner_ ces petits bouts de code qu'on écrit de toute façon, et de garder une trace de quels bouts de code ont déjà été exécutés ou non.

C'est tout.

Il y a des outils qui le font bien (Doctrine, active record, Magento), et des outils qui rendent fou (certains outils maison, les mails, Magento). (Oui Magento le fait bien — parfois — mais rend fou quand même.)

Généralement, quand on écrit une migration, c'est bien de prendre soin d'écrire aussi la migration inverse, dans le cas où on veut annuler un développement. On n'est pas obligé de la jouer, mais c'est bien de prévoir. Par exemple, la migration inverse de celle ci-dessus :

{% highlight sql %}
ALTER TABLE `tax` DROP COLUMN `rate`;
{% endhighlight %}

L'intérêt d'utiliser un outil pour gérer les migrations, c'est :

- de pouvoir dupliquer une base de développement sur un nombre infini de postes de dev sans finir à l'asile ;
- de gérer des migrations complexes (où on peut migrer des données en plus de migrer juste la structure) ;
- de pouvoir annuler un développement en jouant les migrations inverses au besoin ;
- et de pouvoir suivre tout ça à l'aide d'un simple gestionnaire de version (SVN ou git).

## Les migrations Doctrine

Dans ma boîte, on a mis en place des migrations Doctrine sur la plupart de nos projets… Y compris et surtout sur ceux qui ne reposent pas sur un framework PHP.

Je vais détailler comment ajouter Doctrine à un projet et comment générer puis jouer une migration.

### Mise en place avec composer

Nous utilisons Composer, le gestionnaire de dépendances PHP, sur tous nos projets PHP. Vous pouvez [le télécharger][https://getcomposer.org/download/] et découvrir ce qu'il vous permet de faire.

Dans le fichier composer.json on demande les migrations doctrine :

{% highlight json %}
{
    "minimum-stability": "dev",
    "config": {
        "bin-dir": "bin"
    },
    "require": {
        "doctrine/migrations": "dev-master"
    }
}
{% endhighlight %}

Ensuite, on installe le bazar en lançant la commande <code>php composer.phar install</code>. On dispose à présent du binaire <code>doctrine</code> dans le dossier <code>bin</bin>.


### Utilisation en « standalone »

Si vous n'avez pas envie de vous embêter avec composer, j'ai trouvé un article qui [explique simplement comment mettre en place Doctrine sans][for-a-doctrine-less-app].

Le principe est de [télécharger doctrine.phar][doctrine.phar]

[for-a-doctrine-less-app]: http://devblog.collegedegrees.com/2010/11/02/doctrine-migrations-for-a-doctrine-less-app.html
[doctrine.phar]: http://github.com/downloads/ericclemmons/migrations/doctrine-migrations.phar

