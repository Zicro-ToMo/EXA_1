<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservaciones de Hotel</title>
</head>
<body>
    <h2>Formulario de Reservación</h2>
    <form action="process.php" method="POST">
    
        <label for="hotel">Hotel:</label>
        <select name="hotel" id="hotel" required>
        <option value="Hotel RIU">Hotel RIU</option>
        <option value="Hotel MARGARITAS Resort">Hotel MARGARITAS</option>
        <option value="Hotel FLAMINGO Resort">Hotel FLAMINGU</option>
        <option value="Hotel ARENAS">Hotel ARENAS</option>
        <option value="Hotel BARCELO">Hotel BARCELO</option>
</select>
        <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br><br>
        <label for="fecha">Fecha de Reservación:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones" required></textarea>
        <br><br>
        <button type="submit">Procesar</button>
    </form>

    <h2>Reservaciones</h2>
    <?php
    if (file_exists('reservations.txt')) {
        $reservations = file('reservations.txt');
        if (count($reservations) > 0) {
            echo '<table border="1">';
            echo '<tr><th>Hotel</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Fecha</th><th>Observaciones</th></tr>';
            foreach ($reservations as $reservation) {
                list($hotel, $nombre, $apellido, $telefono, $fecha, $observaciones) = explode('|', trim($reservation));
                echo "<tr>
                        <td>$hotel</td>
                        <td>$nombre</td>
                        <td>$apellido</td>
                        <td>$telefono</td>
                        <td>$fecha</td>
                        <td>$observaciones</td>
                      </tr>";
            }
            echo '</table>';
        } else {
            echo 'No hay reservaciones.';
        }
    } else {
        echo 'No hay reservaciones.';
    }
    ?>
</body>
</html>
