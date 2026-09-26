-- Schéma boutique iPhone — compatible SQLite (défaut dev).
-- Équivalent MySQL : database/schema.mysql.sql (à importer lors de la migration).

CREATE TABLE IF NOT EXISTS products (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    slug        TEXT    NOT NULL UNIQUE,
    model       TEXT    NOT NULL,            -- ex: iPhone 17 Pro Max
    series      TEXT    NOT NULL,            -- ex: Série 17, Série 13, SE
    storage     TEXT    NOT NULL,            -- ex: 256 Go
    color       TEXT    NOT NULL,
    condition_  TEXT    NOT NULL DEFAULT 'neuf',   -- neuf | comme-neuf | reconditionne
    price       REAL    NOT NULL,
    old_price   REAL,                        -- prix barré optionnel
    stock       INTEGER NOT NULL DEFAULT 0,
    image       TEXT,                        -- chemin asset (public/assets/img)
    description TEXT,
    is_featured INTEGER NOT NULL DEFAULT 0,  -- mise en avant page accueil
    is_active   INTEGER NOT NULL DEFAULT 1,
    created_at  TEXT    NOT NULL DEFAULT (datetime('now'))
);

CREATE INDEX IF NOT EXISTS idx_products_series   ON products (series);
CREATE INDEX IF NOT EXISTS idx_products_featured ON products (is_featured, is_active);
CREATE INDEX IF NOT EXISTS idx_products_price    ON products (price);
