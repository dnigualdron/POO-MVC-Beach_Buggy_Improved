<?php

require_once __DIR__ . "/Beach_Buggy.php";

class Twin_Mill extends Beach_Buggy{
    private $doble_Motor;
    private $potencia_Cromada;

    public function __construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, $color, $precio, $doble_Motor, $potencia_Cromada){
        parent::__construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, "Twin_Mill", $color, $precio);
        $this -> doble_Motor = $doble_Motor;
        $this -> potencia_Cromada = $potencia_Cromada;
    }

    public function getDoble_Motor(){
        return $this -> doble_Motor;
    }

    public function getPotencia_Cromada(){
        return $this -> potencia_Cromada;
    }

    public function setDoble_Motor($doble_Motor){
        $this -> doble_Motor = $doble_Motor;
    }

    public function setPotencia_Cromada($potencia_Cromada){
        $this -> potencia_Cromada = $potencia_Cromada;
    }

    public function mostrarInfo(){
        return parent::mostrarInfo() . " | Doble motor: {$this -> doble_Motor} | Potencia Cromada: {$this -> potencia_Cromada}";
    }

}