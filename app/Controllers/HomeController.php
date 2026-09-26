<?php
/**
 * Contrôleur page d'accueil.
 */

declare(strict_types=1);

final class HomeController
{
    public function index(): void
    {
        $featured = Product::featured(8);
        $series   = Product::series();

        View::render('home', [
            'featured' => $featured,
            'series'   => $series,
        ]);
    }
}
