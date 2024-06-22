<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar campos
    $hotel = isset($_POST['hotel']) ? $_POST['hotel'] : '';
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $observaciones = isset($_POST['observaciones']) ? trim($_POST['observaciones']) : '';

    // Validaciones
    $errors = [];

    if (empty($hotel)) {
        $errors[] = "El hotel es requerido.";
    }
    if (empty($nombre)) {
        $errors[] = "El nombre es requerido.";
    }
    if (empty($apellido)) {
        $errors[] = "El apellido es requerido.";
    }
    if (empty($telefono)) {
        $errors[] = "El teléfono es requerido.";
    } elseif (!preg_match('/^[0-9]{8}$/', $telefono)) {
        $errors[] = "El teléfono debe tener 10 dígitos.";
    }
    if (empty($fecha)) {
        $errors[] = "La fecha de reservación es requerida.";
    }
    if (empty($observaciones)) {
        $errors[] = "Las observaciones son requeridas.";
    }

    // Si hay errores, mostrar mensajes y detener el proceso
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo '<a href="index.php">Volver al formulario</a>';
        exit;
    }

    // Guardar la reservación en el archivo plano
    $reservation = "$hotel|$nombre|$apellido|$telefono|$fecha|$observaciones\n";
    file_put_contents('reservations.txt', $reservation, FILE_APPEND);

    // Redirigir de vuelta al formulario con un mensaje de éxito
    header("Location: index.php");
    exit;
}
?>
