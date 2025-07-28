<?php

use Carbon\Carbon;
use App\Calcul;

require "vendor/autoload.php";
require 'classes/calcul.php';

$instance = new Calcul();
$aujourdhui = carbon::now();
var_dump($aujourdhui->format('d/m/Y'));
$resultat = $instance->additionner(20,20);

var_dump($resultat);

echo "TERENCE";