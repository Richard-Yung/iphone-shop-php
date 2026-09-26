<?php
// Vue temporaire — en attente du design validé.
// Sera remplacée par l'intégration pixel-perfect de l'écran accueil.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e(APP_NAME) ?> — iPhones de l'iPhone 17 aux anciens modèles</title>
</head>
<body>
<h1><?= e(APP_NAME) ?></h1>
<p>Boutique en cours d'intégration — écran accueil à venir dès réception du design.</p>
<ul>
<?php foreach ($featured as $p): ?>
  <li><?= e($p['model']) ?> — <?= e($p['storage']) ?> — <?= price((float)$p['price']) ?></li>
<?php endforeach; ?>
</ul>
<p><a href="/catalogue">Voir tout le catalogue</a></p>
</body>
</html>
