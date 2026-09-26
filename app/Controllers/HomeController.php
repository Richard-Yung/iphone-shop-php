<?php
/**
 * Contrôleur page d'accueil.
 * Supporte le filtrage par chips (?f=) et le rendu partiel (?partial=1)
 * pour le swap fluide de la grille en JavaScript.
 */

declare(strict_types=1);

final class HomeController
{
    public function index(): void
    {
        $filter    = isset($_GET['f']) ? (string) $_GET['f'] : null;
        $grid      = Product::forChipFilter($filter);
        $spotlight = Product::spotlight();

        // Rendu partiel : uniquement la grille (fetch JS)
        if (isset($_GET['partial'])) {
            header('Content-Type: text/html; charset=utf-8');
            require APP_VIEW . '/partials/home-grid.php';
            return;
        }

        View::render('home', [
            'grid'          => $grid,
            'spotlight'     => $spotlight,
            'activeFilter'  => $filter,
        ]);
    }
}
