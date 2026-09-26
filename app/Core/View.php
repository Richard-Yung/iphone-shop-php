<?php
/**
 * Moteur de vues minimal — échappement automatique fourni via e().
 */

declare(strict_types=1);

final class View
{
    public static function render(string $template, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        require APP_VIEW . '/' . $template . '.php';
    }
}

/** Échappement HTML. */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Formate un prix en FCFA (marché togolais). */
function price(float $value): string
{
    return number_format($value, 0, ',', ' ') . ' FCFA';
}
