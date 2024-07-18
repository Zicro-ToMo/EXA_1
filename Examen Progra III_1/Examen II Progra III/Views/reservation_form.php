<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservación</title>
</head>
<body>
    <h1>Reservaciones</h1>
    <?php if (isset($_GET['success'])): ?>
        <p>Su reservación fue agendada correctamente</p>
    <?php elseif (isset($_GET['error'])): ?>
        <p>Hubo un error para guardar los datos, revisar que todos los campos esten llenos correctamente</p>
    <?php endif; ?>

    <form action="index.php?action=process" method="POST">
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

    <h2>Reservations</h2>
    <table border="1">
        <tr>
            <th>Hotel</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>telefono</th>
            <th>Fecha</th>
            <th>observaciones</th>
        </tr>
        <?php
        require_once 'controllers/ReservationController.php';
        $controller = new ReservationController();
        $reservations = $controller->showReservations();
        foreach ($reservations as $reservation) {
            echo '<tr>';
            foreach ($reservation as $field) {
                echo '<td>' . htmlspecialchars($field) . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
