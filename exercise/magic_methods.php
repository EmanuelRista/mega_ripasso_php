<?php

/* __GET //prendi una proprietà che non esiste
__SET //setta una proprietà che non esiste
__CALL //chiamata di un metodo che non esiste
__CALLSTATIC //chiamata di un metodo statico che non esiste
__TOSTRING //quando si cerca di stampare un oggetto
__INVOKE //
__SET_STATE //serializzazione
__CLONE //clonazione
__DEBUGINFO //debug */

class Persona {
    
    private $dati = ["nome" => "Luca"];

    public function __get($nomeProprieta) {
        if(isset($this->dati[$nomeProprieta])) {
            return $this->dati[$nomeProprieta];
        } else {
            return "Proprietà non esistente";
        }
    }

}

$persona = new Persona();
echo $persona->nome; //output: Luca
echo '<br>'; 
echo $persona->eta;//output: Proprietà non esistente,
// php non trova la proprietà nome, quindi chiama il metodo __get e io gli dico cosa restituire
echo '<br>';
// __callStatic

class Calcolatrice {

    public static function __callStatic($nomeMetodo, $argomenti) {
        if($nomeMetodo == "somma") {
            return array_sum($argomenti);
        } else {
            return "Metodo non esistente";
        }
    }

}

echo Calcolatrice::somma(1, 2, 3); //output: 6
echo '<br>'; 
echo Calcolatrice::moltiplica(2, 3); //output: Metodo non esistente
// php non trovando il metodo statico somma, quindi chiama il metodo __callStatic e io gli dico cosa restitu
echo '<br>';

//__call

class Cane {

    public function __call($nomeMetodo, $argomenti) {
        if($nomeMetodo == "abbaia") {
            return "bau bau";
        } else {
            return "Metodo non esistente";
        }
    }
}

$cane = new Cane();
echo $cane->abbaia(); //output: bau bau
echo '<br>';
echo $cane->corri(); //output: Metodo non esistente
// php non trovando il metodo abbaia, quindi chiama il metodo __call e io gli dico cosa restituire