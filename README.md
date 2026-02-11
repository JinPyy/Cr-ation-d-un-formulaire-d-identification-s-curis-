# 🛡️ Formulaire d'identification sécurisé - Laravel

Ce projet est une application web d'authentification réalisée avec le framework **Laravel 11**. Il permet de se connecter à un espace membre et de créer de nouveaux comptes via un système sécurisé.

> ** Quick Start (Installation rapide)**
> Si vous avez PHP et Composer installés, copiez-collez cette ligne dans votre terminal pour tout configurer d'un coup :  
> `composer install && cp .env.example .env && php artisan key:generate && touch database/database.sqlite && php artisan migrate`

---

##  Fonctionnalités (Conforme aux Détails du Projet)
- **Interface de Connexion** :
  - Logo personnalisé (situé dans `public/logo.png`).
  - Champs Identifiant et Mot de passe.
  - Bouton `Reset` : Vide les champs du formulaire.
  - Bouton `Valider` : Connecte l'utilisateur avec message de succès ou d'erreur.
  - Bouton `Ajout compte` : Permet d'accéder à la création de compte.
- **Système de Création de Compte** :
  - Enregistrement d'un nouvel identifiant et mot de passe.
  - **Sécurité** : Validation obligatoire par une "Clé sécurisée".

##  Réalisation Technique
- **Backend** : PHP 8.2+ / Laravel 11.
- **Base de données** : SQLite (Fichier `database.sqlite`).
- **Sécurité appliquée** :
  - Protection contre les failles **CSRF** via la directive `@csrf`.
  - Hachage des mots de passe avec l'algorithme **BCrypt** via `Hash::make`.
  - Prévention des **injections SQL** grâce à l'utilisation de l'ORM/Query Builder de Laravel.

## Installation & Utilisation

### 1. Installation des dépendances
Utilisez la commande suivante pour installer les composants nécessaires :
`composer install`

### 2. Configuration initiale
**Étape A : Créer le fichier de configuration**
`cp .env.example .env`

**Étape B : Générer la clé de sécurité de l'application**
`php artisan key:generate`

**Étape C : Préparer la base de données SQLite**
`touch database/database.sqlite && php artisan migrate`

### 3. Lancer le projet
`php artisan serve`

L'application sera alors disponible sur : http://127.0.0.1:8000

---

## Informations de test

**Clé sécurisée pour l'ajout de compte** : `12345`  

**Procédure pour tester** : 
1. Cliquez sur le bouton **"Ajout compte"**.
2. Remplissez les champs (Identifiant, Mot de passe) en utilisant la clé de sécurité `12345`.
3. Une fois redirigé, utilisez ces mêmes identifiants pour vous connecter sur la page d'accueil.

