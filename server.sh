#!/usr/bin/env bash
# Serveur de développement — boutique iPhone (PHP 8 + SQLite)
# Usage : ./server.sh [port]

PORT="${1:-8080}"
PHP_BIN="${PHP_BIN:-php}"

if ! command -v "$PHP_BIN" >/dev/null 2>&1; then
  for candidate in /home/z/.local/bin/php /home/z/my-project/bin/php; do
    [ -x "$candidate" ] && PHP_BIN="$candidate" && break
  done
fi

echo "► Démarrage http://localhost:${PORT}  (PHP $($PHP_BIN -r 'echo PHP_VERSION;'))"
cd "$(dirname "$0")" || exit 1
exec "$PHP_BIN" -S "0.0.0.0:${PORT}" -t public
