<?php

require_once __DIR__ . "/Beach_Buggy.php";

class Warp extends Beach_Buggy{
    private $suspencion_Magnetica;
    private $energia_Plasma;

    public function __construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, $color, $precio, $suspencion_Magnetica, $energia_Plasma){
        parent :: __construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, "Warp", $color, $precio);
        $this -> suspencion_Magnetica = $suspencion_Magnetica;
        $this -> energia_Plasma = $energia_Plasma;
    }

    public function getSuspencion_Magnetica(){
        return $this -> suspencion_Magnetica;
    }

    public function getEnergia_Plasma(){
        return $this -> energia_Plasma;
    }

    public function setSuspencion_Magnetica($suspencion_Magnetica){
        $this -> suspencion_Magnetica = $suspencion_Magnetica;
    }

    public function setEnergia_Plasma($energia_Plasma){
        $this -> energia_Plasma = $energia_Plasma;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . " | Suspención Magnética: {$this -> suspencion_Magnetica} | Energía Plasma: {$this -> energia_Plasma}";
    }

}