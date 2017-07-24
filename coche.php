<?php
/**
 * Clase de ejemplo de definicion
 */

 class ClaseCoche
 {
    // Declaración de una propiedad
    public $color = 'Verde';
    public $tipo = 'turismo';

    // Declaracion de un método
    public function mostrarColor() {
        echo '<br>';
        echo 'El color del coche es:';
        echo $this->color;
        echo '<br>';
    }
    public function getColor(){
        return $this->color;
    }
    public function mostrarTipo(){
        echo $this->tipo;
    }
 }

?>