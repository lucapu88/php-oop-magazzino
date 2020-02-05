<?php
include_once 'scarpe.php'; //includo il file scarpe per poterne copiare il contenuto
class Ciabatte extends Scarpe { //creo la classe ciabatte estendendo la classe scarpe per non ripetere le stesse operazioni
  public $stagione; //aggiungo un attributo che hanno le ciabatte in più alle scarpe
  public function __construct($_marca, $_taglia, $_prezzo, $stagione) { //copio la funzione costruttore delle scarpe aggiungendogli come parametro l'attributo creato prima
    parent::__construct($_marca, $_taglia, $_prezzo);
    $this->stagione = $stagione;
  }
  public function stampaStagione() { //funzione che stampa solo l'attributo aggiunto
    echo 'Stagione: ' . $this->stagione . '<br>';
  }
}
 ?>
