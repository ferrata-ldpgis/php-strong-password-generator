<?php
require_once 'functions.php';

$length = isset($_GET['length']) ? intval($_GET['length']) : 0;

$password = '';
if ($length > 0) {
    $password = generatePassword($length);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Password Generata</title>
</head>
<body>

    <h1>Password Generata</h1>

    <?php if ($password): ?>
        <p><strong>Password:</strong> <?= htmlspecialchars($password) ?></p>
    <?php else: ?>
        <p>Nessuna lunghezza valida fornita.</p>
    <?php endif; ?>

    <a href="index.php">Torna al form</a>

</body>
</html>

