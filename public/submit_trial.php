<?php
require 'includes/db.php';

$name  = $_POST['name']  ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';

if ($name && $phone && $email) {
    $stmt = $pdo->prepare('INSERT INTO trial_signups (full_name, phone, email) VALUES (:name, :phone, :email)');
    $stmt->execute([':name' => $name, ':phone' => $phone, ':email' => $email]);
    $ref = $_SERVER['HTTP_REFERER'] ?? '/';
    $sep = str_contains($ref, '?') ? '&' : '?';
    header("Location: {$ref}{$sep}trial_success=1");
    exit;
}

header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '/'));
?>
