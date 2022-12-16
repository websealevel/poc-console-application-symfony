# poc-console-application-symfony

Un projet d'application CLI basé sur le composant Console de Symfony.

## Lancer l'application CLI

~~~bash
//Rendre le script executable
chmod +x index.php
./index.php
~~~

## Cycle de vie d'une commande

- `__constructor()`: initialise la définition, le nom de la commande, son alias et appelle configure().
- `configure()`: appelée dans le constructeur.
- `initialize()`: optionnelle. Initialise la commande, après que l'input ait été parsé mais avant qu'il ne soit validé.
- `interact()`: optionnelle. Demander à l'utilisateur pour des arguments manquants avant l'execution de la commande.
- `execute()`: execute le code métier de la commande. Retourne un entier (code status).  

## Ressources

- [The Console Component](https://symfony.com/doc/current/components/console.html)
- [Console Commands](https://symfony.com/doc/current/console.html)
- [Commands Lifecycle](https://symfony.com/doc/current/console.html#command-lifecycle)