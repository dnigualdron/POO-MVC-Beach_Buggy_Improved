<?php

require_once __DIR__ . "/Controller/Beach_Buggy_Controller.php";
require_once __DIR__ . "/View/VistaBeachBuggy.php";

$vista = new VistaBeachBuggy();
$controller = new Beach_Buggy_Controller($vista);

$controller -> demostrar();