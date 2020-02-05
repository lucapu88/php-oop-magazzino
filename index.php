<!-- provate a creare una gerarchia di classi per gestire i prodotti di un magazzino (almeno una classe base e una classe che fa extends).
A voi piena scelta sulla tipologia di prodotti e sulle funzioni da inserire, l'idea è che prendiate familiarità con questo nuovo paradigma di programmazione -->
<?php
include_once  'scarpe.php';
include_once  'stivali.php';
include_once  'ciabatte.php';

$scarpa = new Scarpe('nike', 44, 150);
echo '<pre>';
var_dump($scarpa);
echo "sconto del 25%: " . $scarpa->stampaSconto(25) . '€';
echo '</pre>';

$stivale = new Stivali('timberland', 45, 250, 'alti');
//$stivale->stampaScarpe();
echo '<pre>';
var_dump($stivale);
echo "sconto del 30%: " . $stivale->stampaSconto(30) . '€';
echo '</pre>';

$ciabatta = new Ciabatte('crocs', 39, 50, 'estive');
echo '<pre>';
var_dump($ciabatta);
echo "sconto del 50%: " . $ciabatta->stampaSconto(50) . '€';
echo '</pre>';

 ?>
