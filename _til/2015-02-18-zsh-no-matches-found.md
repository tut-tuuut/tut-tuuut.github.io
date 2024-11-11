---
layout: til
tags: zsh ruby
title: Zsh - erreur "no matches found"
---

Mentionné dans [ce billet](https://thoughtbot.com/blog/how-to-use-arguments-in-a-rake-task) : quand je veux invoquer une tâche rake avec des arguments, comme ceci :

```
rake my:task:name[my_arguments]
```

J'obtiens une erreur “zsh: no matches found”, et c'est chiant. Je suis obligée d'écrire ça :

```
rake "my:task:name[my_arguments]"
```

La solution est de modifier le fichier `.zshrc` pour dire à zsh de ne pas partir en erreur s'il ne trouve pas de match…

Dans le `.zshrc` :

```
unsetopt nomatch
```
