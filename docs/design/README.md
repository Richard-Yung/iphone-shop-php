# Design de référence — maquettes à respecter

Ce dossier contient les maquettes officielles. **L'intégration doit respecter
le design à la lettre** : chaque écran développé est validé par comparaison
de captures d'écran (rendu réel vs maquette).

## Convention de nommage

| Fichier attendu | Écran | Format |
|---|---|---|
| `accueil-mobile.png` | Page d'accueil — mobile | maquette mobile-first (prioritaire) |
| `accueil-desktop.png` | Page d'accueil — desktop | variante si disponible |
| `catalogue-mobile.png` | Page catalogue — mobile | à venir |
| `produit-mobile.png` | Fiche produit — mobile | à venir |

## Différence volontaire vs maquette

L'accueil ne permet pas d'accéder à tout le catalogue sur la maquette :
un bouton **« Voir tout »** est ajouté à l'intégration (seule différence
validée par le client).

## Validation

1. Intégration de l'écran
2. Capture d'écran headless (mobile 390×844 + desktop 1440×900)
3. Comparaison côte à côte avec la maquette
4. Itérations jusqu'à correspondance validée
