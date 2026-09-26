<?php
/**
 * Seed du catalogue — iPhone 17 → SE et plus anciens.
 * Usage : php database/seed.php   (idempotent, vide puis réinsère)
 */

declare(strict_types=1);

require __DIR__ . '/../config/config.php';
require APP_ROOT . '/app/Core/Database.php';

$products = [
    // ── Série 17 (2025/2026) ─────────────────────────────────────────────
    ['iphone-17-pro-max-256',   'iPhone 17 Pro Max', 'Série 17', '256 Go', 'Titanium Naturel',   'neuf', 1479.00, null,   12, 1],
    ['iphone-17-pro-max-512',   'iPhone 17 Pro Max', 'Série 17', '512 Go', 'Titanium Bleu',      'neuf', 1729.00, null,    6, 1],
    ['iphone-17-pro-256',       'iPhone 17 Pro',     'Série 17', '256 Go', 'Titanium Ardoise',   'neuf', 1229.00, null,   15, 1],
    ['iphone-17-air-256',       'iPhone 17 Air',     'Série 17', '256 Go', 'Sky Blue',           'neuf', 1099.00, null,    9, 1],
    ['iphone-17-256',           'iPhone 17',         'Série 17', '256 Go', 'Lavande',            'neuf',  899.00, null,   20, 1],
    ['iphone-17-512-comme-neuf','iPhone 17',         'Série 17', '512 Go', 'Noir',               'comme-neuf', 969.00, 1099.00, 4, 1],

    // ── Série 16 ─────────────────────────────────────────────────────────
    ['iphone-16-pro-max-256',   'iPhone 16 Pro Max', 'Série 16', '256 Go', 'Titanium Désert',    'neuf', 1229.00, 1379.00, 8, 1],
    ['iphone-16-pro-128',       'iPhone 16 Pro',     'Série 16', '128 Go', 'Noir Titanium',      'neuf',  999.00, 1129.00, 11, 1],
    ['iphone-16-128',           'iPhone 16',         'Série 16', '128 Go', 'Ultramarine',        'neuf',  709.00,  799.00, 18, 1],
    ['iphone-16e-128',          'iPhone 16e',        'Série 16', '128 Go', 'Blanc',              'neuf',  589.00,  649.00, 10, 0],

    // ── Série 15 ─────────────────────────────────────────────────────────
    ['iphone-15-pro-max-256',   'iPhone 15 Pro Max', 'Série 15', '256 Go', 'Titanium Naturel',   'comme-neuf', 859.00, 999.00, 7, 1],
    ['iphone-15-pro-128',       'iPhone 15 Pro',     'Série 15', '128 Go', 'Bleu Titanium',      'comme-neuf', 749.00, 829.00, 9, 0],
    ['iphone-15-128',           'iPhone 15',         'Série 15', '128 Go', 'Rose',               'neuf',  649.00,  729.00, 14, 1],

    // ── Série 14 ─────────────────────────────────────────────────────────
    ['iphone-14-pro-128',       'iPhone 14 Pro',     'Série 14', '128 Go', 'Violet profond',     'reconditionne', 569.00, 649.00, 6, 1],
    ['iphone-14-128',           'iPhone 14',         'Série 14', '128 Go', 'Minuit',             'comme-neuf', 439.00, 499.00, 12, 1],
    ['iphone-14-plus-128',      'iPhone 14 Plus',    'Série 14', '128 Go', 'Bleu',               'reconditionne', 479.00, null,   5, 0],

    // ── Série 13 ─────────────────────────────────────────────────────────
    ['iphone-13-128',           'iPhone 13',         'Série 13', '128 Go', 'Minuit',             'reconditionne', 349.00, 399.00, 16, 1],
    ['iphone-13-mini-128',      'iPhone 13 mini',    'Série 13', '128 Go', 'Rose',               'reconditionne', 329.00, null,    8, 0],

    // ── Série 12 ─────────────────────────────────────────────────────────
    ['iphone-12-64',            'iPhone 12',         'Série 12',  '64 Go', 'Noir',               'reconditionne', 249.00, 289.00, 10, 1],
    ['iphone-12-pro-128',       'iPhone 12 Pro',     'Série 12', '128 Go', 'Bleu Pacifique',     'reconditionne', 319.00, null,    4, 0],

    // ── Série 11 ─────────────────────────────────────────────────────────
    ['iphone-11-64',            'iPhone 11',         'Série 11',  '64 Go', 'Noir',               'reconditionne', 189.00, 229.00, 13, 1],
    ['iphone-11-128',           'iPhone 11',         'Série 11', '128 Go', 'Rouge (PRODUCT)',    'reconditionne', 209.00, null,    9, 0],

    // ── SE ───────────────────────────────────────────────────────────────
    ['iphone-se-2022-64',       'iPhone SE (3e gén)', 'SE',       '64 Go', 'Minuit',             'reconditionne', 159.00, 199.00, 15, 1],
    ['iphone-se-2022-128',      'iPhone SE (3e gén)', 'SE',      '128 Go', 'Blanc étoile',       'reconditionne', 189.00, null,    7, 0],
    ['iphone-se-2020-64',       'iPhone SE (2e gén)', 'SE',       '64 Go', 'Noir',               'reconditionne', 109.00, 139.00, 11, 1],

    // ── Plus anciens ─────────────────────────────────────────────────────
    ['iphone-xs-64',            'iPhone XS',         'Ancêtres',  '64 Go', 'Gris sidéral',       'reconditionne',  89.00, 119.00, 6, 1],
    ['iphone-xr-64',            'iPhone XR',         'Ancêtres',  '64 Go', 'Corail',             'reconditionne',  99.00, 129.00, 8, 1],
    ['iphone-x-64',             'iPhone X',          'Ancêtres',  '64 Go', 'Argent',             'reconditionne',  79.00,  99.00, 5, 0],
    ['iphone-8-64',             'iPhone 8',          'Ancêtres',  '64 Go', 'Or',                 'reconditionne',  59.00,  79.00, 7, 1],
    ['iphone-7-32',             'iPhone 7',          'Ancêtres',  '32 Go', 'Noir de jais',       'reconditionne',  39.00,  59.00, 4, 0],
    ['iphone-6s-32',            'iPhone 6s',         'Ancêtres',  '32 Go', 'Gris sidéral',       'reconditionne',  29.00,  49.00, 3, 0],
];

$pdo = Database::pdo();

$pdo->beginTransaction();
$pdo->exec('DELETE FROM products');

$stmt = $pdo->prepare(
    'INSERT INTO products
        (slug, model, series, storage, color, condition_, price, old_price, stock, is_featured, is_active, image, description)
     VALUES
        (:slug, :model, :series, :storage, :color, :condition_, :price, :old_price, :stock, :is_featured, 1, :image, :description)'
);

foreach ($products as [$slug, $model, $series, $storage, $color, $condition, $price, $old, $stock, $featured]) {
    $stmt->execute([
        ':slug'        => $slug,
        ':model'       => $model,
        ':series'      => $series,
        ':storage'     => $storage,
        ':color'       => $color,
        ':condition_'  => $condition,
        ':price'       => $price,
        ':old_price'   => $old,
        ':stock'       => $stock,
        ':is_featured' => $featured,
        ':image'       => null,
        ':description' => null,
    ]);
}

$pdo->commit();

$count = (int) $pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();
echo "Seed OK — {$count} produits en base (" . DB_DRIVER . ").\n";
