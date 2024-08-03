<?php
class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        return "¡Miau! ¡Miau!";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        return "!Guau¡ !Guau¡";
    }
}
?>;
