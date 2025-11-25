 <?php
session_start();

$password = $_SESSION['password'] ?? false;
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
        <p><strong>Errore:</strong> Nessuna password generata.</p>
    <?php else: ?>
        <p><strong>Password:</strong> <?= htmlspecialchars($password) ?></p>
    <?php endif; ?>

    <a href="index.php">Genera una nuova password</a>

</body>
</html>

