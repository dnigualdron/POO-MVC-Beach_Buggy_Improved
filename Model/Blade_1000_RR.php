<?php

require_once __DIR__ . "/Beach_Buggy.php";

class Blade_1000_RR extends Beach_Buggy {
    private $barras_Dinamicas;
    private $skin_Dorada;

    public function __construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, $color, $precio, $barras_Dinamicas, $skin_Dorada){
        
    parent :: __construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, "Blade_1000_RR", $color, $precio);
    $this -> barras_Dinamicas = $barras_Dinamicas;
    $this -> skin_Dorada = $skin_Dorada;
    }

    public function getBarras_Dinamicas(){
        return $this -> barras_Dinamicas;
    }

    public function getSkin_Dorada(){
        return $this -> skin_Dorada;
    }

    public function setBarras_Dinamicas($barras_Dinamicas){
        $this -> barras_Dinamicas = $barras_Dinamicas;
    }

    public function setSkin_Dorada($skin_Dorada){
        $this -> skin_Dorada = $skin_Dorada;
    }

    public function mostrarInfo(){
        return parent :: mostrarInfo() . " | Barras Dinámicas: {$this -> barras_Dinamicas} | Skin Dorada: {$this -> skin_Dorada}";
    }

}