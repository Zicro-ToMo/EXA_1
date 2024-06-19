<?php
function contar_ocurrencias($frase, $letra) {
    // Convertir ambos la frase y la letra a minúsculas para que la búsqueda sea insensible a mayúsculas/minúsculas
    $frase = strtolower($frase);
    $letra = strtolower($letra);
    // Contar las ocurrencias de la letra en la frase
    $contador = substr_count($frase, $letra);
    return $contador;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados por el usuario
    $frase = $_POST['frase'];
    $letra = $_POST['letra'];

    // Validar que la letra tenga exactamente un carácter
    if (strlen($letra) == 1) {
        $contador = contar_ocurrencias($frase, $letra);
    } else {
        $error = "Por favor, ingrese una sola letra.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Letras</title>
</head>
<body>
    <h1>Contador de Letras</h1>
    <form method="post" action="">
        <label for="frase">Frase:</label>
        <input type="text" id="frase" name="frase" required>
        <br><br>
        <label for="letra">Letra:</label>
        <input type="text" id="letra" name="letra" required>
        <br><br>
        <input type="submit" value="Contar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($contador)) {
            echo "<h2>Resultados:</h2>";
            echo "La letra '" . htmlspecialchars($letra) . "' aparece " . $contador . " veces en la frase.";
        } elseif (isset($error)) {
            echo "<h2>Error:</h2>";
            echo $error;
        }
    }
    ?>
</body>
</html>
