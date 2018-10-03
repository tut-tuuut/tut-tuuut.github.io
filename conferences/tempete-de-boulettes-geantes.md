---
title: "Tempête de boulettes géantes"
layout: page
---

# Tempête de boulettes géantes

![Bonjour ! Je suis Agnès, je travaille chez TEA](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.004.jpeg)

Bonjour à tous, bienvenue <del>à Paris Web</del> sur cette page web ! Merci à vous d’être ici pour assister à ma conférence… même si vous n’avez pas le choix puisque c’est une plénière… hum…

Ce matin, contrairement aux retours d’expérience où souvent on explique comment on a fait quelque chose qui a bien marché, comment c'était très bien, comment vous devriez faire la même chose… je vais vous raconter l’inverse.

Pour l’instant, tout ce que vous avez besoin de savoir à mon propos, c’est que je m’appelle Agnès et que je travaille dans une entreprise qui s’appelle « the ebook alternative ». Le reste viendra en temps utile.

---

![boulettes.005](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.005.jpeg)

Avant de passer à la suite, voici le lien vers la transcription de ma conférence à l’écrit, des fois que le flux vidéo ne marcherait pas parfaitement ou que la vélotypie. Et vous avez un QR code aussi. Technologie !

*(Note de transcription : vous y êtes, pas la peine de scanner le QR code… vous risqueriez de partir dans une boucle sans fin.)*

---

![boulettes.006](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.006.jpeg)

Et maintenant, un tout petit peu de sport pour commencer la journée. Le sujet d’aujourd’hui : les boulettes. Je vous affiche la définition à l’écran : une erreur humaine donnant lieu à un incident en production.

Qui, parmi vous, peut se définir comme « développeuse » ou « développeur » ? Levez la main si oui.

Je lève la main : en effet, je suis développeuse, depuis 8 ans.

Et maintenant, qui, parmi les développeuses et développeurs ici présents, peut se vanter de n’avoir jamais commis de boulette en prod ?

De mon côté, je baisse la main… en 8 ans de développement, j'ai eu le temps d'en commettre quelques-unes, des boulettes.

---

![boulettes.008](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.008.jpeg)

Je vous disais donc qu’en 8 ans j’ai eu le temps de commettre moult boulettes, je vous présente la plus spectaculaire… elle date du 8 mars de cette année.

C’est une requête HTTP DELETE que j’ai envoyée vers notre index elasticsearch, qui contenait toutes les données concernant nos ebooks.

J’ai tout supprimé en une requête, ça a été très rapide.

Je ne sais pas si vous vous souvenez du nom de l’entreprise où je bosse, mais à tout hasard je préfère préciser que les ebooks c’est quand même notre cœur de métier, et supprimer l’intégralité de nos données produits, ce n’était pas une excellente idée.

---

![boulettes.009](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.009.jpeg)

D’ailleurs, ce n’était pas une « idée » . Ce que je voulais faire en vrai, c’était supprimer seulement certains ebooks et pour ça je voulais passer un identifiant comme vous voyez là, en fin de requête.

Et donc j’avais stocké l’identifiant dans une variable, et ça s’est pas très bien passé, la variable a été vide à un moment, et pouf j’ai supprimé toutes nos données ebook. BREF

---

![boulettes.010](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.010.jpeg)

Voilà comment je me sentais après (j’étais grise-blanche pareil, mais un peu moins barbue).

---

![boulettes.011](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.011.jpeg)

![boulettes.012](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.012.jpeg)

Alors, j’ai fait ce que je fais déjà beaucoup trop, je suis allée sur twitter, et j’ai posé la question : quelle est la pire boulette que vous ayez commise au cours de votre carrière ?

J’ai eu pas mal de réponses. Pas loin de 200.

---

![bouledex.001](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/bouledex.001.jpeg)

Et toutes ces boulettes qu’on m’avait racontées, je les ai numérotés, puis stockées dans un tableur que j’ai surnommé le « boulédex ». Parce que en plus de passer trop de temps sur twitter, je passe aussi beaucoup de temps à jouer à Pokémon.

---

![boulettes.014](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.014.jpeg)

Là c’est le moment où je vous donne quelques exemples tirés de mon boulédex pour rire un peu avant de passer dans la partie plus sérieuse. Pour commencer,  celle-ci, la boulette 230 : un script en perl qui fait un `rm -rf /$variable`… et un jour `$variable` est vide. Ça me dit quelque chose…

Donc un jour, cette personne a supprimé tout le contenu du disque. Quand on fait ce genre de boulette, on est bons pour réinstaller le serveur… Quand même, la mienne était moins grosse ! (de boulette)

---

![boulettes.015](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.015.jpeg)

Ensuite, on rentre dans la catégorie spam.

Classique, si on envoie plusieurs millions de mails accidentellement, on se fait blacklister par les webmails… il faut ensuite aller montrer patte blanche pour se faire déblacklister… classique…

---

![boulettes.017](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.017.jpeg)

Dans la même catégorie, j’aime particulièrement le spam double, papier et numérique : ça pour le coup c’est quelque chose que je n’ai jamais fait. Cette personne a envoyé 60 fois la même facture — papier et email — à une trentaine de gros clients. Pourquoi ? Un mauvais if. Quand j’ai lu ce tweet, j’ai vu « un bug dans le code est arrivé en prod », et j’ai commencé à avoir envie de donner une conférence…

---

![boulettes.020](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.020.jpeg)

On arrive à la boulette 276, celle qui m’a fait relativiser BEAUCOUP. En lettres capitales.

Un monsieur pousse une mise à jour qui fait tomber le serveur et le rend indispo pendant 5 jours. Le manque à gagner ? 50 dollars par SECONDE d’indisponibilité.

Tout ça sur plusieurs machines.

Ma boulette à moi ce n’était pas du même ordre de grandeur.

---

![boulettes.023](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.023.jpeg)

Et enfin, en hors compétition, il y a les boulettes des sysadmin : celui-ci gérait des serveurs sur une baie hébergée à environ 100 km de là. Il se connectait en SSH, c’est-à-dire via internet… et il a totalement isolé sa machine d'internet. À ce moment-là, le seul moyen de rétablir le service, c'était de se rendre sur place… pour appuyer sur un bouton.

Ya des jours comme ça. Au moins, en général je n’ai pas besoin de rouler 200 km pour réparer mes propres boulettes.

---

![boulettes.027](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.027.jpeg)

Bref, une fois que j’avais bien rigolé et bien relativisé, tous ces récits de boulette m’ont donné envie d’en parler. Parce qu’il y a un certain nombre de ces boulettes qui sont tout à fait évitables en 2018.

Justement, je vais d'abord vous donner quelques astuces pour les éviter, ces boulettes.

Ensuite, car c’est impossible de les éviter, je vais vous parler de ce qu’on peut faire pour survivre à une boulette lorsqu’elle atteint la prod.

Et pour finir, car c’est ça le plus important, comment tirer le meilleur de ces pires moments pour devenir une meilleure développeuse ?

Ça vous intéresse ? Allons-y, alors !

---

![boulettes.031](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.031.jpeg)

En première partie, je vais vous donner quelques astuces pour éviter de commettre des boulettes.

On va exploiter des robots, des oiseaux, et votre cerveau.

---

![boulettes.032](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.032.jpeg)

Première sous-partie : exploiter les robots. Qu’est-ce qu’elle veut dire par là ?

---

![boulettes.033](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.033.jpeg)

Je donne l’exemple de la boulette numéro 10 : un gars qui déploie en prod à la place de la recette parce que… l’IP des serveurs est presque la même ? :o

Et donc… il tape l’IP du serveur à la main à chaque fois qu’il déploie ?

---

![boulettes.034](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.034.jpeg)

![boulettes.037](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.037.jpeg)

Ce que fait ce monsieur, c’est du déploiement manuel. Je n’aime pas ça.

Ce qui est rigolo, c’est que la première fois que j’ai donné une conférence, c’était pour râler sur le déploiement manuel. En utilisant une photo de la même statue.

Je ne vais pas refaire ma conférence en entier, mais sachez que le déploiement manuel vous fait prendre des risques inutiles. C’est pour ça que ça se retrouve dans une conf sur les boulettes.

Et aussi, ça vous fait perdre du temps sur des tâches qui n’ont pas de valeur ajoutée. Vous êtes développeurs, vous n’êtes pas tapeurs d’adresses IP ou doublecliqueurs dans filezilla.

---

![boulettes.039](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.039.jpeg)

Le premier rempart contre les boulettes, c’est de réduire le nombre d’interventions manuelles. Donc il faut automatiser : les déploiements, car ça arrive souvent ; les tests, car on a vite fait d’oublier de vérifier que ce n’est pas cassé ; et… tout ce que vous faites souvent, en fait.

Tout ce qui est récurrent et demande de toucher à la prod. Toutes les petites tâches pas très intéressantes. Par exemple, si vous dites : « à chaque fois qu’on déploie il faut penser à vider le cache » : modifiez votre script de déploiement. Ou alors « à chaque fois qu’on ajoute un nouvel éditeur, il faut insérer une ligne dans cette table ». Pourquoi ne pas écrire un script qui insère automatiquement une ligne dans la table en une seule commande ?

Vous voyez la logique ?

---

![boulettes.040](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.040.jpeg)

Pour automatiser tout ça, vous avez une belle quantité d’outils. Chez TEA on utilise capistrano pour la majorité de nos déploiements, et Jenkins pour faire tourner les tests automatisés sur toutes nos pull requests.

---

![boulettes.043](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.043.jpeg)

En résumé : si vous le faites souvent, ne le faites pas à la main.

Comment savoir par où commencer ? J'aurais tendance à commencer par les déploiements et les tâches risquées courantes, pour ensuite s'intéresser à l'intégration continue (l'automatisation des tests) qui demande un peu plus de travail.

---

![boulettes.044](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.044.jpeg)

On passe à la partie « oiseaux » qui, en réalité, parle surtout d’humains…

Et l’humour de cette partie en particulier vous paraîtra probablement… comment dire… un peu bancal.

Je ne suis pas désolée.

---

![boulettes.045](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.045.jpeg)

C’est la boulette 79 qui m’a inspiré cette partie.

Son auteur a mis à jour le schéma de la base. Une des colonnes devait changer de type.

Pour gérer ça, il a supprimé, puis recréé la colonne. Heureusement, il avait des sauvegardes. Ce qui est intéressant là, c’est qu’il a supprimé la colonne. Quand on supprime la colonne, on supprime les données. Quand on la recrée, on la recrée vide, sans les données. C'est tout à fait possible de changer une colonne de type sans perdre les données associées, il faut juste écrire la bonne commande.

Bon OK, mais c’est quoi le rapport avec les oiseaux ? J'y viens.

---

![boulettes.047](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.047.jpeg)

Les premiers oiseaux impliqués, ce sont les oies. Car ce sont des oiseaux migrateurs, et parce que ce qu’il a fait ce monsieur, c’est une migration de schéma. Et il existe des moyens pour que ces migrations se passent bien.

---

![boulettes.049](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.049.jpeg)

Un des moyens pour que ça se passe bien, c’est d’utiliser des poules.

Plus exactement, de faire passer les migrations de schéma dans des pull requests.

\#badumTss

L’humour aviaire douteux est bientôt fini, c’est promis.

La revue de code systématique par pull requests, j’en ai aussi déjà parlé en conférence. C’est fantastique pour limiter la quantité de bêtises qui se retrouvent en prod. Je les trouve, notamment, très efficaces pour éviter les problèmes liées aux migrations de schéma comme la boulette dont on vient de parler.

---

![boulettes.050](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.050.jpeg)

Et enfin, le dernier oiseau impliqué : le canard en plastique.

Vous connaissez le principe du canard en plastique ? Quand on a un problème, on l’explique à un objet inerte, et le simple fait de verbaliser aide déjà beaucoup à se rapprocher d’une solution.

---

![boulettes.051](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.051.jpeg)

Chez TEA, on a élargi cette notion de canard en plastique : on préfère se servir de nos collègues à la place.

(CE N’EST PAS SALE.)

---

![boulettes.054](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.054.jpeg)

Par exemple, on a pris l’habitude de se mettre au moins à deux à chaque fois que l’on touche manuellement à la production : un dév qui fait le boulot, et qui explique tout ça à un « canard »… qui en réalité est un autre dév.

---

![boulettes.055](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.055.jpeg)

Je vous montre la boulette 82, qui ne serait probablement pas arrivée avec la technique du canard en plastique : l’auteur a modifié toute une table, suite à une erreur dans une clause where sur une requête « update ». Évidemment, directement en prod, sans tester ailleurs avant. Il a filé le même numéro de téléphone à tous ses clients. OUPS

![boulettes.057](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.057.jpeg)

Pour ce genre de trucs, les interventions manuelles en base en prod — ça arrive chez nous aussi — je propose deux astuces santé : la première, toujours commencer par « start transaction » quand vous intervenez en ligne de commande. Comme ça vous pouvez toujours faire demi-tour (*rollback*) si vous vous rendez compte que vous avez merdé. Et *commit* si ça marche.

Deuxième astuce santé : comme précisé plus tôt, appelez un canard pour relire vos requêtes. Et pour appeler un canard…

---

![boulettes.058](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.058.jpeg)

…faites cygne ! #badumTss

(Si vous voulez travailler avec des gens qui ont ce genre d’humour, dites-le moi : on a des postes ouverts dans l’équipe technique !)

(Moi en tout cas j'adore.)

---

![boulettes.062](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.062.jpeg)

En résumé.

Faites de la revue de code systématique par pull requests.

Discuter avec un canard, c'est chouette.

Et enfin, faites cygne si vous êtes en galère.

---

![boulettes.063](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.063.jpeg)

Voilà pour la partie sur les oiseaux. Parlons de votre cerveau, maintenant.

---

![boulettes.064](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.064.jpeg)

Ce que j’ai en tête, ce sont les nombreuses boulettes où du code a été joué dans le mauvais environnement. Par exemple ici : drop table sur le dév… c’était bien le dév ? Ah non…

---

![boulettes.065](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.065.jpeg)

Ou ici : drop database en prod, alors que je pensais être en dév.

---

![boulettes.066](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.066.jpeg)

Je n’ai pas tout le contexte de ces boulettes, mais je suppose que leurs outils manquent de management visuel. C’est un terme très mal choisi pour dire « on rappelle dans quel environnement on se trouve par tous les moyens possibles ».

---

![boulettes.069](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.069.jpeg)

Je vais vous donner quelques exemples tout de suite. Nous par exemple chez TEA, on a associé une couleur à chaque environnement : violet en dév, orange en préprod, rouge en prod. Si on avait eu des daltoniens dans l’équipe on aurait sûrement choisi autre chose, et on s’adaptera si besoin.

Cette couleur, et le nom de l’environnement, on le rappelle partout : dans les invites de commande quand on se connecte en SSH, mais aussi dans les interfaces d’administration web, par exemple !

---

![boulettes.070](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.070.jpeg)

Voilà par exemple ce qu’on voit quand on se connecte en SSH sur nos serveurs de prod et de préprod : on rappelle l’utilisateur connecté, l’environnement, la machine (plateforme, librairie…) et le chemin sur le disque. Les couleurs sont différentes en prod et en préprod. Ça se fait modifiant le fichier `.bashrc`, ça ne coûte vraiment pas grand-chose et ça aide beaucoup au quotidien quand on a l’habitude de se balader sur les serveurs en ssh…

---

![boulettes.071](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.071.jpeg)

Pareil dans les interfaces web : ici, du violet dans l’en-tête pour le magento de l’environnement de dév. On a du beau orange bien laid en préprod.

Une de mes premières boulettes de développeuse, par exemple, ça a été de vider le cache sur l’environnement de prod plusieurs fois, en me demandant pourquoi je ne voyais pas les modifications dans mon magento local sur mon poste.

Ici c’est fait sur Magento, mais si vous utilisez du PhpMyAdmin, par exemple, vous bien voir la différence. Après, un vrai adminsys dirait probablement qu’il ne veut pas de PhpMyAdmin en prod, et je serais très certainement d’accord avec lui…

---

![boulettes.076](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.076.jpeg)

Un autre truc qui marche bien pour éviter les boulettes, c’est quelque chose qui a sûrement un vrai nom, mais que moi j’appelle les barrières de potentiel de flemme. Les barrières de potentiel, c’est un truc de physicien, et j’ai beaucoup fréquenté les physiciens.

L’idée d’une barrière de potentiel de flemme, c’est que, partant d’une situation non risquée et « facile », pour aller dans une situation risquée, il faut faire un truc chiant. L’idée c’est vraiment que ce soit chiant de prendre des risques.

Pas « impossible », juste « chiant ». Et la flemme du développeur limite automatiquement la prise de risque aux seules situations où c’est obligatoire. On ne va pas, au quotidien, prendre des risques.

C’est au moins aussi efficace et **beaucoup moins nocif** que de leur faire peur.

---

![boulettes.081](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.081.jpeg)

Par exemple, dans nos bases de données, on a un accès facile en lecture en ligne de commande. Pas besoin de taper de mot de passe, on a un login-path.

La situation risquée, c’est la même ligne de commande avec un accès en écriture, où on peut supprimer des données. Et donc la barrière de flemme, c’est de taper un long mot de passe pour pouvoir écrire dans la base. Ça ne marche que si l’accès en lecture est facile.

Dans le même genre, nous n’avons pas non plus les accès administrateurs sur nos serveurs de prod. Quand on a besoin des droits root, on doit créer un ticket infogérance.

---

![boulettes.082](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.082.jpeg)

En résumé pour cette partie sur le cerveau : utiliser des images, des couleurs, des trucs faciles, pour signaler absolument partout sur quel environnement vous vous trouvez.

Et aussi, exploitez le super pouvoir de la flemme, beaucoup moins nocive que la peur pour emmener des humains là où vous le voulez.

---

![boulettes.086](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.086.jpeg)

En résumé global de cette première partie : éviter les boulettes, ça tient en 3 choses :

- ne pas faire les choses à la main. Automatiser tout ce qu’on peut automatiser.
- si on ne peut pas l’automatiser, que ce soit de la relecture de code ou des interventions manuelles en prod, on le fait à plusieurs humains.
- et enfin, on exploite notre cerveau pour lui rappeler où on est, et on met des barrières de flemme pour l’empêcher d’aller là où c’est dangereux.

---

![boulettes.087](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.087.jpeg)

Voilà pour la partie 1, où on évite les boulettes. J’avais quelques autres astuces à vous montrer, mais j’ai chronométré et ça m’aurait demandé 2h30 de conférence, que je n’avais pas…

Donc je vais passer à la suite : survivre aux boulettes. C’est une partie indispensable, parce que, quelles que soient les protections que vous mettrez en place… ya un moment où vous aurez quand même une boulette. Donc, autant être préparé, pour que la boulette ne soit qu’un simple incident en prod, et pas la fin du monde…

---

![boulettes.088](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.088.jpeg)

Mettons-nous en situation, voulez-vous ? Vous venez de commettre la boulette du siècle.

Par exemple, supprimer toutes les données ebook alors que vous vendez des ebooks.

Ou alors, éteindre le serveur de prod.

Qu’est-ce qu’on fait ? Là, tout de suite, maintenant ?

On panique ?

Non.

---

![boulettes.090](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.090.jpeg)

Quand on fait une connerie, on le DIT. Tout de suite.

Et on n’a pas peur de le dire.

Une boulette en prod n’est jamais le fait d’une seule personne : c’est l’organisation de l’entreprise qui les laisse se produire et se reproduire.

Et aussi, l’organisation ne doit pas vous laisser seul-e avec votre problème. La priorité maintenant, ça ne doit pas être de vous punir, ça doit être de résoudre le problème (parce que plus il restera longtemps en prod, plus il sera gros). Si les priorités ne sont pas dans cet ordre-là, il y a un gros problème dans votre organisation.

---

![boulettes.091](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.091.jpeg)

Voilà la boulette du boulédex qui me fait dire ça : un stagiaire a redémarré la prod sans le avoir, et s’est fait défoncer (sic) pour ça. Il y a tellement de choses qui ne vont pas dans cette boulette, c’est difficile de savoir par où commencer. (Cette boulette m’éneeeeerve, et si vous me connaissez en vrai vous savez que je suis difficile à énerver.) Déjà, qu’on puisse redémarrer le serveur de prod. Ensuite, qu’on puisse le faire sans le savoir. Et que ça pose un problème autre qu’une indispo de quelques minutes. Et enfin, SURTOUT, qu’on punisse un stagiaire pour avoir commis une erreur.

Les stagiaires sont là pour apprendre. Pas pour faire le même boulot qu’un dév en étant payé-e-s des clopinettes. Les stagiaires sont des graines de dév, ils/elles ont BESOIN de se planter pour grandir. Vous, vous êtes des gens bien, donc vous le savez… mais l’entreprise de ce bébé stagiaire, visiblement, non.

---

![boulettes.092](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.092.jpeg)

Donc **vraiment** n’ayez pas peur, et demandez de l’aide à la seconde où vous vous rendez compte qu’il y a un problème.

---

![boulettes.093](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.093.jpeg)

Pourquoi ? Parce que si vous restez tout-e seul-e avec votre boulette, vous risquez la **surboulette**.

Le terme peut faire sourire, mais c’est important. En secourisme (oui, je suis SST aussi), on sait que le suraccident est souvent plus grave que l’accident.

En informatique, c’est pareil : vous avez commis une boulette, vous allez essayer de réparer, c’est normal. Mais sous l’effet du stress, car le site est indisponible là maintenant, vous allez tester direct en prod, vous allez pas bien relire vos clauses where, vous allez mal calculer les chemins dans vos rm -rf… et vous allez vous exposer à un incident plus grave encore. Je l’ai fait, ma boulette d’or 2018 était en fait une surboulette, et je vous assure que ce n’est pas drôle du tout. DONC

---

![boulettes.094](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.094.jpeg)

VRAIMENT

DEMANDEZ
DE
L’AIDE

Je radote et j’assume.

---

![boulettes.095](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.095.jpeg)

Par définition, une boulette c’est une erreur qui cause un **incident**. Je vous raconte donc rapidement comment chez TEA on gère les incidents.

Une équipe de gestion d’incident, c’est AU MOINS deux personnes, idéalement 3 si l’incident est majeur : d’un côté la personne qui résout l’incident, et de l’autre côté, une autre personne qui communique avec le reste du monde — les clients affolés, le SAV qui veut savoir quoi dire aux clients affolés, le directeur qui se demande ce qui se passe, etc. — et qui prend des notes sur ce qui se passe pour pouvoir faire le point plus tard.

On ajoute idéalement une troisième personne qui assiste la personne en charge de l’incident : on est en prod, on fait des interventions manuelles… donc on a sûrement besoin d’un canard.

---

![boulettes.096](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.096.jpeg)

Cette équipe de gestion d’incident a deux priorités : la première, c’est de rétablir le service.

---

![boulettes.097](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.097.jpeg)

Et la deuxième, ENSUITE, c’est de diagnostiquer le problème. Essayer de comprendre ce qui a merdé. Au moins pour les boulettes c’est facile, puisqu’en général la personne qui l’a commise s’en est bien rendu compte.

Pas l’inverse.

Par exemple, si redémarrer brutalement le serveur vous aide à rétablir le service, redémarrez-le d’abord et allez lire les logs ensuite.

Je précise que dans ces priorités, il n’y a pas « punir le coupable ».

---

![boulettes.100](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.100.jpeg)

Et pendant tout ce temps, on communique : en interne, par mail, par chat, en présentiel, notamment pour que votre SAV sache quoi répondre aux clients, et en externe, par exemple via une page de « status » si vous en avez une.

---

![boulettes.101](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.101.jpeg)

Pour résumer cette partie sur la survie aux boulettes qui arriveront de toute façon.

Pour gérer un incident ou une boulette, on s’y met à plusieurs. Ça veut dire au moins deux.

Pendant l’incident, la priorité numéro 1 c’est de rétablir le service. On réfléchit ensuite.

Et pendant tout ce temps, on communique. On n’essaie pas de cacher une boulette sous le tapis, ça ne fait que la rendre pire encore.

---

![boulettes.102](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.102.jpeg)

Maintenant qu’on a bien survécu aux boulettes, il est temps d’en tirer des conclusions. J’ai commis la plus grosse boulette de ma vie. C’est passé, on a réparé. Maintenant, qu’est-ce qui va se passer ?

---

![boulettes.103](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.103.jpeg)

Cette partie est importante pour moi, car dans l’imaginaire collectif, le fait de se tromper c’est souvent vécu comme un échec. C’est normal, c’est ça qu’on apprend à l’école. Si on se trompe on a des mauvaises notes.

---

![boulettes.104](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.104.jpeg)

Pourtant, plus j’en fais, plus je trouve que les boulettes ne sont pas des échecs. Le vrai échec, c’est de faire plusieurs fois la même erreur.

---

![boulettes.105](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.105.jpeg)

Le vrai échec, c’est de répéter les erreurs. Un stagiaire qui tombe la prod, ça arrive. Une boîte où chaque année, il y a un stagiaire qui tombe la prod pendant sa première semaine de stage, c’est la boîte qui a un problème. Pas les stagiaires. Vous voyez la logique de « l’échec collectif » ?

---

![boulettes.106](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.106.jpeg)

Moi je préfère voir les boulettes comme de l’engrais qui nous fait grandir.

---

![boulettes.107](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.107.jpeg)

Pour moi, les boulettes sont surtout des occasions d’apprendre. Donc…

---

![boulettes.108](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.108.jpeg)

Attrapez-les toutes ! Toutes les occasions !

(Ça manquait un peu de pokémon, si vous voulez mon avis)

---

![boulettes.110](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.110.jpeg)

Bon OK, elle est mignonne avec ses pokéball et ses beaux discours, mais elle n’aurait pas un outil concret à nous proposer ?

Eh bien oui !

---

![boulettes.115](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.115.jpeg)

Chez nous, les post-mortem ça marche assez bien pour apprendre.

Quand un incident s’est produit en prod, que ce soit une boulette ou non, nous nous posons et nous écrivons un compte rendu à tête reposée, que l’on envoie par mail au reste de l’entreprise.

Dedans, nous récapitulons :

- les symptômes de l’incident, chiffrés (nombre de clients touchés, durée du problème…). C’est objectif, souvent ça permet déjà de dédramatiser par rapport au ressenti.
- les explications techniques, un peu vulgarisées car c’est à destination de nos clients internes ou externes qui ne sont pas techniciens. Vulgariser et reformuler ce qui s’est passé permet de mieux comprendre nous-mêmes en tant que tech, sans se réfugier dans du jargon…
- ensuite on passe à ce qui a fonctionné et ce qui n’a pas fonctionné dans la gestion de l’incident en elle-même. Pour moi c’est très important qu’il y ait des choses dans les deux rubriques : souvent on se concentre sur le négatif, surtout après une situation de stress : on a mis longtemps à détecter le problème, on a eu 5000 € de manque à gagner, par exemple… C’est toujours intéressant de se concentrer aussi sur le positif : on a rétabli le service en quelques minutes une fois qu’on a détecté le problème, on a pu récupérer toutes les commandes après l’indisponibilité, etc.
- et au final, quelque chose d’important car le vrai échec, on l’a dit, c’est de commettre plusieurs fois la même erreur : quelles actions vont être faites, concrètement, pour que l’incident ne se reproduise plus, ou en moins grave ? Par exemple pour ma boulette d’or, on a compris que l’index ES mettrait des jours à être reconstruit, donc on a mis en place une politique de sauvegardes pour perdre peu de données en cas de souci. On aurait aussi pu penser à un moyen simple de supprimer des livres dans l’index en cas de besoin, si on avait eu ce besoin.

---

![boulettes.116](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.116.jpeg)

Précision supplémentaire à propos des post-mortems : le but c’est de s’améliorer tous ensemble. Donc on a pris l’habitude de ne pas mentionner le nom des personnes impliquées dans le mail, qu’elles soient impliquées en bien ou en mal. Quand j’ai fait ma boulette d’or, on a dit que c’était une erreur humaine, mais on n’a pas précisé quelle humaine l’avait commise. Bon, après, tout le monde le savait puisque c’est moi qui ai apporté les croissants…

---

![boulettes.117](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.117.jpeg)

En conclusion de cette longue conférence, un rappel des trois axes d’attaque des boulettes.

---

![boulettes.121](/Users/tut/Code/tut-tuuut.github.io/img/2018/boulettes/boulettes.121.jpeg)

les boulettes :

- on peut les éviter, grâce à une automatisation suffisante des tâches courantes, et grâce au super pouvoir de la flemme et des canards en plastique ;
- on peut y survivre, en formalisant la gestion des incidents ;
- surtout surtout surtout, on *doit* en tirer des leçons. Ne refaites pas deux fois la même erreur.

---

