<?php
include_once 'scarpe.php'; //includo il file scarpe per poterne copiare il contenuto
class Stivali extends Scarpe { //creo la classe stivali estendendo la classe scarpe per non ripetere le stesse operazioni
  public $stile; //aggiungo un attributo che ha lo stivale in più alle scarpe

  public function __construct($_marca, $_taglia, $_prezzo, $_stile) { //copio la funzione costruttore delle scarpe aggiungendogli come parametro l'attributo creato prima
    parent::__construct($_marca, $_taglia, $_prezzo);
    $this->stile = $_stile;
  }
  public function stampaStile() { //funzione che stampa solo l'attributo aggiunto
    echo 'Stile: ' . $this->stile . '<br>';
  }
}
 ?>
