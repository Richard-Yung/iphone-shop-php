<?php
/**
 * Contrôleur catalogue — liste complète (accessible via « Voir tout »).
 */

declare(strict_types=1);

final class CatalogueController
{
    public function index(): void
    {
        $products = Product::all();
        $series   = Product::series();

        View::render('catalogue', [
            'products' => $products,
            'series'   => $series,
        ]);
    }
}
