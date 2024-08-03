<?php
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->setLength($length);
        $this->setWidth($width);
    }

    public function setLength($length) {
        if ($length <= 0) {
            throw new Exception("El largo debe ser un valor positivo.");
        }
        $this->length = $length;
    }

    public function setWidth($width) {
        if ($width <= 0) {
            throw new Exception("El ancho debe ser un valor positivo.");
        }
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}
?>;
