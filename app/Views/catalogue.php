<?php
// Vue catalogue TEMPORAIRE — sera restylée selon le design dédié (à venir).
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catalogue — <?= e(APP_NAME) ?></title>
</head>
<body>
<p><a href="/">← Retour accueil</a></p>
<h1>Catalogue complet</h1>
<p><?= count($products) ?> modèles disponibles — de l'iPhone 17 aux plus anciens.</p>
<ul>
<?php foreach ($products as $p): ?>
  <li>
    <strong><?= e($p['model']) ?></strong>
    — <?= e($p['storage']) ?> · <?= e($p['color']) ?> · <?= e($p['condition_']) ?>
    — <?= price((float)$p['price']) ?>
    <?= $p['old_price'] !== null ? ' <s>' . price((float)$p['old_price']) . '</s>' : '' ?>
  </li>
<?php endforeach; ?>
</ul>
</body>
</html>
