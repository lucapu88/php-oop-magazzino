<?php
include_once 'scarpe.php';
class Ciabatte extends Scarpe {
  public $stagione;
  public function __construct($_marca, $_taglia, $_prezzo, $stagione) {
    parent::__construct($_marca, $_taglia, $_prezzo);
    $this->stagione = $stagione;
  }

}
 ?>
