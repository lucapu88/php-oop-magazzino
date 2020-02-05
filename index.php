<?php
//includo i 3 file che contengono le classi create
include_once  'scarpe.php';
include_once  'stivali.php';
include_once  'ciabatte.php';

$scarpa = new Scarpe('nike', 44, 150); //creo un nuovo oggetto della classe scarpe passandogli come parametri della construct, marca, taglia e prezzo
$scarpa->stampaScarpe(); //chiamo la mia funzione che mi stampa cio che ho dichiarato sopra
echo "sconto del 25%: " . $scarpa->stampaSconto(25) . '€'; //chiamo la mia funzione che mi calcola il prezzo e me lo stampa
echo "<br>";
echo "<br>";
$stivale = new Stivali('timberland', 45, 250, 'alti'); //stessa cosa di prima, soltanto che la classe è stivali e in più gli passo lo stile
$stivale->stampaScarpe(); //chiamo la mia funzione che mi stampa cio che ho dichiarato sopra ma questa volta i parametri sono degli stivali
$stivale->stampaStile(); //in più stampo anche lo stile
echo "sconto del 30%: " . $stivale->stampaSconto(30) . '€'; //stessa cosa di prima, soltanto che la percentuale di sconto cambia
echo "<br>";
echo "<br>";
$ciabatta = new Ciabatte('crocs', 39, 50, 'estive'); //stessa cosa di prima, soltanto che la classe è ciabatte e invece dello stile gli passo la stagione
$ciabatta->stampaScarpe(); //chiamo la mia funzione che mi stampa cio che ho dichiarato sopra ma questa volta i parametri sono delle ciabatte
$ciabatta->stampaStagione(); //in più stampo anche la stagione
echo "sconto del 50%: " . $ciabatta->stampaSconto(50) . '€'; //stessa cosa di prima, soltanto che la percentuale di sconto cambia


 ?>
