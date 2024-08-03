<?php
require 'Rectangle.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST['length'];
    $width = $_POST['width'];

    try {
        $rectangle = new Rectangle($length, $width);
        $area = $rectangle->calculateArea();
        $perimeter = $rectangle->calculatePerimeter();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Rectángulo</title>
</head>
<body>
    <h1>Resultados del Rectángulo</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php else: ?>
        <p>Largo: <?php echo $rectangle->getLength(); ?></p>
        <p>Ancho: <?php echo $rectangle->getWidth(); ?></p>
        <p>Área: <?php echo $area; ?></p>
        <p>Perímetro: <?php echo $perimeter; ?></p>
    <?php endif; ?>
    <a href="index.php">Volver</a>
</body>
</html>
