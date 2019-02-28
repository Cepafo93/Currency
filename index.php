<?php

require_once __DIR__ . '/vendor/autoload.php';

use Currency\Convert;

$rates = file_get_contents("https://api.exchangeratesapi.io/latest");
var_dump(json_decode($rates));
$rates_json = json_decode($rates);

$panier1 = new Convert(99, 1, 1, 69, $rates_json->rates->USD, 2 );
echo $panier1->calcul();




?>