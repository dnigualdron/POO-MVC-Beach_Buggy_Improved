<?php

class VistaBeachBuggy{
    /**
     *  @param Beach_Buggy $Beach_Buggy
     */
    public function mostrarBeach_Buggy(Beach_Buggy $Beach_Buggy){
        echo $Beach_Buggy -> mostrarInfo() . "<br>";
    }

    public function mostrarSeparador(){
        echo str_repeat('-', 60) . "<br>";
    }

    /**
     * @param string $titulo 
     */
    public function mostrarTitulo($titulo){
        echo "<br>" . "==={$titulo} ===" . PHP_EOL;
    }
}