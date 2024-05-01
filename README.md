# GESTION PRODUITS

## Prérequis
Cette application est compatible `PHP5` et a été testée avec une base de données `MySQL 5.7`.

## Installation
- Copier les fichiers du dossier `www` dans un dossier accessible par le serveur Web.
- Assurez vous que le dossier `uploads` est accessible en lecture et écriture par le serveur Web : `chmod 777 uploads`
- Importez la base de données test à partir du dump SQL `database/gestion_produits.sql`.
- Connectez vous à l'application avec l'url adaptée avec les informations suivantes :
    - Login : `admin`
    - Mot de passe : `password`

## Fonctionnalités
L'application permet de :
- Lister les produits
- Afficher la fiche produit en lecture seule
- Ajouter des produits
- Modifier les produits
- Supprimer les produits
- Pour chaque produit, il est possible d'ajouter autant de photos que nécessaire


## Ma partie :

Pour créer les images et lancer les containers :

PHP :
    - Allez dans le répertoire www
    - Ouvez un CMD
    - Tapez la commande "docker build -t image_php -f Dockerfile ."
    - Tapez la commande docker run -d -p 8080:80 image_php

DB :
    - Allez dans le répertoire database
    - Ouvrez un cmd
    - Tapez la commande "docker build -t image_mysql -f Dockerfile ."
    - Tapez la commande "docker run -d -p 3306:3306 image_mysql"

Pour lancer les images avec docker-compose :
    - Allez à la racine du projet
    - Ouvrez un CMD
    - Tapez "docker-compose up"





## Ma partie :

Pour créer les images et lancer les containers :

PHP :
    - Allez dans le répertoire www
    - Ouvez un CMD
    - Tapez la commande "docker build --build-arg PHP_VERSION=8.3 -t image_php:8.3 ." ou "docker build --build-arg PHP_VERSION=5 -t image_php:5 ." en fonction de la version souhaitée
    - Tapez la commande "docker run -d -p 8080:80 image_php:8.3" ou "docker run -d -p 8080:80 image_php:5" en fonction de la version souhaitée

DB :
    - Allez dans le répertoire database
    - Ouvrez un cmd
    - Tapez la commande "docker build --build-arg MYSQL_VERSION=8.3 -t image_mysql:8.3 ." ou "docker build --build-arg MYSQL_VERSION=5.7 -t image_mysql:5.7 ." en fonction de la version souhaitée
    - Tapez la commande "docker run -d -p 3306:3306 image_mysql:8.3" ou docker run -d -p 3306:3306 image_mysql:5.7" en fonction de la version souhaitée

Pour lancer les images avec docker-compose :
    - Allez à la racine du projet
    - Ouvrez un CMD
    - Tapez "docker-compose up --build"

Par défaut, se lance avec les versions PHP 8.3e et MySQL 8.3. Ouvrir le fichier .env à la racine et modifier les valeurs pour changer de version si besoin

    
