<?php
require_once 'controllers/ReservationController.php';

$controller = new ReservationController();

if (isset($_GET['action']) && $_GET['action'] === 'process') {
    $controller->processReservation();
} else {
    require 'views/reservation_form.php';
}
?>
