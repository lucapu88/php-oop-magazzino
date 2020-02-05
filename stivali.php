<?php
include_once 'scarpe.php';
class Stivali extends Scarpe {
  public $modello;

  public function __construct($_marca, $_taglia, $_prezzo, $_modello) {
    parent::__construct($_marca, $_taglia, $_prezzo);
    $this->argomento_studio = $_modello;
  }
  public function stampaSconto($scontoPercentuale) {
    $sconto = $this->prezzo * $scontoPercentuale / 100;
        $totalePrezzo = $this->prezzo - $sconto;
        return $totalePrezzo;
  }
}
 ?>
