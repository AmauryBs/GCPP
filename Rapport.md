# Rapport du projet
## Choix de conception du site web
L'ensemble de l'équipe est partie "from scratch" pour réaliser le site web (c'est-à-dire sans framework). Les langages utilisées sont l'HTML, le CSS, le PHP et le SQL. Nous nous appuyons sur PostgreSQL pour la base de données, ainsi que !(https://www.draw.io) pour le schéma UML.
Nous nous sommes inspirés du format Model-View-Controller pour réaliser notre structure de fichier. Le principe de modèle est conservé, même choses pour les vues, mais les contrôleurs sont directement réalisé dans le routeur "index.php".
## L'organisation de l'équipe
`Amaury Behorry-Sassus` et `Clément Gobé` se sont occupés de la partie front-end du site. Une personne écrit le code et cherche les fonctions, pendant que l'autre surveille le code écrit et fixe le style de l'ensemble. À chaque partie faite, ils alternent chacun leur place.
`Anthony Marsura` et `Bryan Fauquembergue` ont réalisé la partie back-end du projet. `Anthony` s'est prinicpalement occupé des fonctionnalités et traitements du site (en PHP), pendant que `Bryan` a structuré la base de données et a fait ce qui est administratif (rapport) et présentation.
## Modélisation des données
![Schéma UML de la base de données](https://raw.githubusercontent.com/AmauryBs/GCPP/master/BDD_Diagram.png)
## Les problèmes rencontrés
`Impossible d'utiliser le serveur MySQL de Polytech`
--> Utilisation de PostgreSQL sur nos propres ordinateurs

`PHP en version 5 et extension PDO indisponible`
--> Utilisation de PHP 7 et PDO sur nos propres ordinateurs

`Cours en HTML 4`
--> Formation des personnes sur les éléments essentiels de HTML5 (notamment les balises structurantes)

`PDO - Valeurs : nom du champ d'un string entre simple quotes, nom d'un champ en integer mis directement`
--> Fait en requête directe pour le moment (sans passer par un prepare, ce n'est vraiment pas top), résolution possible en passant par un bindValue, manque de temps pour se pencher dessus (car fonction génrique ici)...