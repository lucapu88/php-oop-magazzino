<?php
include_once 'scarpe.php';
class Stivali extends Scarpe {
  public $stile;

  public function __construct($_marca, $_taglia, $_prezzo, $_stile) {
    parent::__construct($_marca, $_taglia, $_prezzo);
    $this->stile = $_stile;
  }
  public function stampaStile() {
    echo 'stile: ' . $this->stile . '<br>';
  }
}
 ?>
