<?php
require_once __DIR__ . '/env.php';   // подключаем наш маленький загрузчик

$host = $_ENV['DB_HOST'] ?? 'localhost';
$port = $_ENV['DB_PORT'] ?? '5432';
$db   = $_ENV['DB_NAME'] ?? 'yoga';
$user = $_ENV['DB_USER'] ?? 'postgres';
$pass = $_ENV['DB_PASS'] ?? '';

$dsn = "pgsql:host=$host;port=$port;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
