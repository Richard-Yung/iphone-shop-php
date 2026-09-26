<?php
/** Vue : page d'accueil — intégration maquette « iPhone Togo » validée.
 * Seule différence vs maquette : bouton « Voir tout le catalogue » (demande client).
 */
$wa = 'https://wa.me/22891852094';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Acheter un iPhone au Togo : tous les modèles, de l'iPhone 17 aux SE et anciens générations. Prix compétitifs, produits vérifiés, livraison partout au Togo.">
<title>Acheter un iPhone au Togo — Tous les modèles | <?= e(APP_NAME) ?></title>
<link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- ══ Sprite d'icônes SVG ══ -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <symbol id="i-apple" viewBox="0 0 24 24"><path fill="currentColor" stroke="none" d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.03 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.56-1.702"/></symbol>
    <symbol id="i-wa" viewBox="0 0 24 24"><path fill="currentColor" stroke="none" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></symbol>
    <symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></symbol>
    <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></symbol>
    <symbol id="i-truck" viewBox="0 0 24 24"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.62l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></symbol>
    <symbol id="i-shield" viewBox="0 0 24 24"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></symbol>
    <symbol id="i-headset" viewBox="0 0 24 24"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"/></symbol>
    <symbol id="i-badge" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8.5 12 2.5 2.5 4.5-5"/></symbol>
    <symbol id="i-bolt" viewBox="0 0 24 24"><path fill="currentColor" stroke="none" d="M13 2 4.5 13.5a.6.6 0 0 0 .48 1H11l-1.8 7.3a.4.4 0 0 0 .71.33L19.5 10.5a.6.6 0 0 0-.48-1H13l1.4-7a.4.4 0 0 0-.73-.32Z"/></symbol>
    <symbol id="i-camera" viewBox="0 0 24 24"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></symbol>
    <symbol id="i-phone" viewBox="0 0 24 24"><rect width="14" height="20" x="5" y="2" rx="2"/><path d="M12 18h.01"/></symbol>
    <symbol id="i-tag" viewBox="0 0 24 24"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></symbol>
    <symbol id="i-home" viewBox="0 0 24 24"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></symbol>
    <symbol id="i-fb" viewBox="0 0 24 24"><path fill="currentColor" stroke="none" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></symbol>
    <symbol id="i-ig" viewBox="0 0 24 24"><rect x="2.5" y="2.5" width="19" height="19" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="1.1" fill="currentColor" stroke="none"/></symbol>
    <symbol id="i-yt" viewBox="0 0 24 24"><path fill="currentColor" stroke="none" d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></symbol>
  </defs>
</svg>

<!-- ══ HEADER ══ -->
<header class="header" data-header>
  <div class="container header__row">
    <button class="header__burger" data-burger aria-label="Ouvrir le menu" aria-expanded="false">
      <svg class="ic" width="22" height="22" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <a class="header__logo" href="/" aria-label="iPhone Togo — accueil">
      <svg class="ic" aria-hidden="true"><use href="#i-apple"/></svg>
      <span>IPHONE TOGO</span>
    </a>
    <form class="header__search" action="/catalogue" method="get" role="search">
      <input type="search" name="q" placeholder="Rechercher un iPhone, un modèle..." aria-label="Rechercher un iPhone">
      <button type="submit" aria-label="Rechercher"><svg class="ic" aria-hidden="true"><use href="#i-search"/></svg></button>
    </form>
    <a class="header__wa" href="<?= $wa ?>" target="_blank" rel="noopener" aria-label="Nous contacter sur WhatsApp">
      <svg class="ic" aria-hidden="true"><use href="#i-wa"/></svg>
    </a>
  </div>
  <nav class="nav-drawer" data-drawer aria-label="Menu principal">
    <div class="container">
      <a href="/catalogue">iPhone</a>
      <a href="#conseils">Guides</a>
      <a href="#faq">FAQ</a>
      <a href="#livraison">Livraison</a>
      <a href="<?= $wa ?>" target="_blank" rel="noopener">Contact</a>
    </div>
  </nav>
</header>

<main>
  <!-- ══ HERO ══ -->
  <section class="hero">
    <p class="hero__tagline">Performance<br>Elegance<br>Innovation</p>
    <div class="container hero__inner">
      <div>
        <h1>Acheter un iPhone au&nbsp;Togo</h1>
        <p class="hero__sub">Tous les modèles, des prix compétitifs, livraison partout au Togo.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="#produits">
            Voir les iPhone
            <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
          </a>
          <a class="btn btn--wa" href="<?= $wa ?>" target="_blank" rel="noopener">
            <span class="wa-dot"><svg class="ic" aria-hidden="true"><use href="#i-wa"/></svg></span>
            Nous contacter<br>sur WhatsApp
          </a>
        </div>
      </div>
      <div class="hero__img">
        <img src="/assets/img/hero-iphones.png" alt="iPhone 16 Pro Max titanium doré et bleu nuit disponibles à la vente" fetchpriority="high" width="1152" height="864">
      </div>
    </div>
  </section>

  <!-- ══ BANDEAU DE CONFIANCE ══ -->
  <section class="trust" aria-label="Nos garanties">
    <div class="container trust__row">
      <div class="trust__item">
        <svg class="ic" aria-hidden="true"><use href="#i-truck"/></svg>
        <span>Livraison partout au Togo</span>
      </div>
      <div class="trust__item">
        <svg class="ic" aria-hidden="true"><use href="#i-shield"/></svg>
        <span>Paiement sécurisé</span>
      </div>
      <div class="trust__item">
        <svg class="ic" aria-hidden="true"><use href="#i-headset"/></svg>
        <span>Assistance client</span>
      </div>
      <div class="trust__item">
        <svg class="ic" aria-hidden="true"><use href="#i-badge"/></svg>
        <span>Produits sélectionnés avec soin</span>
      </div>
    </div>
  </section>

  <!-- ══ NOS IPHONE DISPONIBLES ══ -->
  <section class="section container" id="produits">
    <h2 class="section__title">Nos iPhone disponibles</h2>
    <div class="chips" data-chips role="tablist" aria-label="Filtrer par modèle">
      <a class="chip <?= $activeFilter === null ? 'active' : '' ?>" href="/">Tous</a>
      <a class="chip <?= $activeFilter === '16' ? 'active' : '' ?>" href="/?f=16">iPhone 16</a>
      <a class="chip <?= $activeFilter === '15' ? 'active' : '' ?>" href="/?f=15">iPhone 15</a>
      <a class="chip <?= $activeFilter === '14' ? 'active' : '' ?>" href="/?f=14">iPhone 14</a>
      <a class="chip <?= $activeFilter === 'SE' ? 'active' : '' ?>" href="/?f=SE">iPhone SE</a>
      <a class="chip <?= $activeFilter === 'pro' ? 'active' : '' ?>" href="/?f=pro">Pro &amp; Pro Max</a>
    </div>
    <div class="grid" data-grid>
      <?php require APP_VIEW . '/partials/home-grid.php'; ?>
    </div>
    <!-- Ajout validé par le client (différence unique vs maquette) -->
    <div class="view-all">
      <a class="btn btn--primary" href="/catalogue">
        Voir tout le catalogue
        <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
      </a>
    </div>
  </section>
  <!-- ══ PRODUIT VEDETTE ══ -->
  <?php if ($spotlight !== null): ?>
  <section class="section container" aria-label="Produit vedette">
    <div class="spot">
      <div class="spot__inner">
        <div class="spot__img">
          <img src="/assets/img/featured-16-pro-max.png" alt="iPhone 16 Pro Max titanium doré — le top du moment" loading="lazy" width="1024" height="1024">
        </div>
        <div class="spot__body">
          <p class="spot__eyebrow">Le top du moment</p>
          <h2>iPhone 16 Pro Max</h2>
          <p class="spot__sub">Une expérience exceptionnelle, à chaque instant.</p>
          <div class="spot__feats">
            <div class="spot__feat">
              <span class="box"><svg class="ic" aria-hidden="true"><use href="#i-bolt"/></svg></span>
              <span>Puissance Pro</span>
            </div>
            <div class="spot__feat">
              <span class="box"><svg class="ic" aria-hidden="true"><use href="#i-camera"/></svg></span>
              <span>Caméra avancée</span>
            </div>
            <div class="spot__feat">
              <span class="box"><svg class="ic" aria-hidden="true"><use href="#i-phone"/></svg></span>
              <span>Écran premium</span>
            </div>
          </div>
          <a class="spot__cta" href="/produit/<?= e($spotlight['slug']) ?>">
            Voir le produit
            <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ══ POURQUOI ACHETER CHEZ NOUS ? ══ -->
  <section class="section container" aria-label="Nos avantages">
    <h2 class="section__title">Pourquoi acheter chez nous ?</h2>
    <div class="adv">
      <div class="adv__card">
        <svg class="ic" aria-hidden="true"><use href="#i-bolt"/></svg>
        <h3>Produits 100% originaux</h3>
        <p>Garantie</p>
      </div>
      <div class="adv__card">
        <svg class="ic" aria-hidden="true"><use href="#i-tag"/></svg>
        <h3>Meilleurs prix</h3>
        <p>Un excellent rapport qualité-prix</p>
      </div>
      <div class="adv__card">
        <svg class="ic" aria-hidden="true"><use href="#i-truck"/></svg>
        <h3>Livraison rapide</h3>
        <p>Partout au Togo</p>
      </div>
      <div class="adv__card">
        <svg class="ic" aria-hidden="true"><use href="#i-headset"/></svg>
        <h3>Service client réactif</h3>
        <p>À votre écoute avant et après l'achat</p>
      </div>
    </div>
  </section>

  <!-- ══ LIVRAISON PARTOUT AU TOGO ══ -->
  <section class="section container" id="livraison" aria-label="Zone de livraison">
    <div class="delivery">
      <div>
        <h2>Livraison partout au Togo</h2>
        <p class="delivery__txt">Recevez votre iPhone où que vous soyez dans le pays, en toute sécurité.</p>
        <div class="delivery__cities">
          <svg class="ic" aria-hidden="true"><use href="#i-pin"/></svg>
          <p>Lomé &bull; Kara &bull; Sokodé &bull; Atakpamé &bull; Kpalimé &bull; Tsévié</p>
        </div>
      </div>
      <div class="delivery__map" aria-hidden="true">
        <svg viewBox="0 0 120 230" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M44 10 L62 5 L68 20 L63 36 L69 54 L64 72 L70 90 L65 108 L71 126 L66 144 L72 162 L67 178 L58 198 L46 216 L34 208 L28 190 L35 172 L27 154 L33 136 L25 118 L31 100 L25 82 L33 64 L27 46 L36 28 Z"
                fill="#FFFFFF" stroke="#C6DAEB" stroke-width="2" stroke-linejoin="round"/>
          <g>
            <circle cx="52" cy="38" r="4.5" fill="#E2574C" stroke="#fff" stroke-width="1.6"/>
            <circle cx="56" cy="72" r="4.5" fill="#E2574C" stroke="#fff" stroke-width="1.6"/>
            <circle cx="50" cy="108" r="4.5" fill="#E2574C" stroke="#fff" stroke-width="1.6"/>
            <circle cx="57" cy="142" r="4.5" fill="#E2574C" stroke="#fff" stroke-width="1.6"/>
            <circle cx="47" cy="176" r="4.5" fill="#E2574C" stroke="#fff" stroke-width="1.6"/>
            <circle cx="46" cy="204" r="6" fill="#17395D" stroke="#fff" stroke-width="2"/>
          </g>
        </svg>
        <span class="hand">Votre iPhone,<br>partout au Togo&nbsp;&#8598;</span>
      </div>
    </div>
  </section>

  <!-- ══ CONSEILS POUR CHOISIR VOTRE IPHONE ══ -->
  <section class="section container" id="conseils" aria-label="Guides d'achat">
    <h2 class="section__title">Conseils pour choisir votre iPhone</h2>
    <p class="section__sub">Nos articles pour vous aider à faire le meilleur choix.</p>
    <div class="blog">
      <article class="blog__card">
        <div class="blog__img"><img src="/assets/img/blog/choisir.png" alt="Plusieurs modèles d'iPhone côte à côte pour comparer" loading="lazy" width="576" height="432"></div>
        <h3>Quel iPhone choisir ?</h3>
        <p>Découvrez quel modèle correspond le mieux à vos besoins.</p>
        <a class="blog__link" href="/catalogue">Lire l'article
          <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
        </a>
      </article>
      <article class="blog__card">
        <div class="blog__img"><img src="/assets/img/blog/pro-vs-standard.png" alt="Comparaison entre iPhone Pro et modèle standard" loading="lazy" width="576" height="432"></div>
        <h3>iPhone Pro ou modèle standard ?</h3>
        <p>Les différences pour bien choisir.</p>
        <a class="blog__link" href="/catalogue">Lire l'article
          <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
        </a>
      </article>
      <article class="blog__card">
        <div class="blog__img"><img src="/assets/img/blog/stockage.png" alt="Illustration du choix de capacité de stockage" loading="lazy" width="576" height="432"></div>
        <h3>Quelle capacité de stockage choisir ?</h3>
        <p>Bien évaluer vos besoins de stockage.</p>
        <a class="blog__link" href="/catalogue">Lire l'article
          <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
        </a>
      </article>
    </div>
  </section>

  <!-- ══ QUESTIONS FRÉQUENTES ══ -->
  <section class="section container" id="faq" aria-label="Questions fréquentes">
    <h2 class="section__title">Questions fréquentes</h2>
    <p class="section__sub">Trouvez rapidement les réponses à vos questions.</p>
    <div class="faq">
      <details>
        <summary>Quels modèles d'iPhone sont disponibles ?
          <span class="plus" aria-hidden="true"></span>
        </summary>
        <p class="faq__body">Un large éventail, de l'iPhone 17 (Pro Max, Pro, Air) jusqu'aux SE et modèles plus anciens (XR, 8, 7…). Neufs et reconditionnés, vérifiés et garantis.</p>
      </details>
      <details>
        <summary>Livrez-vous partout au Togo ?
          <span class="plus" aria-hidden="true"></span>
        </summary>
        <p class="faq__body">Oui. Nous livrons à Lomé, Kara, Sokodé, Atakpamé, Kpalimé, Tsévié et dans tout le pays, en toute sécurité.</p>
      </details>
      <details>
        <summary>Comment connaître le prix et la disponibilité ?
          <span class="plus" aria-hidden="true"></span>
        </summary>
        <p class="faq__body">La disponibilité est indiquée sur chaque modèle. Contactez-nous sur WhatsApp au 91&nbsp;85&nbsp;20&nbsp;94 pour obtenir le prix en temps réel et réserver votre iPhone.</p>
      </details>
      <details>
        <summary>Comment contacter le service client ?
          <span class="plus" aria-hidden="true"></span>
        </summary>
        <p class="faq__body">Par WhatsApp au 91&nbsp;85&nbsp;20&nbsp;94, 7 jours sur 7. Notre équipe vous répond en quelques minutes, avant et après votre achat.</p>
      </details>
    </div>
  </section>
</main>

<!-- ══ FOOTER ══ -->
<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__brand">
        <a class="logo" href="/" aria-label="iPhone Togo — accueil">
          <svg class="ic" aria-hidden="true"><use href="#i-apple"/></svg>
          <span>IPHONE TOGO</span>
        </a>
        <p>Votre iPhone, partout au Togo.</p>
      </div>
      <nav class="footer__nav" aria-label="Liens de pied de page">
        <a href="/catalogue">iPhone</a><span class="sep">|</span>
        <a href="#conseils">Guides</a><span class="sep">|</span>
        <a href="#faq">FAQ</a><span class="sep">|</span>
        <a href="#livraison">Livraison</a><span class="sep">|</span>
        <a href="<?= $wa ?>" target="_blank" rel="noopener">Contact</a>
      </nav>
    </div>
    <div class="footer__mid">
      <a class="footer__wa" href="<?= $wa ?>" target="_blank" rel="noopener">
        <svg class="ic" aria-hidden="true"><use href="#i-wa"/></svg>
        91 85 20 94
      </a>
      <div class="footer__soc">
        <a href="#" aria-label="Facebook"><svg class="ic" aria-hidden="true"><use href="#i-fb"/></svg></a>
        <a href="#" aria-label="Instagram"><svg class="ic" aria-hidden="true"><use href="#i-ig"/></svg></a>
        <a href="#" aria-label="YouTube"><svg class="ic" aria-hidden="true"><use href="#i-yt"/></svg></a>
      </div>
    </div>
    <p class="footer__copy">&copy; 2025 iPhone Togo. Tous droits réservés.</p>
  </div>
</footer>

<!-- ══ BARRE D'ACTION FIXE ══ -->
<div class="actionbar" role="navigation" aria-label="Actions rapides">
  <div class="actionbar__row">
    <a class="actionbar__cat" href="/catalogue">
      <svg class="ic" aria-hidden="true"><use href="#i-home"/></svg>
      Catalogue
    </a>
    <a class="actionbar__wa" href="<?= $wa ?>" target="_blank" rel="noopener">
      <svg class="ic" aria-hidden="true"><use href="#i-wa"/></svg>
      WhatsApp
    </a>
  </div>
</div>

<script src="/assets/js/main.js" defer></script>
</body>
</html>
