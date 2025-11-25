<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore Password</title>
</head>
<body>

    <h1>Generatore Password - Opzioni Avanzate</h1>

    <form action="password.php" method="GET">

        <!-- Lunghezza -->
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="length" min="4" max="50" required>
        <br><br>

        <!-- Parametri caratteri -->
        <p><strong>Caratteri da includere:</strong></p>

        <label>
            <input type="checkbox" name="letters" checked>
            Lettere minuscole
        </label><br>
        
        <label>
            <input type="checkbox" name="uppercase" checked>
            Lettere maiuscole
        </label><br>

        <label>
            <input type="checkbox" name="numbers" checked>
            Numeri
        </label><br>

        <label>
            <input type="checkbox" name="symbols" checked>
            Simboli
        </label><br><br>

        <!-- Ripetizioni -->
        <label>
            <input type="checkbox" name="repeat" checked>
            Permetti ripetizione caratteri
        </label><br><br>

        <button type="submit">Genera</button>
    </form>

</body>
</html>


