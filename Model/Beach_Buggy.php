<?php

class Beach_Buggy {
    private $aceleracion;
    private $maxima_Velocidad;
    private $manejo;
    private $rendimiento;
    private $tipo;
    private $color;
    private $precio;

    public function __construct($aceleracion, $maxima_velocidad, $manejo, $rendimiento, $tipo, $color, $precio){
        $this -> aceleracion = $aceleracion;
        $this -> maxima_Velocidad = $maxima_velocidad;
        $this -> manejo = $manejo;
        $this -> rendimiento = $rendimiento;
        $this -> tipo = $tipo;
        $this -> color = $color;
        $this -> precio = $precio;
    }
    
    public function getAceleracion(){
        return $this -> aceleracion;
    }

    public function getMaxima_Velocidad(){
        return $this -> maxima_Velocidad;
    }

    public function getManejo(){
        return $this -> manejo;
    }

    public function getRendimiento(){
        return $this -> rendimiento;
    }

    public function getTipo(){
        return $this -> tipo;
    }

    public function getColor(){
        return $this -> color;
    }

    public function getPrecio(){
        return $this -> precio;
    }

    public function setAceleracion($aceleracion){
        $this -> aceleracion = $aceleracion;
    }

    public function setMaxima_Velocidad($maxima_Velocidad){
        $this -> maxima_Velocidad = $maxima_Velocidad;
    }

    public function setManejo($manejo){
        $this -> manejo = $manejo;
    }

    public function setRendimiento($rendimiento){
        $this -> rendimiento = $rendimiento;
    }

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }

    public function setColor($color){
        $this -> color = $color;
    }

    public function setPrecio($precio){
        $this -> precio = $precio;
    }

    public function mostrarInfo(){
        return " Aceleración:  {$this -> aceleracion} |  Máxima Velocidad:  {$this -> maxima_Velocidad} | 
         Manejo:  {$this -> manejo} |  Rendimiento:  {$this -> rendimiento} |  Tipo:  {$this -> tipo} | 
         Color:  {$this -> color} |  Precio:  {$this -> precio} " ;
    }

}