<?php
require 'includes/db.php';

$full_name = $_POST['full_name'] ?? '';
$class_date = $_POST['class_date'] ?? '';

if ($full_name && $class_date) {
    $stmt = $pdo->prepare('INSERT INTO signups (full_name, class_date) VALUES (:name, :date)');
    $stmt->execute([':name' => $full_name, ':date' => $class_date]);
    header('Location: /signup.php?success=1');
    exit;
}

header('Location: /signup.php');
?>
