---
layout: post
title:  "Aujourd’hui, j’ai appris"
categories: code
---

Voilà trois ans que je m'amuse à relever le défi [#adventOfCode](https://adventofcode.com/). C'est un calendrier de l'avent qui propose deux jeux de programmation à résoudre chaque jour de l'avent. En 2018 j'ai participé en résolvant les énigmes en PHP, avant de me casser les dents sur un djikstra vers la fin décembre… Que j'ai fini par résoudre en pompant éhontément du code Python sur reddit. En 2019, j'ai décidé de faire tout l'advent of code en Python, pour en apprendre un peu plus sur ce langage. Je suis tombée sous le charme. Depuis, j'ai envie de le pratiquer professionnellement, mais je n'ai pas encore réussi à saisir une occasion de le faire.

Comme je n'ai pas écrit une ligne de Python depuis décembre 2019, j'ai décidé de m'attaquer aux jeux de l'AoC 2015 en Python 3.9 pour me refaire la main. Ces deux derniers jours ont été riches en découvertes. Plutôt que de les tweeter et que ce soit oublié, notons-les ici.

## Détecter les répétitions de caractères dans une chaîne

Ce n'est pas seulement une découverte Python, c'est aussi une découverte sur les expressions régulières.

Dans un premier temps, il a fallu s'intéresser au jeu mathématique le plus stupide du monde à la solution la plus compliquée. Celui où `1211` se lit "un 1, un 2, deux 1" et donc le terme suivant est `111221`. Il fallait faire ça 40 puis 50 fois en partant d'une chaîne de 10 caractères, et donner la longueur de la chaîne résultante[^3]. 

Je ne savais pas faire ça, [ma première approche a été purement algorithmique](https://github.com/tut-tuuut/advent-of-code-shiny-giggle/blob/master/2015/10/code.py#L4-L18). Ma foi je trouvais ça joli, et ça a marché pour les 40 premières itérations, même s'il a fallu quelques secondes. Par contre c'était trop neuneu comme code pour arriver jusqu'à 50 itérations dans un temps raisonnable : la longueur des chaînes augmentait de façon quadratique ! Donc j'ai cherché sur mon moteur de recherche préféré, et j'ai trouvé la regex suivante : `(\d)\1*`

Elle mérite quelques explications, parce que j'ai eu du mal à rentrer dedans :

- `\d` c'est un chiffre (un `\d`igit) ;
- on l'entoure de parenthèses, ça donne un *capturing group* `(\d)` ;
- et ensuite avec `\1` on peut rechercher une autre occurrence de ce qui a été attrapé dans le premier *capturing group*, en l'occurrence juste après (c'est ça la vraie découverte pour moi, d'utiliser `\1`, `\2` etc. pour réutiliser des groupes de capture dans une même regex) ;
- et on ajoute une `*` car on s'intéresse à n'importe quel nombre de répétitions de ce chiffre.

Ensuite, quelques recherches et lectures de documentation plus loin, j'ai appris que `re.sub` (le truc pour faire des rechercher-remplacer à partir d'une expression régulière) pouvait prendre une fonction en deuxième paramètre, laquelle prend les objets `match` en argument et doit retourner la chaîne qui doit remplacer l'élément attrapé par la regex.

Dans la situation qui nous intéresse, `match.group(0)` contient toute la chaîne qui a matché la regex, donc le groupe de chiffres identiques. `match.group(1)` contient le chiffre capturé par les parenthèses. Donc si on revient au début du problème, on a besoin de `len(match.group(0))`  suivi de `match.group(1)`. Je les concatène avec `f'{truc}{bidule}'` car je ne sais pas comment faire sinon pour concaténer des chaînes en Python. (Ou plutôt je ne sais plus, car j'aime trop la syntaxe `f''` depuis que Pierus me l'a montrée.)

Ainsi, dans la mon fichier `code-less-dumb.py` (si si, [je l'ai vraiment appelé comme ça](https://github.com/tut-tuuut/advent-of-code-shiny-giggle/blob/master/2015/10/code-less-dumb.py#L4-L9)), le cœur de la résolution contient trois lignes de code :

```python
def elvesSay(s):
    # https://docs.python.org/3/library/re.html#re.sub
    regex = r'(\d)\1*'
    # (\d) one digit in capturing group,
    # \1* followed by 0 or more of the result of the 1st capturing group
    return re.sub(regex, lambda x: f'{len(x.group(0))}{x.group(1)}', s)
```

Avec ça, mon code a résolu les 50 itérations en deux clignements d'yeux et j'ai pu passer à la suite. J'étais contente mais je n'aurais jamais trouvé ça sans StackOverflow et [Regex101.com](https://regex101.com/r/I3rt7f/1/) !

Quelque temps plus tard, le responsable sécurité IT du Père Noël indiquait cette condition pour qu'un mot de passe soit acceptable :

> Passwords must contain at least two different, non-overlapping pairs of letters, like `aa`, `bb`, or `zz`.
>
> Les mots de passe doivent contenir au moins deux paires distinctes de lettres qui ne se recoupent pas, par exemple `aa`, `bb`, ou `zz`.

Et là j'ai dit merci le problème débile à solution compliquée, car je n'ai pas eu besoin de recherche web pour écrire la bonne Regex : je sais attraper des lettres depuis longtemps avec `[a-z]`, et depuis peu je sais aussi détecter des doublons avec `\1` et `\2`. Il ne m'a pas fallu longtemps pour écrire [ma regex](https://regex101.com/r/eakwfV/1) (comme d'habitude, c'est plus facile à écrire qu'à relire donc vous pouvez cliquer sur le lien) :

```python
twoPairsRegex = r'([a-z])\1{1}[a-z]*([a-z])\2{1}'
```

*Par contre*, il m'a fallu longtemps pour comprendre pourquoi `re.match(twoPairsRegex, 'aablblblboo')` donnait un résultat, et pas `re.match(twoPairsRegex, 'tattoo')` ALORS QUE NORMALEMENT VOILÀ

Hé bien il faut utiliser `re.search` si on veut chercher ailleurs qu'au début de la chaîne, voilà. (Je pense que je vais la refaire, cette erreur…)

## Se faire avoir par le passage par référence

Je suppose que PHP fait du passage par copie quand on passe un tableau dans un appel de fonction. Je dis que je suppose, parce que je n'ai pas vérifié. Ce que je sais quand même c'est qu'en plus de dix ans de PHP je ne me suis jamais fait avoir par une blagounette du genre "ah tiens en fait tous tes tableaux sont le même tableau".

Alors qu'en Python ça m'arrive TOUT LE TEMPS. Les listes Python c'est indubitablement beaucoup plus référentiel[^2] que les tableaux PHP, et ça met le temps à rentrer dans mon cerveau.

Père Noël voulait faire le tour de tout le Pôle Nord en prenant le chemin le plus court qui permet de passer par tous les villages. C'est un problème assez classique de parcours de graphe, ça se fait bien par récursivité. J'ai écrit ce code-ci :

```python
    def visit(node, path):
    		# on ajoute le nœud au chemin que l'on examine
        path.append(node)
        if len(path) == graphLen: # si on voit qu'on a visité tous les nœuds,
            finished_path(path)   # on fait ce qu'il faut
            return
        for neighbor in nx.neighbors(graph, node):
            if neighbor in path: # on ne visite pas un nœud déjà visité
                continue
            visit(neighbor, path) # on visite tous les voisins non visités #récursivité
```

HÉ BEN ÇA MARCHE PAS. Ça trouve un chemin, certes, mais pas du tout le plus court.

Ce code-ci, par contre, fonctionne. Jouez à trouver la différence. (En vrai c'est un bug compliqué dont le correctif demande moins de 10 caractères, j'adore.)

```python
    def visit(node, path):
    		# on ajoute le nœud au chemin que l'on examine
        path.append(node)
        if len(path) == graphLen: # si on voit qu'on a visité tous les nœuds,
            finished_path(path)   # on fait ce qu'il faut
            return
        for neighbor in nx.neighbors(graph, node):
            if neighbor in path: # on ne visite pas un nœud déjà visité
                continue
            visit(neighbor, path.copy()) # on visite tous les voisins non visités #récursivité
```

Et c'est encore plus fourbe avec les listes de listes où il faut ruser avec des deep_copy ou de la tricherie syntaxique. Je me trompe encore à chaque fois que je dois générer une grille (c'est-à-dire dans 50 % des problèmes AoC).

## Les _comprehensions_ de listes

Je me demande quel serait le terme exact en français, parce que quand on ne sait pas ce que c'est, le terme « compréhension » nuit un peu à la compréhension justement.

J'allais avoir besoin de boucler de nombreuses fois sur les triplets `abc`, `bcd`, `cde`, `def`, etc. jusqu'à `xyz`. Ma première idée a été de les taper à la main, après tout ça ne faisait que 24. Sinon, je pouvais aussi imaginer une boucle de zéro à 23, et utiliser la syntaxe qui permet facilement de couper une "tranche" dans une chaîne ou une liste. Genre :

```python
triplets = []
for i in range(24):
  triplets.append('abcdefghijklmnopqrstuvwxyz'[i:i+3])
```

Puis je me suis souvenue d'un article qui parlait d'un moyen simple de faire des transformations de listes et de <del>tableaux</del> trucs itérables en Python[^1]. Et ça avait un nom bizarre. Donc j'ai cherché "Python" dans mon historique Firefox, j'ai retrouvé l'info que c'était une *comprehension* et j'ai fini par arriver à cette syntaxe :

```python
triplets = ["abcdefghijklmnopqrstuvwxyz"[i:i+3] for i in range(24)]
```

Si je veux un *set* à la place d'une liste, je remplace les crochets par des moustaches :

```python
triplets = {"abcdefghijklmnopqrstuvwxyz"[i:i+3] for i in range(24)}
```

Et si je veux un générateur à parcourir juste une fois sans stocker une liste en RAM (pas mon besoin, mais ça peut arriver), j'y mets des parenthèses :

```python
tripletsGenerator = ("abcdefghijklmnopqrstuvwxyz"[i:i+3] for i in range(24))
```

J'aime beaucoup cette façon de générer des suites à la place d'autres suites. C'est plus élégant que les `filter()` et `map()` qui nécessitent une syntaxe "fonction" dans d'autres langages.

Notons que dans mon vrai code, j'ai utilisé la constante `string.ascii_lowercase` au lieu de `'abcdefghijklmnopqrstuvwxyz'`.

Si vous voulez en savoir plus, l'ami Exirel m'a partagé un [article sur les compréhensions de liste](http://blog.exirel.me/subtile-comprehension-de-listes) (suite à quoi j'ai utilisé la syntaxe générateur en voulant un *set*, ce qui n'a pas marché).

## ipython

C'est plus joli que la console Python de base, oui.

*Avant ipython :*

![Console en noir et blanc](/img/2020/avant.jpg)

*Avec ipython*:

![Console en couleur](/img/2020/apres.jpg)



[^1]: Je viens du PHP, hein. Pour moi tout ça c'est des tableaux.

[^2]: Je suis à peu près sûre que ça n'existe pas, mais là dans ma tête c'est clair.

[^3]: Au bout de 40 fois, on est à un peu plus de 300.000 caractères. Au bout de 50 itérations, la réponse est aux alentours de 4 à 5 millions de caractères donc c'est bif bof à faire à la main.