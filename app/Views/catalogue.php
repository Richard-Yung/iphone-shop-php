<?php
/** Vue catalogue — habillée avec le design system de l'accueil (en attendant une maquette dédiée). */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Catalogue complet : tous les modèles d'iPhone disponibles au Togo, de l'iPhone 17 aux générations précédentes.">
<title>Catalogue — <?= e(APP_NAME) ?></title>
<link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="header">
  <div class="container header__row">
    <a class="header__logo" href="/" aria-label="iPhone Togo — retour à l'accueil">
      <svg class="ic" aria-hidden="true" width="15" height="15" viewBox="0 0 24 24" style="fill:currentColor;stroke:none;"><path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.03 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.56-1.702"/></svg>
      <span>IPHONE TOGO</span>
    </a>
    <a class="btn btn--primary" style="height:30px;font-size:11px;padding:0 14px;margin-left:auto;" href="/">← Retour à l'accueil</a>
  </div>
</header>

<main class="container" style="padding-block:16px;">
  <h1 class="section__title" style="font-size:20px;">Catalogue complet</h1>
  <p class="section__sub" style="margin-top:-4px;"><?= count($products) ?> modèles disponibles — de l'iPhone 17 aux plus anciens.</p>

  <div class="grid" style="grid-template-columns:1fr;">
  <?php foreach ($products as $p): ?>
    <article class="card" style="align-items:center;">
      <div class="card__body" style="padding:2px 4px;">
        <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap;">
          <h3 class="card__name" style="font-size:13.5px;"><?= e($p['model']) ?></h3>
          <?php if ((int) $p['stock'] > 0): ?>
            <span class="card__badge" style="margin-bottom:0;">Disponible</span>
          <?php else: ?>
            <span class="card__badge" style="margin-bottom:0;background:#8B98AB;">Épuisé</span>
          <?php endif; ?>
        </div>
        <p class="card__desc" style="margin-top:3px;font-size:10.5px;">
          <?= e($p['storage']) ?> · <?= e($p['color']) ?> · <?= e($p['condition_']) ?>
        </p>
        <div style="display:flex;align-items:center;gap:8px;margin-top:6px;">
          <strong style="font-size:13px;color:var(--navy-ink);"><?= price((float)$p['price']) ?></strong>
          <?php if ($p['old_price'] !== null): ?>
            <s style="font-size:10px;color:var(--slate-400);"><?= price((float)$p['old_price']) ?></s>
          <?php endif; ?>
          <a class="card__btn" style="margin-left:auto;" href="/produit/<?= e($p['slug']) ?>">
            Voir le produit
            <svg class="ic arr" aria-hidden="true" viewBox="0 0 24 24" style="width:11px;height:11px;"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
  </div>
</main>

</body>
</html>
