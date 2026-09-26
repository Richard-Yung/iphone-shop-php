# iShop — Boutique d'iPhones (PHP 8 + SQLite)

Site e-commerce de vente d'iPhones — **de l'iPhone 17 Pro Max jusqu'aux SE et modèles plus anciens**.
Stack volontairement simple, fluide et rapide : **PHP 8 natif, sans framework, SQLite embarqué, migration MySQL prête**.

> Design mobile-first, intégré au pixel près (validation par comparaison de captures d'écran).

---

## ✨ Fonctionnalités

- **Page d'accueil** : mise en avant des populaires, séries d'iPhones, bouton **« Voir tout »** vers le catalogue complet
- **Catalogue complet** : tous les modèles actifs, triés par série puis prix
- **Catalogue de données riche** : 31 références — Série 17 (Pro Max / Pro / Air / 17), 16, 15, 14, 13, 12, 11, SE (3ᵉ & 2ᵉ gén), XS, XR, X, 8, 7, 6s
- **Attributs produit** : modèle, stockage, couleur, état (neuf / comme neuf / reconditionné), prix, prix barré (promo), stock
- **Base de données** : SQLite via PDO en dev, **un switch de constante pour passer sur MySQL** en production
- **Zéro dépendance** : aucun framework, aucun package Composer requis — chargement instantané

## 🧱 Stack

| Élément | Choix | Détail |
|---|---|---|
| Langage | PHP 8.4 | strict types, PHP 8.1+ requis |
| Base de données | SQLite (PDO) | `data/shop.sqlite` (créée + seedée automatiquement) |
| Migration MySQL | Prête | importer `database/schema.mysql.sql` puis `DB_DRIVER = 'mysql'` |
| Frontend | HTML/CSS/JS natifs | mobile-first, responsive toutes tailles |
| Serveur | `php -S` (dev) | Nginx/Apache en production |

## 🚀 Démarrage rapide

```bash
# 1. Cloner
git clone https://github.com/Richard-Yung/iphone-shop-php.git
cd iphone-shop-php

# 2. Lancer le serveur de développement
./server.sh            # → http://localhost:8080

# (la base SQLite est créée et remplie automatiquement au premier lancement)
# Pour re-seeder manuellement :
php database/seed.php
```

Alternative sans script :

```bash
php -S 0.0.0.0:8080 -t public
```

## 🔄 Migration vers MySQL

1. Créer la base `iphone_shop` et importer `database/schema.mysql.sql`
2. Renseigner `DB_MYSQL_*` dans `config/config.php`
3. Basculer `DB_DRIVER` de `'sqlite'` vers `'mysql'`

Le code applicatif (requêtes PDO) ne change **pas d'une ligne** : le projet
utilise un sous-ensemble SQL commun aux deux moteurs.

## 📁 Structure

```
iphone-shop/
├── public/                  # Racine web (seul dossier exposé)
│   ├── index.php            # Front controller
│   └── assets/              # css / js / img
├── app/
│   ├── Core/                # Database (PDO), Router, View
│   ├── Controllers/         # HomeController…
│   ├── Models/              # Product (featured, all, series, find)
│   └── Views/               # Templates PHP
├── config/config.php        # DB_DRIVER, constantes SQLite/MySQL, app
├── database/
│   ├── schema.sql           # Schéma SQLite
│   ├── schema.mysql.sql     # Schéma MySQL (migration)
│   └── seed.php             # 31 iPhones (17 → 6s)
├── data/                    # shop.sqlite (généré, non versionné)
├── docs/design/             # Maquettes de référence (design à respecter)
├── server.sh                # Serveur de dev (php -S)
└── composer.json            # Métadonnées + scripts (serve, seed)
```

## 🗃️ Schéma produits

| Colonne | Type | Description |
|---|---|---|
| `slug` | TEXT UNIQUE | identifiant URL (ex. `iphone-17-pro-256`) |
| `model` | TEXT | ex. *iPhone 17 Pro* |
| `series` | TEXT | ex. *Série 17*, *SE*, *Ancêtres* |
| `storage` | TEXT | ex. *256 Go* |
| `color` | TEXT | ex. *Titanium Naturel* |
| `condition_` | TEXT | `neuf` / `comme-neuf` / `reconditionne` |
| `price` / `old_price` | REAL | prix actuel / prix barré promo |
| `stock` | INTEGER | quantité disponible |
| `is_featured` | INTEGER | mise en avant page d'accueil |

## 🧭 Roadmap

- [x] Fondation PHP 8 + SQLite (routeur, PDO, vues)
- [x] Base seedée 17 → 6s
- [ ] Écran accueil — intégration pixel-perfect (design en cours de réception)
- [ ] Page catalogue complète
- [ ] Fiche produit
- [ ] Panier + commande
- [ ] Administration (CRUD produits)

## 📄 Licence

MIT — voir [LICENSE](LICENSE).
