-- Schéma boutique iPhone — version MySQL (migration production).
-- À importer puis passer DB_DRIVER = 'mysql' dans config/config.php.
-- Aucune modification de code requise (couche PDO identique).

CREATE TABLE IF NOT EXISTS products (
    id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
    slug        VARCHAR(120) NOT NULL,
    model       VARCHAR(80)  NOT NULL,
    series      VARCHAR(80)  NOT NULL,
    storage     VARCHAR(20)  NOT NULL,
    color       VARCHAR(40)  NOT NULL,
    condition_  VARCHAR(20)  NOT NULL DEFAULT 'neuf',
    price       DECIMAL(10,2) NOT NULL,
    old_price   DECIMAL(10,2) NULL,
    stock       INT NOT NULL DEFAULT 0,
    image       VARCHAR(255) NULL,
    description TEXT NULL,
    is_featured TINYINT(1) NOT NULL DEFAULT 0,
    is_active   TINYINT(1) NOT NULL DEFAULT 1,
    created_at  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_products_slug (slug),
    KEY idx_products_series (series),
    KEY idx_products_featured (is_featured, is_active),
    KEY idx_products_price (price)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
