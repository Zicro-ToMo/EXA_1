<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Rectángulo</title>
</head>
<body>
    <h1>Calculadora de Rectángulo</h1>
    <form action="result.php" method="post">
        <label for="length">Largo:</label>
        <input type="number" id="length" name="length" step="0.01" required>
        <br><br>
        <label for="width">Ancho:</label>
        <input type="number" id="width" name="width" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
