---
layout: post
title: "Standards métaphoriques"
categories: tech
tags: html standard w3c
---

Bonjour. Vous le savez peut-être, mon métier dans la vie, c’est de faire des sites web. En gros. Je ne fais pas tout dans les sites web, mais l’idée est là.<!-- more -->

Quand le métier de quelqu’un est de faire des sites web, son devoir est de respecter les standards du web, dans la mesure du possible. En général c’est assez possible, il y a quelques règles à connaître, et il ne faut pas avoir peur de vérifier les autres. Les standards du web sont écrits par un groupe de gens d’origines et de métiers divers, regroupés sous le nom de W3C. Ces gens-là écrivent dans des longues recommandations comment on doit écrire le code HTML qui constitue les pages que vous lisez, donnent des conférences techniques pour informer les gens et recruter des joueurs de loup-garou[^loupgarou], et ont un travail et une vie en dehors du W3C. Si j’ai bien compris.

Bref. Tout ça pour dire qu’il y a des standards, que c’est mieux de les respecter, et que pour les respecter, c’est mieux de les connaître un peu au lieu de passer sa vie sur les sites de référence pour savoir comment emboîter les éléments et avec quoi les habiller. Donc personnellement, j’ai des petits trucs mnémotechniques(2) pour retenir les standards un peu tordus. Par exemple, les tableaux. En HTML, on peut faire des jolis tableaux, comme ça, par exemple :

<table>
<tbody>
<tr>
<th>Mâle</th>
<th>Femelle</th>
</tr>
<tr>
<td>Canard</td>
<td>Cane</td>
</tr>
<tr>
<td>Taureau</td>
<td>Vache</td>
</tr>
</tbody>
</table>

D’accord. Il n’est pas VRAIMENT joli. Mais il est standard, parce que je lui ai donné une structure standard. Le code derrière ressemble à ça :

{% highlight html %}
<table>
  <tbody>
    <tr>
      <th>Mâle</th>
      <th>Femelle</th>
    </tr>
    <tr>
      <td>Canard</td>
      <td>Cane</td>
    </tr>
    <tr>
      <td>Taureau</td>
      <td>Vache</td>
    </tr>
  </tbody>
</table>
{% endhighlight %}

Ce n’est pas bien méchant. Tous les trucs entre chevrons (`<truc>`) sont des balises. Les balises qui commencent par un slash (`</truc>`) sont des balises fermantes. Les autres sont des balises ouvrantes. Quand on ouvre une balise, on peut en ouvrir d’autres dedans, mais il faut respecter l’imbrication : si j’ouvre une balise `<truc>` à l’intérieur d’une balise `<machin>`, je dois refermer `<truc>` avant de refermer `<machin>`.

Voilà. Mon métier c’est ça : ouvrir et fermer des balises, basiquement. (… très basiquement. Je fais d’autres trucs aussi, quand même.)

Donc ça c’était pour les gens qui ne sont pas bilingues français-HTML. J’en viens au fait. À un tableau, on peut donner une structure comportant un en-tête, un corps et un pied de tableau. Ces trois parties sont marquées par les balises `<thead>`, `<tbody>` et `<tfoot>`. Plutôt logique : `<thead>` pour table-head, `<tbody>` pour table-body, et je vous laisse deviner pour la dernière balise.

Or, sur ce point, les standards contredisent ce que penserait la raison, ou du moins l’instinct humain : on voudrait déclarer, dans le code HTML, la tête en premier, puis le corps, puis les pieds, un peu comme pour un accouchement.

Oui, mais ! Déclarer n’est pas accoucher. La structure en trois parties dans un tableau n’est pas là que pour faire joli : il s’agit de reporter dans l’en-tête et le pied les informations importantes, récurrentes, qui devront par exemple apparaître sur toutes les pages d’une très grande table qu’on voudrait imprimer. Ces informations étant importantes, on doit les déclarer en premier. L’ordre de déclaration est donc toujours `<thead>`, puis `<tfoot>`, et seulement à la fin l’élément `<tbody>`.

Pour se souvenir de cette petite blagounette, on peut se rappeler la signification sémantique des éléments `<thead>` and co. Personnellement, j’oublie toujours, et finalement, je perdais souvent du temps à vérifier sur les sites de référence pour comprendre pourquoi mon sniffeur d’écarts au standard grognait tout le temps.

Finalement, j’ai opté pour l’astuce mnémotechnique : le tableau structuré standard est un bel homme (forcément, il est standard et bien de tous points de vue), charmant, mais… Avec les pieds sur les épaules. Ça refroidit un peu, je vous l’accorde. Voilà ce que ça donne, le `<tfoot>` avant le `<tbody>` !

![](/img/2011/110120-a.png)

Enfin… je devrais dire « le <tfoot> avant les <tbody> », puisque le rédacteur zélé peut insérer autant de corps qu’il le veut, pour regrouper logiquement son contenu. Sémantiquement c’est très bien, mais mon image métaphorique est encore moins draguable, du coup. Dommage, il était tellement mignon…

![](/img/2011/110120-b.png)

[^loupgarou]: Mais grâce à moi, les villageois ont gagné à Lyon. Hin hin hin.