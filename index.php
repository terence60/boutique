<?php

spl_autoload_register(function($className){

    $className = str_replace("App", "classes", $className);
    var_dump($className);
    die();
});

require 'classes/calcul.php';

$instance = new App\Calcul();
$resultat = $instance->additionner(10,20);

var_dump($resultat);

echo "TERENCE";