<?php
require_once 'functions.php';

// Parametri GET
$length = isset($_GET['length']) ? intval($_GET['length']) : 0;

$useLetters   = isset($_GET['letters']);
$useUppercase = isset($_GET['uppercase']);
$useNumbers   = isset($_GET['numbers']);
$useSymbols   = isset($_GET['symbols']);

$allowRepeat = isset($_GET['repeat']); // true = permetti ripetizioni

// Genera password
$password = '';
if ($length > 0) {
    $password = generatePassword(
        $length,
        $useLetters,
        $useUppercase,
        $useNumbers,
        $useSymbols,
        $allowRepeat
    );
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

    <?php if ($password === false): ?>
        <p><strong>Errore:</strong> Parametri non validi o impossibili da soddisfare.</p>
    <?php elseif ($password): ?>
        <p><strong>Password:</strong> <?= htmlspecialchars($password) ?></p>
    <?php else: ?>
        <p>Nessuna lunghezza valida fornita.</p>
    <?php endif; ?>

    <a href="index.php">Torna al form</a>

</body>
</html>
