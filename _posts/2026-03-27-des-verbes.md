---
layout: post
title: Des verbes
---

Je suis développeuse web depuis une grosse quinzaine d'années. Les IA génératives sont en train de me dégoûter de mon métier.

Je déteste avoir le ventre qui se tord et la voix qui se brise quand j'essaie d'expliquer à quel point je les déteste. Alors j'écris, les yeux brillants.

Je déteste l'idée d'être dans cette industrie qui, globalement, continue d'utiliser ces outils. Chaque problème qu'ils posent, pris séparément, suffit à mes yeux pour s'en passer, et pourtant mes pairs continuent de les produire, de les défendre, de les utiliser. J'en ai marre de ne plus pouvoir faire trois pas dans le monde de la tech sans croiser un gars qui m'explique que tous les problèmes de l'IA sont causés par les utilisateurs qui ne savent pas s'en servir correctement.

Je suis dégoûtée.

C'est assez nouveau, en fait. Pourtant, je suis une femme qui a étudié en école d'ingénieurs et travaillé dans diverses boîtes d'informatique pendant seize ans : des dégoûtants, j'en ai côtoyés. Des machos, des violents, des alcoolisés, des vieux et des jeunes, avec et sans cravate. Curieux, en fait, que je n'aie pas été dégoûtée plus tôt, par ces dégoûtants tellement mieux payés que moi, comme tant d'autres femmes de la tech avant moi.

Mais les IA génératives, c'est différent.

Elles détruisent tout. L'environnement. L'humanité. Et, c'est là que ça devient personnel, elles détruisent très précisément ce que j'aime dans mon métier pour mieux me noyer dans le reste.

Personnellement je refuse de me servir des IA génératives ; je mesure la chance d'être mon propre employeur et d'avoir la liberté de refuser. Tant d'autres ont expliqué ce qui ne va pas avec les IA génératives. Je ne ferais que répéter. Je vais essayer de me concentrer ici sur ce qui m'a fait aimer ce métier.

De ce métier, et dans l'absolu, j'aime principalement trois choses : créer, apprendre et transmettre. Le métier de dev a ceci de sympathique — en tout cas il avait ceci de sympathique avant 2022 — qu'il permet de varier les plaisirs en permanence avec des petites combinaisons : apprendre en créant, créer pour transmettre, et apprendre en transmettant.
## Créer

Tout le monde n'est pas de mon avis, mais je trouve que le développement logiciel est un métier créatif. Quand je conçois et code dans de bonnes conditions, je me sens comme quand je dessine. J'aime cette partie méditative où je réfléchis tranquillement devant mon carnet, où au clavier les pensées s'enchaînent au bout de mes doigts pour progressivement donner forme à des interfaces et des algorithmes. J'aime pouvoir dire "ah je suis contente d'avoir eu cette idée pour cet écran/cet algorithme". J'aime pouvoir créer en maniant le CSS, le SQL, et Python entre les deux. Je peux créer des objets numériques très sérieux et utiles, les concevoir de façon très robuste et me faire payer pour ça, mais j'ai aussi le champ libre pour créer des blagues et des fantaisies poétiques interactives.

Donc j'aime à la fois concevoir et écrire. J'entends qu'on n'aime pas écrire du code, bien que ça m'échappe un peu. Ces gens-là deviennent paraît-il architectes. Franchement ça ne m'a jamais tentée. Je trouve ça un peu bizarre de vouloir exercer dans le domaine de l'ingénierie logicielle alors qu'on n'aime pas coder. C'est comme un illustrateur qui n'aimerait pas dessiner.

La conception et l'écriture, ce n'est pas une étape que j'ai envie de déléguer, non seulement par goût mais aussi par pragmatisme. Peut-être que c'est la raison la plus personnelle de mon rejet des IA génératives, je ne sais pas à quel point c'est vrai pour d'autres.

## Maintenir

J'ai une mémoire bizarre qui me rend efficace pour maintenir du code que je comprends ; et je le comprends d'autant mieux que j'ai eu un accès direct à la personne qui l'a écrit.

Mes ex-collègues de TEA se souviendront peut-être de mon premier jour de boîte, où j'ai résolu en 10 minutes un bug qui les occupait depuis plusieurs jours. Certains emails n'étaient pas envoyés par le bon expéditeur. Ce problème avait été causé par mes anciens collègues de SSII dont je savais qu'ils aimaient bien utiliser le mot-clé `static` dans leurs classes PHP, parce que le directeur technique de l'époque avait dit que c'était plus performant. Et toc, j'ai supprimé le mot-clé `static` pour que la propriété redevienne propre aux instances, et les mails se sont soudain retrouvés envoyés par le bon expéditeur. (Pourquoi me souviens-je de cet épisode en 2026 alors qu'il date de 2013 ? Note de service pour mon cerveau : j'aimerais mieux me souvenir du numéro de téléphone du barbu mignon qu'on croise tous les jours. Tu sais, celui qu'on a épousé en 2012. Mais passons.)

Partant de là, du fait que je comprends le code d'autant mieux que je comprends son autrice, autant dire que je suis *redoutable*, et j'assume totalement l'italique, pour maintenir du code que j'ai écrit moi-même. Car en effet, je dispose d'un accès direct et permanent à moi-même. En partant d'une ligne de log, d'une demi-capture d'écran ou d'un message de tchat, éventuellement en posant une ou deux questions de contexte, je peux comprendre en quelques secondes d'où vient le bug et ressembler à une sorte de magicienne du code auprès de mes client·es. Alors qu'en fait ce qui m'aide, c'est surtout de connaître la personne qui a écrit le code.

## Connaître

Remarquez, souvent ça m'aide aussi de connaître la personne *qui utilise* mon code. Par exemple chez Galactée, pour qui j'ai codé un outil de suivi d'activité de bénévolat (nombre et durée des appels de soutien à l'allaitement), j'ai pu identifier un bug assez spectaculaire essentiellement car je connaissais les habitudes de Charlotte, l'unique camarade qui le rencontrait. Elle était très active — et elle l'est toujours, pluie de cœurs multicolores sur elle qui aide tellement de mères en galère avec leur allaitement — en permanence téléphonique. Donc elle avait beaucoup de statistiques à saisir. Qu'elle a voulu saisir toutes d'un coup à la fin de l'année pour préparer l'AG.

Moi j'avais gentiment mis sur la page d'accueil des animatrices un formulaire de saisie rapide des derniers créneaux de perm où les statistiques manquaient… Sauf que Charlotte, elle en avait tellement que son formulaire contenait plus de champs que la config [max_input_vars](https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars). Quand j'ai découvert, dans les logs, l'existence de la limite, j'ai rapidement compris le problème : j'ai pu indiquer à Charlotte un chemin détourné pour saisir ses données pendant que je replongeais au bon endroit dans le code pour limiter le nombre de champs affichés.

Ce bug est resté dans mes archives mentales comme "le bug Charlotte". J'y repense avec tendresse à chaque fois que je rencontre un formulaire qui contient trop de champs au goût du serveur.

J'ai des exemples de bugs dans d'autres langages (CSS, Python, SQL) que je n'aurais pas pu résoudre aussi rapidement — voire pas pu résoudre du tout, peut-être — si je n'avais pas cette mémoire des chemins mentaux pris pour la conception et l'écriture du code.

## Lire

Alors oui, parfois on travaille avec du code que l'on n'a pas écrit, et c'est bien. Souvent, on travaille sur du code et on n'a pas la possibilité de discuter avec son autrice car elle est partie vers d'autres aventures, et c'est super car on ne veut pas enchaîner les gens à leur ordi.

Donc souvent, je me retrouve à relire le code de quelqu'un d'autre. En fait, j'aime bien. Parfois, ça se lit comme un roman. Je peux retracer à partir du code le raisonnement de l'autre, parfois pour savoir quelle étape du raisonnement a failli et le corriger a posteriori.

 Je constate après avoir lu du code pendant des années que chaque dev apporte sa personnalité à son code. Les annotations git font d'ailleurs partie des éléments que je regarde maintenant quand j'arrive sur une nouvelle base de code, car l'autrice et la date sont des infos très intéressantes. Là je vois que c'est Bidule, dont je sais qu'elle était plutôt junior et peu accompagnée lors de l'écriture du code, donc je m'attends à des petits soucis de perf assez rapides à régler. Là je vois que c'est Truc, qui fait du code un peu perché mais souvent très malin, donc je vais probablement piquer des idées. Là c'est Machin qui utilise des noms de variables un peu trop courts à mon goût, je vais prendre un peu de temps pour comprendre et renommer tout ça afin de faciliter la prochaine relecture. Là je vois que c'est… moi ? Ah oui, je ne connaissais pas encore le module chose en 2024, je vais raccourcir ce petit bout de fonction.

Pour revenir à ce que je déteste chez les IA génératives : elles détruisent ce lien à l'humain que je perçois dans le code, cette base de raisonnement qui n'existe soudain plus du tout. Je n'ai plus d'autrice pour m'expliquer, je n'ai plus personne à comprendre.

J'ai constaté vraiment douloureusement que le code généré ne se lit pas du tout de la même façon que du code écrit. Il ne se "déploie" pas dans mon espace mental d'une façon que j'arrive à exploiter. Là où j'étais efficace, voire redoutable, depuis des années, je me retrouvais à patauger dans des bouts de code sans cohérence et à penser que c'était moi le problème.

J'ai besoin de pouvoir saisir l'humain en relisant le code pour, moi, fonctionner. Donc même si moi je reste comme une vieille à écrire mon code moi-même, je vais souffrir en relisant le code que mes pairs ont généré. Cela ne rend pas très attirante la perspective de rester encore 25 ans dans le métier.

## Apprendre

Le développement logiciel, c'est aussi un métier de la connaissance où on ne s'arrête jamais d'apprendre. Ça devrait être le métier parfait pour moi qui ai écrit, ado, ce qui est resté mon dicton préféré : « on commence à vieillir quand on finit d'apprendre ». Alors, pardonnez-moi le terme, qu'est-ce qui a merdé ? Pourquoi en suis-je arrivée à ce point d'amertume ?

Je ne sais pas comment bien vous faire comprendre qu'à mes yeux, l'apprentissage continuel est une composante fondamentale du métier. On apprend en faisant. On fait à partir de ce que l'on a appris. Les dev les plus prometteuses et prometteurs que j'ai croisé·es n'étaient pas celles et ceux qui savaient le plus de choses, mais celles qui savaient le mieux apprendre, ceux qui avaient l'esprit le plus ouvert. 

Je retiens très bien les informations qui me sont livrées avec un morceau de contexte. Notamment, je me souviens des gens et des circonstances et ma mémoire code ça en dur pour de longues années.

Mon ex m'a parlé des masques de sous-réseau, au début du siècle. Mon tendre époux m'a appris une foule de choses allant de la tarte au citron à Excel. (C'est plutôt pour la tarte au citron que je l'ai épousé, pour info.) En Python, Florian m'a permis de comprendre les compréhensions, Anthony m'a montré `all()` et `any()` et m'a appris à aimer ce langage, tout ça pendant un mois de décembre désœuvré. Jean-Michel a été le tas sur lequel j'ai appris Django quand je suis arrivée sur le projet la bouche en cœur avec surtout de l'expérience en PHP. (Pardon JM, je ne voulais pas te traiter de tas, c'était juste pour jouer avec l'expression…) Carmen nous a parlé de `parametrize()`, ma fonctionnalité préférée de pytest, lors d'un meetup de meufs. Raphaël G. est toujours ma référence pour le CSS et l'humour alsacien grâce à ses conférences incroyables. En accessibilité, je peux citer plein de gens rencontrés à Paris Web. Ce client juriste qui passait par là m'a appris involontairement, à la faveur d'une mise en prod un surlendemain de vaccin, l'existence des enregistrements DNS de type AAA. 

(Pourquoi me souvenir de tous ces détails et toujours pas du numéro de téléphone de mon mari ? Vraiment…)

Comment me souviendrais-je de tout cela si tout ce que j'apprenais se trouvait dans le même contexte ?

## Transmettre

L'exercice du métier pratiqué dans des conditions idéales favorise la transmission presque constante des connaissances.

Au quotidien, une heure de pair programming c'est une quantité surprenante de petites et grandes informations qui sont échangées dans les deux sens ; on parle du code qu'on écrit, mais aussi de nos outils. Une discussion autour d'une pull request c'est l'occasion d'améliorer le code produit mais aussi de préciser ce que l'on sait sur la CI, sur l'installation des dépendances, etc.

Un meetup, c'est l'occasion d'en apprendre davantage sur un sujet technique, et surtout sur l'état du marché local de l'emploi des dev. Une conférence, pareil mais à une échelle nationale ou internationale.

Un shitpost sur Mastodon ou feu Twitter, c'est l'occasion de prendre des notes sur les habitudes des autres, sur un outil à tester le lendemain, une conférence à visiter.

Petit à petit, au fil des mois et des années, j'ai construit ma compétence comme une somme de petites choses que je sais faire plus ou moins par hasard car j'ai rencontré un ensemble de belles personnes qui m'ont marquée et transmis un peu de leur savoir. Pour faire une référence un peu facile : ce métier, c'est surtout des rencontres. La technique je trouve ça assez secondaire. 

Travailler uniquement avec l'IA générative prive de ces rencontres toutes et tous les dev qui commencent. Tout ce que l'on transmet, c'est encore plus de données à la machine. Elle ne vous le rendra pas.

## Conclure

Je suis inquiète de constater que je ne me sens pas beaucoup mieux après avoir écrit plus de 2200 mots. Je rage de savoir que mon travail va être avalé par des bots et recraché au hasard sous forme de soupe sans âme. Je me demande si une râlerie supplémentaire sur l'IA va changer quelque chose ; je crains que non. Je crains aussi un peu pour mon employabilité, à affirmer publiquement que je refuse l'IA générative.

En résumé : ça ne va pas fort.

Je ne suis pas très sûre de vouloir rester développeuse dans ces conditions.

En 2026 j'ai pris la résolution de regarder d'autres métiers. De loin, pour l'instant. Juste pour réfléchir. Pour savoir dans quelle direction accélérer quand je serai en âge de faire ma crise de la quarantaine.

Je m'apprête à suivre une formation de prise de parole au micro. J'envisage d'aller assister à des oraux de concours de l'enseignement. Et surtout, j'ai rouvert mon dossier de reconversion en sage-femme. Le métier me semble encore plus intéressant qu'en 2018. Mes quelques années de plus me donnent encore plus de raisons de vouloir l'exercer. J'aimerais vous assurer que je m'arrêterai en chemin si la bulle éclate enfin, mais je crois que c'est trop tard.