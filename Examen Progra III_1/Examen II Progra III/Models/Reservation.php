<?php
class Reservation {
    private $hotel;
    private $nombre;
    private $apellido;
    private $telefono;
    private $fecha;
    private $observaciones;
    private $filePath = 'ArchivoPlano/reservations.txt';

    public function __construct($hotel, $nombre, $apellido, $telefono, $fecha, $observaciones) {
        $this->hotel = $hotel;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->fecha = $fecha;
        $this->pbservaciones = $observaciones;
    }

    public function validate() {
        if (empty($this->hotel) || empty($this->nombre) || empty($this->apellido) || 
            empty($this->telefono) || empty($this->fecha)) {
            return false;
        }
        return true;
    }

    public function save() {
        $data = "{$this->hotel},{$this->nombre},{$this->apellido},{$this->telefono},{$this->fecha},{$this->observaciones}\n";
        file_put_contents($this->filePath, $data, FILE_APPEND);
    }

    public static function getAll() {
        $filePath = 'ArchivoPlano/reservations.txt';
        $reservations = [];
        if (file_exists($filePath)) {
            $file = fopen($filePath, 'r');
            while (($line = fgetcsv($file)) !== FALSE) {
                $reservations[] = $line;
            }
            fclose($file);
        }
        return $reservations;
    }
}
?>
