# TifawinSouk – Web Application

## Contexte du projet

Dans le cadre de la digitalisation de son activité, **TifawinSouk**, une PME marocaine spécialisée dans le commerce local, souhaite disposer d’une **application web de back-office** permettant à l’administrateur de gérer son catalogue (catégories et produits) et d’une interface publique minimale pour que les clients puissent parcourir les catégories et consulter les produits.

## Objectif

Concevoir et développer une application web permettant :

- **Au personnel administratif** : gérer facilement les catégories et les produits (CRUD).  
- **Aux clients** : naviguer par catégorie, consulter la liste des produits et la fiche produit.

## Fonctionnalités clés

### Back-office (administration)

- Gestion des **catégories** : création, modification, suppression, affichage.  
  - Champs suggérés : `id`, `nom`, `slug`, `description`.  
- Gestion des **produits** : création, modification, suppression, affichage.  
  - Champs suggérés : `id`, `nom`, `référence`, `description courte`, `prix`, `stock`, `category_id`, `image`.  
- Authentification sécurisée pour l’accès au back-office (compte administrateur).  
- Validation côté serveur pour les saisies : champs obligatoires, format prix, stock ≥ 0.  
- Upload basique d’images produits (gestion via `storage`).  
- Notifications simples dans l’UI pour succès ou erreur.

### Interface publique

- Page liste des catégories.  
- Page liste des produits par catégorie (avec pagination simple).  
- Page détail produit.

## Technologies utilisées

- **Backend** : Laravel (version stable)  
- **Template engine** : Blade  
- **Base de données** : MySQL   
- **Authentification** : Laravel standard (Breeze / UI ou équivalent)  
- **Frontend léger** : HTML, tailwind , blade



## Installation

```bash
# Cloner le projet
git clone <repository-url>
cd tifawinsouk

# Installer les dépendances
composer install
npm install
npm run dev

# Configurer l'environnement
cp .env.example .env
php artisan key:generate
# Modifier .env pour la base de données

# Migrer la base de données
php artisan migrate --seed

# Lancer le serveur local
php artisan serve
