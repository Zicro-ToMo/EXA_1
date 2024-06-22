<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las notas ingresadas por el usuario
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    // Validar que las notas sean números y estén en el rango de 0 a 10
    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && 
        $nota1 >= 0 && $nota1 <= 10 && $nota2 >= 0 && $nota2 <= 10 && $nota3 >= 0 && $nota3 <= 10) {
        // Calcular el promedio
        $promedio = ($nota1 + $nota2 + $nota3) / 3;
    } else {
        $error = "Por favor, ingrese notas válidas entre 0 y 10.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Promedio</title>
</head>
<body>
    <h1>Calculadora de Promedio</h1>
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" required>
        <br><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" required>
        <br><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular Promedio">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($promedio)) {
            echo "<h2>Resultados:</h2>";
            echo "El promedio de las tres notas es: " . number_format($promedio, 2);
        } elseif (isset($error)) {
            echo "<h2>Error:</h2>";
            echo $error;
        }
    }
    ?>
</body>
</html>
