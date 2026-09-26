<?php
/**
 * Configuration application — Boutique iPhone
 *
 * Bascule SQLite (dev) / MySQL (production) via DB_DRIVER.
 * La couche PDO (app/Core/Database.php) génère un SQL compatible
 * avec les deux moteurs : aucune migration de code nécessaire,
 * il suffit d'importer database/schema.mysql.sql et de changer
 * les constantes ci-dessous.
 */

declare(strict_types=1);

// ── Base de données ────────────────────────────────────────────
const DB_DRIVER   = 'sqlite';            // 'sqlite' | 'mysql'
const DB_SQLITE   = __DIR__ . '/../data/shop.sqlite';

const DB_MYSQL_HOST    = '127.0.0.1';
const DB_MYSQL_PORT    = 3306;
const DB_MYSQL_NAME    = 'iphone_shop';
const DB_MYSQL_USER    = 'root';
const DB_MYSQL_PASS    = '';
const DB_MYSQL_CHARSET = 'utf8mb4';

// ── Application ────────────────────────────────────────────────
const APP_NAME     = 'iPhone Togo';
const APP_BASE_URL = '';
const APP_ENV      = 'dev';              // 'dev' | 'prod'
const APP_DEBUG    = true;

// ── Chemins ────────────────────────────────────────────────────
define('APP_ROOT', dirname(__DIR__));
define('APP_VIEW', APP_ROOT . '/app/Views');
