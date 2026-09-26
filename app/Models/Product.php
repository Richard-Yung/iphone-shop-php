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
}
