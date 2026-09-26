<?php
/**
 * Seed du catalogue — iPhone 17 → SE et plus anciens.
 * Prix indicatifs en FCFA (marché togolais).
 * Usage : php database/seed.php   (idempotent, vide puis réinsère)
 */

declare(strict_types=1);

require __DIR__ . '/../config/config.php';
require APP_ROOT . '/app/Core/Database.php';

$products = [
    // slug, modèle, série, stockage, couleur, état, prix, ancien prix, stock, vedette, description
    // ── Série 17 (2025/2026) ─────────────────────────────────────────────
    ['iphone-17-pro-max-256',   'iPhone 17 Pro Max', 'Série 17', '256 Go', 'Titanium Naturel',   'neuf', 950000, null, 12, 0, 'Le sommet de la gamme : écran et autonomie maximaux.'],
    ['iphone-17-pro-max-512',   'iPhone 17 Pro Max', 'Série 17', '512 Go', 'Titanium Bleu',      'neuf', 1150000, null, 6, 0, 'Espace de stockage XXL pour les pros de la photo.'],
    ['iphone-17-pro-256',       'iPhone 17 Pro',     'Série 17', '256 Go', 'Titanium Ardoise',   'neuf', 820000, null, 15, 0, 'La puissance Pro dans un format maîtrisé.'],
    ['iphone-17-air-256',       'iPhone 17 Air',     'Série 17', '256 Go', 'Sky Blue',           'neuf', 730000, null, 9, 0, 'Ultra fin, ultra léger, sans compromis.'],
    ['iphone-17-256',           'iPhone 17',         'Série 17', '256 Go', 'Lavande',            'neuf', 610000, null, 20, 0, 'Le nouveau standard, rapide et élégant.'],
    ['iphone-17-512-comme-neuf','iPhone 17',         'Série 17', '512 Go', 'Noir',               'comme-neuf', 660000, 720000, 4, 0, 'Comme neuf, garantit, à prix réduit.'],

    // ── Série 16 ─────────────────────────────────────────────────────────
    ['iphone-16-pro-max-256',   'iPhone 16 Pro Max', 'Série 16', '256 Go', 'Titanium Désert',    'neuf', 850000, 920000, 8, 1, 'Le meilleur de la puissance et de la photo.'],
    ['iphone-16-pro-128',       'iPhone 16 Pro',     'Série 16', '128 Go', 'Noir Titanium',      'neuf', 700000, 780000, 11, 1, 'Compact et puissant.'],
    ['iphone-16-128',           'iPhone 16',         'Série 16', '128 Go', 'Rose',               'neuf', 500000, 550000, 18, 1, 'Équilibre parfait entre performance et élégance.'],
    ['iphone-16-plus-128',      'iPhone 16 Plus',    'Série 16', '128 Go', 'Ultramarine',        'neuf', 560000, 620000, 10, 1, 'Plus grand, plus d’options.'],
    ['iphone-16e-128',          'iPhone 16e',        'Série 16', '128 Go', 'Blanc',              'neuf', 400000, 450000, 10, 0, 'L’essentiel Apple au meilleur prix.'],

    // ── Série 15 ─────────────────────────────────────────────────────────
    ['iphone-15-pro-max-256',   'iPhone 15 Pro Max', 'Série 15', '256 Go', 'Titanium Naturel',   'comme-neuf', 590000, 680000, 7, 0, 'Le flagship titanium, toujours redoutable.'],
    ['iphone-15-pro-128',       'iPhone 15 Pro',     'Série 15', '128 Go', 'Bleu Titanium',      'comme-neuf', 520000, 580000, 9, 0, 'Pro Motion et USB-C, un vrai plus au quotidien.'],
    ['iphone-15-128',           'iPhone 15',         'Série 15', '128 Go', 'Rose',               'neuf', 450000, 500000, 14, 0, 'Dynamic Island et double caméra 48 Mpx.'],

    // ── Série 14 ─────────────────────────────────────────────────────────
    ['iphone-14-pro-128',       'iPhone 14 Pro',     'Série 14', '128 Go', 'Violet profond',     'reconditionne', 390000, 440000, 6, 0, 'Dynamic Island et mode cinématique.'],
    ['iphone-14-128',           'iPhone 14',         'Série 14', '128 Go', 'Minuit',             'comme-neuf', 300000, 340000, 12, 0, 'Fiable, rapide, parfait pour durer.'],
    ['iphone-14-plus-128',      'iPhone 14 Plus',    'Série 14', '128 Go', 'Bleu',               'reconditionne', 330000, null, 5, 0, 'Grand écran et grande autonomie.'],

    // ── Série 13 ─────────────────────────────────────────────────────────
    ['iphone-13-128',           'iPhone 13',         'Série 13', '128 Go', 'Minuit',             'reconditionne', 240000, 270000, 16, 0, 'Le meilleur rapport qualité-prix reconditionné.'],
    ['iphone-13-mini-128',      'iPhone 13 mini',    'Série 13', '128 Go', 'Rose',               'reconditionne', 225000, null, 8, 0, 'Compact et puissant, pour les petites mains.'],

    // ── Série 12 ─────────────────────────────────────────────────────────
    ['iphone-12-64',            'iPhone 12',         'Série 12',  '64 Go', 'Noir',               'reconditionne', 170000, 195000, 10, 0, '5G et design bord plat, un classique.'],
    ['iphone-12-pro-128',       'iPhone 12 Pro',     'Série 12', '128 Go', 'Bleu Pacifique',     'reconditionne', 220000, null, 4, 0, 'Triple caméra LiDAR en format compact.'],

    // ── Série 11 ─────────────────────────────────────────────────────────
    ['iphone-11-64',            'iPhone 11',         'Série 11',  '64 Go', 'Noir',               'reconditionne', 130000, 155000, 13, 0, 'Le premier choix budget, très endurant.'],
    ['iphone-11-128',           'iPhone 11',         'Série 11', '128 Go', 'Rouge (PRODUCT)',    'reconditionne', 145000, null, 9, 0, 'Double caméra et Liquid Retina.'],

    // ── SE ───────────────────────────────────────────────────────────────
    ['iphone-se-2022-64',       'iPhone SE (3e gén)', 'SE',       '64 Go', 'Minuit',             'reconditionne', 110000, 135000, 15, 0, 'La puce A15 dans un format compact et abordable.'],
    ['iphone-se-2022-128',      'iPhone SE (3e gén)', 'SE',      '128 Go', 'Blanc étoile',       'reconditionne', 130000, null, 7, 0, 'Petit prix, grosses performances.'],
    ['iphone-se-2020-64',       'iPhone SE (2e gén)', 'SE',       '64 Go', 'Noir',               'reconditionne', 75000, 95000, 11, 0, 'Le d’entrée de gamme iOS, bouton Touch ID.'],

    // ── Plus anciens ─────────────────────────────────────────────────────
    ['iphone-xs-64',            'iPhone XS',         'Ancêtres',  '64 Go', 'Gris sidéral',       'reconditionne', 60000, 80000, 6, 0, 'OLED et étanchéité, à petit prix.'],
    ['iphone-xr-64',            'iPhone XR',         'Ancêtres',  '64 Go', 'Corail',             'reconditionne', 68000, 88000, 8, 0, 'Couleurs vives et autonomie record.'],
    ['iphone-x-64',             'iPhone X',          'Ancêtres',  '64 Go', 'Argent',             'reconditionne', 55000, 68000, 5, 0, 'Le pionnier Face ID, toujours fonctionnel.'],
    ['iphone-8-64',             'iPhone 8',          'Ancêtres',  '64 Go', 'Or',                 'reconditionne', 40000, 55000, 7, 0, 'Touch ID et format compact.'],
    ['iphone-7-32',             'iPhone 7',          'Ancêtres',  '32 Go', 'Noir de jais',       'reconditionne', 27000, 40000, 4, 0, 'Le premier iPhone étanche.'],
    ['iphone-6s-32',            'iPhone 6s',         'Ancêtres',  '32 Go', 'Gris sidéral',       'reconditionne', 20000, 35000, 3, 0, 'Le choix ultra-budget de secours.'],
];

$pdo = Database::pdo();

$pdo->beginTransaction();
$pdo->exec('DELETE FROM products');

$stmt = $pdo->prepare(
    'INSERT INTO products
        (slug, model, series, storage, color, condition_, price, old_price, stock, is_featured, image, description)
     VALUES
        (:slug, :model, :series, :storage, :color, :condition_, :price, :old_price, :stock, :is_featured, :image, :description)'
);

foreach ($products as [$slug, $model, $series, $storage, $color, $condition, $price, $old, $stock, $featured, $desc]) {
    $img = null;
    if ($slug === 'iphone-16-pro-max-256') $img = 'assets/img/products/16-pro-max.png';
    if ($slug === 'iphone-16-pro-128')     $img = 'assets/img/products/16-pro.png';
    if ($slug === 'iphone-16-128')         $img = 'assets/img/products/16.png';
    if ($slug === 'iphone-16-plus-128')    $img = 'assets/img/products/16-plus.png';

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
        ':image'       => $img,
        ':description' => $desc,
    ]);
}

$pdo->commit();

$count = (int) $pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();
echo "Seed OK — {$count} produits en base (" . DB_DRIVER . ").\n";
