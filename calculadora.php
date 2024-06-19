<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los números ingresados por el usuario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Realizar las operaciones matemáticas
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;

    // Validar la división por cero
    if ($num2 != 0) {
        $division = $num1 / $num2;
    } else {
        $division = "Error: División por cero no permitida";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Resultados:</h2>";
        echo "Suma: " . $suma . "<br>";
        echo "Resta: " . $resta . "<br>";
        echo "Multiplicación: " . $multiplicacion . "<br>";
        echo "División: " . $division . "<br>";
    }
    ?>
</body>
</html>
