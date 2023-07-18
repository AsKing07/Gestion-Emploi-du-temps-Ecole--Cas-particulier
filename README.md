# Gestion d'Emploi - Projet

Ce dépôt GitHub contient le code source du projet "Gestion d'Emploi". Ce projet vise à fournir une plateforme de gestion des emplois du temps et des masses horaires pour une école.
Il s'agit d'une première version basic dont les mises à jour viendront plus tard.

## Structure du projet

Le projet est organisé de la manière suivante :

```
gestionEmploi
├── assets
│   └── logo.png
|   └── base de données
├── css
│   ├── connexion_admin.css
│   ├── page_gestion_styles.css
│   └── styles.css
├── Data_base_request_php
│   ├── add_admin.php
│   ├── ajouter_cours_massehoraire.php
│   ├── deconnexion.php
│   ├── fetch_cours_classe.php
│   ├── fetch_masse_horaire.php
│   ├── getEmplois.php
│   ├── get_cours_actuel.php
│   ├── modifier_masse_horaire.php
│   ├── update_emploi.php
│   └── verification_connexion_admin.php
├── index.php
├── Pages
│   ├── connexion_admin.php
│   └── page_gestion.php
└── script
    ├── script_add_admin_fonction.js
    ├── script_connect_redirection.js
    ├── script_gestion_emplois.js
    └── script_gestion_massehoraire.js
```

## Description du projet

Le projet "Gestion d'Emploi" est une application Web qui offre les fonctionnalités suivantes :

1. Gestion des emplois du temps : permet aux administrateurs d'ajouter, modifier et supprimer les emplois du temps pour chaque classe de l'école.

2. Gestion des masses horaires : permet aux administrateurs d'ajouter, modifier et supprimer les masses horaires pour chaque classe de l'école.

3. Gestion des administrateurs : permet d'ajouter de nouveaux administrateurs avec leurs informations de connexion.

## Comment utiliser le projet

1. Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :

```
git clone https://github.com/AsKing07/Gestion-Emploi-du-temps-Ecole--Cas-particulier.git
```

2. Assurez-vous d'avoir un serveur Web local (par exemple, Apache) avec PHP et MySQL installés.

3. Importez la base de données "GestionEmplois.sql" fournie dans le projet dans votre gestionnaire de base de données (par exemple, phpMyAdmin).

4. Modifiez les informations de connexion à la base de données dans les fichiers PHP situés dans le dossier "Data_base_request_php" pour correspondre à vos paramètres de configuration.

5. Lancez votre serveur Web local et accédez au projet via votre navigateur Web en utilisant l'URL appropriée (par exemple, `http://localhost/Gestion-Emploi-du-temps-Ecole--Cas-particulier`).

## Contribuer

Si vous souhaitez contribuer à ce projet, vous pouvez effectuer une demande de fusion (pull request) en proposant vos modifications. Nous serons heureux d'examiner vos contributions.

## Auteurs

- Charbel SONON(https://github.com/AsKing07) - Développeur principal

## Licence

Ce projet est sous licence [MIT](LICENSE), ce qui signifie que vous pouvez l'utiliser, le modifier et le distribuer librement. Cependant, veuillez noter que certaines parties du projet peuvent être soumises à d'autres licences.

Nous vous remercions de votre intérêt pour notre projet "Gestion d'Emploi" et nous espérons que cela vous sera utile. Si vous avez des questions ou des problèmes, n'hésitez pas à les soulever dans la section des problèmes (issues) du dépôt. Bon développement !
