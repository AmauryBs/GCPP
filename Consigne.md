##Projet n°1 - Gestion des commandes pour projets pédagogiques

Il s'agit de concevoir et réaliser une application web qui permet de gérer des commandes d'équipements pour les besoins des étudiants. Le processus à l'école est le suivant :
* les étudiants remontent leurs besoins en termes de matériel/logiciel à l'enseignant responsable de l'enseignement concerné (CM, TD...)
* l'enseignant concerné complète la demande, la valide après échanges éventuels avec les étudiants puis transmet une demande de travaux au Service technique Polytech
* le Service technique demande un cahier des charges plus détaillé si nécessaire puis valide à son tour la demande de travaux
* dès lors, une information sur l'état d'exécution de la commande est fournie aux différentes parties prenantes (étudiants, enseignants, Service technique...). Nous souhaitons mettre en place un support informatique pour ce processus avec les fonctionnalités attendues suivantes :
* la saisie et la mise à jour d'une demande d'équipements (projet identifié, ligne budgétaire, produits concernés, quantités, fournisseurs...)
* l'accessibilité par différentes parties prenantes (Service technique, étudiants, enseignants...)
* la possibilité d'insérer différents types de documents (photos, devis, copie d'un panier depuis un site marchand externe...)
* visualisation de l'état d'avancement de la demande
* la possibilité d'envoyer des mels aux personnes concernées.


##Gestion des informations

Le site web doit amener à gérer des informations nécessitant la mise en place d'une base de données :
* La liste des participants au projet en prenant en compte les possibles évolutions au cours du temps
* La gestion de documents produits liés au projet (demandes, devis...)
* Une galerie photos (du matériel commandé par exemple)
* Des données ou mesures impliquées dans un processus en ligne sur lequel une interaction avec le visiteur peut être créée
* La trace des visites et commentaires laissés sur votre site
* Un sondage fermé de type QCM ou autres
* ...

##Environnement de travail

Vous disposez :
* d'une base de données MySQL propre au projet (serveur HS, choix d'utiliser PostgreSQL)
* d'un compte d'accès spécifique pour chaque équipe de travail (nous n'en servons pas, nous avons un GitHub)

##Consignes

L'ensemble de votre site devra être responsive design.

Le site pourra comporter :
* un menu constitué de plusieurs niveaux (au minimum 2 niveaux)
* un carrousel d'images
* une ou plusieurs vidéos
* des transitions ou animations CSS
* des échanges d'informations avec la base de données (photos, commentaires, ...)
* ...

Proposez un modèle entité-association de votre base de données.

Le site devra être réalisé en HTML5 et devra comporter des feuilles de styles CSS3. L'interface avec la base de données sera réalisée en PHP.

Attention aux droits à l'image ainsi qu'aux droits d'auteur sur les contenus que vous pourriez placer sur votre site (image, texte, ...). Pensez que votre site a vocation à être mis en ligne et il doit être exemplaire de ce point de vue.

##Évaluation

* Un rapport expliquant les choix de conception du site web, la modélisation des données, les problèmes rencontrés, l'organisation de l'équipe.
* L'ergonomie du site, sa capacité à répondre aux besoins du cahier des charges, sa robustesse.
* La qualité des sources.
