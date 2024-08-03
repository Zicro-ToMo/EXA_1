<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Animales</title>
</head>
<body>
    <h1>Crear Animal</h1>
    <form action="result.php" method="post">
        <label for="nombre">Nombre del Animal:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="tipo">Tipo de Animal:</label>
        <select id="tipo" name="tipo" required>
            <option value="gato">Gato</option>
            <option value="perro">Perro</option>
        </select>
        <br><br>
        <input type="submit" value="Crear Animal">
    </form>
</body>
</html>
