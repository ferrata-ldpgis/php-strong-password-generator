 <!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore Password</title>
</head>
<body>

    <h1>Generatore di Password</h1>

    <form action="password.php" method="GET">
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="length" min="4" max="50" required>

        <button type="submit">Genera</button>
    </form>

</body>
</html>

