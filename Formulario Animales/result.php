<?php
require 'Animal.php';

$animal = null;
$sonido = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    // Crear la instancia correspondiente según el tipo de animal seleccionado
    if ($tipo === 'gato') {
        $animal = new Gato($nombre);
    } elseif ($tipo === 'perro') {
        $animal = new Perro($nombre);
    }

    // Verificar que el objeto $animal fue creado correctamente
    if ($animal !== null) {
        $sonido = $animal->hacerSonido();
    } else {
        $error = "Tipo de animal no reconocido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php if (isset($animal)): ?>
        <!-- Mostrar el mensaje con el nombre del animal y el sonido que hace -->
        <p>El Animal con nombre "<?php echo $animal->getNombre(); ?>" hace: <?php echo $sonido; ?>.</p>
    <?php elseif (isset($error)): ?>
        <!-- Mostrar mensaje de error si el tipo de animal no es reconocido -->
        <p style="color: red;"><?php echo $error; ?></p>
    <?php else: ?>
        <p style="color: red;">Ha ocurrido un error inesperado.</p>
    <?php endif; ?>
    <a href="index.php">Volver</a>
</body>
</html>
