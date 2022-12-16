# poc-console-application-symfony

Un projet d'application CLI basé sur le composant Console de Symfony.

## Lancer l'application CLI

~~~bash
//Rendre le script executable
chmod +x app
./app
~~~

## Cycle de vie d'une commande

- `__constructor()`: initialise la définition, le nom de la commande, son alias et appelle configure().
- `configure()`: appelée dans le constructeur.
- `initialize()`: optionnelle. Initialise la commande, après que l'input ait été parsé mais avant qu'il ne soit validé.
- `interact()`: optionnelle. Demander à l'utilisateur pour des arguments manquants avant l'execution de la commande.
- `execute()`: execute le code métier de la commande. Retourne un entier (code status).  

## Arguments et options d'une commande

### Arguments

Les arguments sont ordonnés et non nommés. Ce sont des chaînes de caractères séparées par des espaces. Ils peuvent être optionnels ou requis.

~~~bash
./app say-hi Foo Bar
~~~

### Options

Les options, contrairement aux arguments, ne sont pas ordonnées. On peut les écrire à n'importe quelle position et ils sont précédés de 2 dashes. Par exemple `--foo` ou  `--bar=baz`. Souvent une option vient avec un nom raccourci (qui s'écrit avec un dash). Les options sont **toujours optionnelles** 

~~~bash
./app say-hi Foo Bar Baz --polite
~~~


## Ressources

- [The Console Component](https://symfony.com/doc/current/components/console.html)
- [Console Commands](https://symfony.com/doc/current/console.html)
- [Commands Lifecycle](https://symfony.com/doc/current/console.html#command-lifecycle)
- [Console Input (Arguments & Options)](https://symfony.com/doc/current/console/input.html)