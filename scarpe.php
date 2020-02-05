<?php

class Scarpe { //creo la classe scarpe e di questa classe assegno 3 attributi public
  public $marca;
  public $taglia;
  public $prezzo;
  public function __construct($_marca, $_taglia, $_prezzo){ //funzione costruttore che vuole obbligatoriamente 3 parametri (cioè i 3 attributi creati prima)
    $this->marca = $_marca;
    $this->taglia = $_taglia;
    $this->prezzo = $_prezzo;
  }
  public function stampaScarpe() { //funzione che stampa i 3 attributi
    echo 'Marca: ' . $this->marca . '<br>';
    echo 'Taglia: ' . $this->taglia . '<br>';
    echo 'Prezzo: ' . $this->prezzo . '€' . '<br>';
  }
  public function stampaSconto($scontoPercentuale) { //funzione che calcola lo sconto in base al valore di percentuale che gli viene passato
    $sconto = $this->prezzo * $scontoPercentuale / 100;
        $totalePrezzo = $this->prezzo - $sconto;
        return $totalePrezzo;
  }
}

 ?>
