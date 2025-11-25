<?php
session_start();
require_once 'functions.php';

// Controlliamo se il form è stato inviato
if (!empty($_GET)) {

    $length = isset($_GET['length']) ? intval($_GET['length']) : 0;

    $useLetters   = isset($_GET['letters']);
    $useUppercase = isset($_GET['uppercase']);
    $useNumbers   = isset($_GET['numbers']);
    $useSymbols   = isset($_GET['symbols']);

    $allowRepeat = isset($_GET['repeat']);

    // Genera password
    $password = generatePassword(
        $length,
        $useLetters,
        $useUppercase,
        $useNumbers,
        $useSymbols,
        $allowRepeat
    );

    // Salva in sessione
    $_SESSION['password'] = $password;

    // Redirect
    header("Location: show.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore Password</title>
</head>
<body>

    <h1>Generatore Password</h1>

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

        <button type="submit">Genera Password</button>

    </form>

</body>
</html>
