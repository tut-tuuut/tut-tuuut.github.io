---
layout: til
title: Créer des index uniques sur plusieurs colonnes nullables
tags: django pgsql
---

Par défaut, PostgreSQL suppose que deux valeurs NULL sont distinctes. Ça pose problème quand on veut des contraintes d'unicité sur plusieurs colonnes dont certaines sont nullables.

Donc par exemple, si j'ai une contrainte d'unicité sur les colonnes a, b, c, d, ceci fonctionne :

```sql
insert into machin values ("a","b","c", null), ("a","b","c", null);
```

Mais moi c'est pas ça que je veux et ça fait au moins deux fois que je veux pas ça.

On peut lui dire que deux valeurs `NULL` sont identiques avec la clause `NULLS NOT DISTINCT` **à partir de PostgreSQL 15.**

On peut dire à Django de dire à PG que les `NULL` sont identiques avec le kwarg `nulls_distinct=False` dans la création de contrainte unique :

```python
    class Meta:
        constraints = (
            models.UniqueConstraint(
                name="unicity_by_perimeter_and_type",
                fields=(
                    "perimetre_region", # nullable
                    "perimetre_departement", # nullable
                    "perimetre_arrondissement", # nullable
                    "annee",
                    "type",
                ),
                nulls_distinct=False, # !!!! OHHHHH SO CLEVEER
            ),
        )
```

[Source Stackoverflow](https://stackoverflow.com/questions/8289100/create-unique-constraint-with-null-columns)

[La doc Django sur `UniqueConstraint` qui mentionne bien le kwarg `nulls_distinct`](https://docs.djangoproject.com/en/5.1/ref/models/constraints/#uniqueconstraint)