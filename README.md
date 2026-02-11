# Formulaire d'identification sécurisé - Laravel

Ce projet est une application web d'authentification réalisée avec le framework **Laravel 11**. Il permet de se connecter à un espace membre et de créer de nouveaux comptes via un système sécurisé.

##  Fonctionnalités (Conforme aux Détails du Projet)
- **Interface de Connexion** :
  - Logo personnalisé.
  - Champs Identifiant et Mot de passe.
  - Bouton `Reset` : Vide les champs du formulaire.
  - Bouton `Valider` : Connecte l'utilisateur avec message de succès ou d'erreur.
  - Bouton `Ajout compte` : Permet d'accéder à la création de compte.
- **Système de Création de Compte** :
  - Enregistrement d'un nouvel identifiant et mot de passe.
  - **Sécurité** : Validation obligatoire par une "Clé sécurisée".

##  Réalisation Technique
- **Backend** : PHP 8.2+ / Laravel 11.
- **Base de données** : SQLite (Stockage des comptes).
- **Sécurité appliquée** :
  - Protection contre les failles **CSRF** (@csrf).
  - Hachage des mots de passe avec **BCrypt** via `Hash::make`.
  - Prévention des **injections SQL**.

##  Installation & Utilisation
###
### 1. Installation des dépendances
composer install

### 2. Configuration initiale
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate

### 3. Lancer le projet 
php artisan serve
L'application est disponible sur : http://127.0.0.1:8000

### 4. Information
Clé sécurisée pour l'ajout de compte : 12345

Procédure : Cliquez sur "Ajout compte", remplissez les champs avec la clé 12345. Vous pourrez ensuite utiliser ces identifiants pour vous connecter sur la page d'accueil.

Par défaut il existe un compte : 
identifiant : admin
mot-de-passe : 123

