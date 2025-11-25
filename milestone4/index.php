<?php
require_once 'functions.php';

// Controlliamo se ci sono parametri GET
$isSubmitted = !empty($_GET);

$password = false;

if ($isSubmitted) {

    $length = isset($_GET['length']) ? intval($_GET['length']) : 0;

    $useLetters   = isset($_GET['letters']);
    $useUppercase = isset($_GET['uppercase']);
    $useNumbers   = isset($_GET['numbers']);
    $useSymbols   = isset($_GET['symbols']);

    $allowRepeat  = isset($_GET['repeat']);

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
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore Password Unica Pagina</title>
</head>
<body>

<?php if (!$isSubmitted): ?>

    <!-- ------------------------------- -->
    <!-- FORM (quando NON ci sono parametri) -->
    <!-- ------------------------------- -->

    <h1>Generatore Password - Unica Pagina</h1>

    <form action="index.php" method="GET">
        
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="length" min="4" max="50" required>
        <br><br>

        <p><strong>Caratteri da includere:</strong></p>

        <label><input type="checkbox" name="letters" checked> Lettere minuscole</label><br>
        <label><input type="checkbox" name="uppercase" checked> Lettere maiuscole</label><br>
        <label><input type="checkbox" name="numbers" checked> Numeri</label><br>
        <label><input type="checkbox" name="symbols" checked> Simboli</label><br><br>

        <label>
            <input type="checkbox" name="repeat" checked>
            Permetti ripetizione caratteri
        </label><br><br>

        <button type="submit">Genera</button>

    </form>

<?php else: ?>

    <!-- ------------------------------- -->
    <!-- VIEW PASSWORD (quando ci sono parametri) -->
    <!-- ------------------------------- -->

    <h1>Password Generata</h1>

    <?php if ($password === false): ?>
        <p><strong>Errore:</strong> Parametri non validi.</p>
    <?php else: ?>
        <p><strong>Password:</strong> <?= htmlspecialchars($password) ?></p>
    <?php endif; ?>

    <a href="index.php">Torna al form</a>

<?php endif; ?>

</body>
</html>
