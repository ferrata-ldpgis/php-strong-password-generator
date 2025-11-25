 <?php
function generatePassword($length) {
    // Caratteri disponibili
    $chars = 'abcdefghijklmnopqrstuvwxyz';
    $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chars .= '0123456789';
    $chars .= '!@#$%^&*()-_=+[]{};:,.<>?';

    $password = '';

    // Generazione casuale
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }

    return $password;
}

// Recupero parametro GET
$length = isset($_GET['length']) ? intval($_GET['length']) : 0;

// Genero la password solo se il parametro è valido
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

