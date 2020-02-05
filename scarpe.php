<?php

class Scarpe {
  public $marca;
  public $taglia;
  public $prezzo;
  public function __construct($_marca, $_taglia, $_prezzo){
    $this->marca = $_marca;
    $this->taglia = $_taglia;
    $this->prezzo = $_prezzo;
  }
  public function stampaScarpe() {
    echo 'marca: ' . $this->marca . '<br>';
    echo 'taglia: ' . $this->taglia . '<br>';
    echo 'prezzo: ' . $this->prezzo . '<br>';
  }
  public function stampaSconto($scontoPercentuale) {
    $sconto = $this->prezzo * $scontoPercentuale / 100;
        $totalePrezzo = $this->prezzo - $sconto;
        return $totalePrezzo;
  }
}

 ?>
