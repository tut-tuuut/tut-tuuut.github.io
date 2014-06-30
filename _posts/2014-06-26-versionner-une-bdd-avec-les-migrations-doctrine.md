---
layout: post
title:  "Versionner une base de données avec les migrations Doctrine"
tags: mix-it
categories: tech
---

J'ai très envie de parler de biberons, mais je vais encore causer un peu technique.

Plus exactement, je vais vous parler de la situation --- fréquente --- où plusieurs développeurs travaillent sur le même projet, mais chacun dans leur propre environnement de développement et leur propre base de données.

Comment gérer le cas où un dév, dans le cadre de son travail, doit modifier la structure de la base ? Il peut s'agir d'ajouter un champ, d'ajouter un index, de renommer une table… Dans tous les cas, il faut que la modification de structure soit propagée dans les autres instances sinon ça pète.

Il arrive aussi que les instances de développement soient distinctes de l'instance de production (et ça arrive souvent, je l'espère…). Le même problème se pose ici : si dans le cadre du développement, on doit ajouter un champ, comment fait-on ?

La réponse n°1 est : « on le fait à la main dans PhpMyAdmin ».

Et c'est mal.

Parce que quand on fait quelque chose à la main, on le fera bien  une fois, peut-être deux ou trois… Mais il y aura forcément un jour où ça se passera mal. On oubliera de faire une des cinq manips nécessaires sur un des trois serveurs, et on perdra des données pendant deux, trois mois, le temps qu'on remarque un bug bizarre et qu'on ne puisse plus rien faire d'autre que constater l'étendue des dégâts.

Un moyen assez courant d'automatiser les modifications de base, au moins en PHP et en Ruby, consiste à utiliser des « migrations », les versionner et les propager dans les autres instances en même temps que le code.

## Principe d'une migration

Quand on veut modifier une base de données MySQL, on doit _toujours_ écrire des petits bouts de code comme ça :

{% highlight sql %}
ALTER TABLE `tax` ADD COLUMN `rate` DECIMAL(18,2);
{% endhighlight %}

Ça se passe _toujours_ comme ça. Vous pouvez utiliser un PhpMyAdmin qui génère à votre place le SQL qui modifie la structure, mais c'est toujours avec une requête SQL que vous modifiez une base MySQL.

Ensuite, hop hop, on exécute ces petits bouts de code pour modifier la base.

Le principe des migrations (Doctrine ou autre), c'est de _versionner_ ces petits bouts de code qu'on écrit de toute façon, et de garder une trace de quels bouts de code ont déjà été exécutés ou non.

C'est tout.

On peut faire ça à la main, mais c'est plus sûr d'utiliser un outil qui fait le travail pénible à votre place (les conventions de nommage des fichiers de migrations, le suivi de la version dans la base elle-même, etc.).

Il y a plusieurs raisons d'utiliser un outil pour gérer ses migrations, même « petites ».

* D'une part, on peut dupliquer la base de données sur un nombre infini de postes de développement ou de production sans pour autant devoir faire des manipulations à la main sur chacun des postes.  
* D'autre part, on peut gérer des migrations complexes : par exemple si on ajoute une table de jonction entre deux anciennes tables, on peut jouer un script qui la remplit juste après le changement de structure.  
* Sinon, si on a bien fait les choses, on peut jouer les migrations inverses dans le cas où on veut annuler un développement. Cela suppose d'avoir écrit les migrations inverses, cela dit…
* Et surtout, surtout, utiliser des migrations permet de versionner (dans git, dans SVN…) les modifications de base **au même endroit que le code.** Ainsi, lorsqu'une nouvelle personne récupère le projet, elle n'a pas besoin de demander à machin et à bidule de remonter leur historique d'e-mails pour voir ce qu'elle doit modifier dans la base pour que le code fonctionne… (Ne rigolez pas, je l'ai vu.)


## Les migrations Doctrine

Dans ma boîte, on a mis en place des migrations Doctrine sur la plupart de nos projets… Y compris et surtout sur ceux qui ne reposent pas sur un framework PHP.

Je vais détailler comment ajouter Doctrine à un projet et comment générer puis jouer une migration.

### Mise en place avec composer

Si comme nous, vous utilisez déjà Composer sur vos projets PHP, il suffit de modifier le fichier composer.json pour avoir les migrations Doctrine :

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

Le principe est de [télécharger un fichier doctrine-migrations.phar][doctrine.phar], puis de créer un fichier texte `doctrine-migrations` qui utilise ce fichier `.phar`.

Une fois qu'on a mis ça en place, on peut exécuter « doctrine-migrations » et il vous dit ce que vous pouvez faire.


D'après l'article, la structure de fichiers à prévoir est la suivante :

<pre>.
├── bin
│   ├── doctrine-migrations
│   ├── doctrine-migrations.phar
│   ├── migrations-db.php
│   └── migrations.yml
└── db
    └── migrations</pre>

Et il faudra se placer dans le dossier `bin` pour utiliser le fichier `doctrine-migrations`. Chuis pas très convaincue, je pense que ça peut s'arranger mais on verra une autre fois.

Niveau gestionnaire de versions, il faudrait commiter tous ces fichiers à l'exception de migrations-db.php qui contient la config de connexion à la base de données.

### Générer une migration

Bien, en avant.

Pour créer une migration, il faut taper la commande suivante :

<pre>./doctrine-migrations migrations:generate</pre>

Mon ordi me dit alors la chose suivante :

<pre>Generated new migration class to "/Users/agnes/Code/test-migrations-doctrine/db/migrations/Version20140628194412.php"</pre>

À quoi ressemble ce fichier ?

{% highlight php %}
<?php

namespace MyAppsMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20140628194412 extends AbstractMigration
{
    public function up(Schema $schema)
    {

    }

    public function down(Schema $schema)
    {

    }
}

{% endhighlight %}

C'est dans les fonctions up() et down() que l'on pourra écrire les modifications qui nous intéressent.

[for-a-doctrine-less-app]: http://devblog.collegedegrees.com/2010/11/02/doctrine-migrations-for-a-doctrine-less-app.html
[doctrine.phar]: http://github.com/downloads/ericclemmons/migrations/doctrine-migrations.phar

