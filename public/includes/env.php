<?php
/**
 * Minimal .env loader (no external libs)
 * Usage: require_once 'env.php';
 */
function loadEnv(string $file): void
{
    if (!is_readable($file)) { return; }

    foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) { continue; }

        [$key, $value] = array_map('trim', explode('=', $line, 2));
        putenv("$key=$value");
        $_ENV[$key]    = $value;
        $_SERVER[$key] = $value;
    }
}

// два уровня вверх от public/includes/ → корень репо
loadEnv(dirname(__DIR__, 2) . '/.env');
