<?php
/**
 * Modèle Produit — accès catalogue.
 */

declare(strict_types=1);

final class Product
{
    /** Produits mis en avant pour l'accueil (section "Populaires"). */
    public static function featured(int $limit = 8): array
    {
        return Database::all(
            'SELECT * FROM products
              WHERE is_featured = 1 AND is_active = 1
              ORDER BY price DESC
              LIMIT ' . (int) $limit
        );
    }

    /** Grille accueil : les 4 modèles affichés, dans l'ordre exact du design. */
    public static function homeGrid(): array
    {
        $slugs = ['iphone-16-pro-max-256', 'iphone-16-pro-128', 'iphone-16-128', 'iphone-16-plus-128'];
        $rows = [];
        foreach ($slugs as $slug) {
            $row = self::find($slug);
            if ($row !== null) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    /** Produit vedette (bandeau navy). */
    public static function spotlight(): ?array
    {
        return self::find('iphone-16-pro-max-256');
    }

    /** Catalogue complet actif. */
    public static function all(): array
    {
        return Database::all(
            'SELECT * FROM products WHERE is_active = 1 ORDER BY series, price DESC'
        );
    }

    /** Séries distinctes (filtres / navigation). */
    public static function series(): array
    {
        return Database::all(
            'SELECT series, COUNT(*) AS nb, MIN(price) AS price_min
               FROM products
              WHERE is_active = 1
              GROUP BY series
              ORDER BY MIN(id)'
        );
    }

    /** Un produit par slug. */
    public static function find(string $slug): ?array
    {
        return Database::one(
            'SELECT * FROM products WHERE slug = :slug AND is_active = 1',
            [':slug' => $slug]
        );
    }

    /** Filtre des chips de l'accueil (sélections courtes). */
    public static function forChipFilter(?string $filter): array
    {
        switch ($filter) {
            case '16':
                return self::bySeries('Série 16');
            case '15':
                return self::bySeries('Série 15');
            case '14':
                return self::bySeries('Série 14');
            case 'SE':
                return self::bySeries('SE');
            case 'pro':
                return Database::all(
                    "SELECT * FROM products
                      WHERE is_active = 1 AND model LIKE '%Pro%'
                      ORDER BY price DESC LIMIT 4"
                );
            default: // « Tous » : la sélection mise en avant du design
                return self::homeGrid();
        }
    }

    /** Produits d'une série (4 max). */
    public static function bySeries(string $series): array
    {
        return Database::all(
            'SELECT * FROM products
              WHERE series = :series AND is_active = 1
              ORDER BY price DESC LIMIT 4',
            [':series' => $series]
        );
    }
}
