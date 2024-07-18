<?php
require_once 'models/Reservation.php';

class ReservationController {
    public function processReservation() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hotel = $_POST['hotel'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $fecha = $_POST['fecha'];
            $observaciones = $_POST['observaciones'];

            $reservation = new Reservation($hotel, $nombre, $apellido, $telefono, $fecha, $observaciones);

            if ($reservation->validate()) {
                $reservation->save();
                header('Location: index.php?success=1');
                exit();
            } else {
                header('Location: index.php?error=1');
                exit();
            }
        }
    }

    public function showReservations() {
        return Reservation::getAll();
    }
}
?>
