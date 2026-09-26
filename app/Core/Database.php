<?php
/**
 * Couche d'accès base de données — PDO singleton.
 *
 * Compatible SQLite ET MySQL : le driver est choisi par DB_DRIVER.
 * Les requêtes du projet doivent rester dans le sous-ensemble SQL
 * commun aux deux moteurs (pas de pragma, pas de LIMIT x,y MySQL,
 * pas de ON CONFLICT spécifique, placeholders nommés ou ?).
 */

declare(strict_types=1);

final class Database
{
    private static ?PDO $pdo = null;

    public static function pdo(): PDO
    {
        if (self::$pdo instanceof PDO) {
            return self::$pdo;
        }

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        if (DB_DRIVER === 'mysql') {
            $dsn = sprintf(
                'mysql:host=%s;port=%d;dbname=%s;charset=%s',
                DB_MYSQL_HOST, DB_MYSQL_PORT, DB_MYSQL_NAME, DB_MYSQL_CHARSET
            );
            self::$pdo = new PDO($dsn, DB_MYSQL_USER, DB_MYSQL_PASS, $options);
        } else {
            $dir = dirname(DB_SQLITE);
            if (!is_dir($dir)) {
                mkdir($dir, 0775, true);
            }
            $fresh = !file_exists(DB_SQLITE);
            self::$pdo = new PDO('sqlite:' . DB_SQLITE, null, null, $options);
            self::$pdo->exec('PRAGMA foreign_keys = ON');
            self::$pdo->exec('PRAGMA journal_mode = WAL');
            if ($fresh) {
                self::migrate();
            }
        }

        return self::$pdo;
    }

    /** Exécute le schéma au premier démarrage (SQLite). */
    private static function migrate(): void
    {
        $schema = file_get_contents(APP_ROOT . '/database/schema.sql');
        if ($schema === false || trim($schema) === '') {
            return;
        }
        self::$pdo->exec($schema);
    }

    /** Helper de requête préparée. */
    public static function query(string $sql, array $params = []): PDOStatement
    {
        $stmt = self::pdo()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    /** Récupère toutes les lignes. */
    public static function all(string $sql, array $params = []): array
    {
        return self::query($sql, $params)->fetchAll();
    }

    /** Récupère la première ligne ou null. */
    public static function one(string $sql, array $params = []): ?array
    {
        $row = self::query($sql, $params)->fetch();
        return $row === false ? null : $row;
    }
}
