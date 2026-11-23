<?php

require_once __DIR__ . "/../Model/Beach_Buggy.php";
require_once __DIR__ . "/../Model/Blade_1000_RR.php";
require_once __DIR__ . "/../Model/Warp.php";
require_once __DIR__ . "/../Model/Twin_Mill.php";

require_once __DIR__ . "/../View/VistaBeachBuggy.php";

class Beach_Buggy_Controller{
    private $vista;
    /**
     * @param VistaBeachBuggy $vista
     */
    public function __construct(VistaBeachBuggy $vista){
        $this -> vista = $vista;
    }

    public function demostrar(){
        $this -> vista -> mostrarTitulo("Beach Buggy Rancing Improved");
        $beach_improved = array (
            new Beach_Buggy("5", "4", "5", "4", "Buggy de playa", "Rojo y Blanco", "$: Gratis" ),
            new Blade_1000_RR("8", "9", "6", "3", "Verder Neón", "1500", "true", "true"),
            new Warp("8", "9", "9", "7", "Azúl Ciber", "2000", "true", "100"),
            new Twin_Mill("9", "10", "7", "6", "Verde Métalico", "2500", "true", "95")
        );

        $this -> vista -> mostrarSeparador();

        foreach($beach_improved as $beach_ending){
            $this -> vista -> mostrarBeach_Buggy($beach_ending);
        }

        $this -> vista -> mostrarSeparador();
    }
}