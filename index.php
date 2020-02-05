<!-- provate a creare una gerarchia di classi per gestire i prodotti di un magazzino (almeno una classe base e una classe che fa extends).
A voi piena scelta sulla tipologia di prodotti e sulle funzioni da inserire, l'idea è che prendiate familiarità con questo nuovo paradigma di programmazione -->
<?php
include_once  'scarpe.php';
include_once  'stivali.php';
//include_once  'ciabatte.php';

$scarpa = new Scarpe('nike', 44, 150);
echo '<pre>';
var_dump($scarpa);
echo '</pre>';

$stivale = new Stivali('timberland', 45, 250, 'alti');
echo '<pre>';
var_dump($stivale);
echo '</pre>';

// $ciabatta = new Ciabatte();
// $ciabatta->marca = 'crocs';
// $ciabatta->taglia = '45';
// $ciabatta->prezzo = '80';
// // $ciabatta->modello = 'alto';
// $ciabatta->stagione = 'estiva';
// echo '<pre>';
// var_dump($ciabatta);
// echo '</pre>';
 ?>
