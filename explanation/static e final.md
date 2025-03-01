**Proprietà e metodi statici (static, final ecc…)**

In PHP, le proprietà e i metodi statici sono cose che appartengono alla classe stessa, non a un oggetto specifico. È come avere una regola o un conteggio che vale per tutte le macchine di una fabbrica, non solo per una macchina in particolare. Poi c’è final, che mette un "sigillo" su qualcosa per dire "non si cambia più".

• **static:** Rende una proprietà o un metodo "di classe". Non serve creare un oggetto per usarlo, e lo chiami con NomeClasse::. È condiviso tra tutti gli oggetti della classe.

• **final:** Impedisce che una classe o un metodo venga modificato o sovrascritto dalle classi che ereditano. È come dire "questa è la versione definitiva".

• **Differenza con i normali:** Le proprietà/metodi non statici ($this->) sono per ogni oggetto, quelli statici (self::) sono per la classe in generale.

**Esempio pratico**

Creiamo una classe "Studente" per contare quanti studenti ci sono e fissare alcune regole.

```php

<?php
class Studente {
    // Proprietà statica: condivisa da tutti gli studenti
    private static $totaleStudenti = 0;

    // Proprietà normale: diversa per ogni studente
    public $nome;

    // Costruttore
    public function __construct($nome) {
        $this->nome = $nome;
        self::$totaleStudenti++; // Aumento il conteggio statico
    }

    // Metodo statico: accessibile senza oggetto
    public static function getTotaleStudenti() {
        return self::$totaleStudenti;
    }

    // Metodo normale
    public function saluta() {
        return "Ciao, sono $this->nome!";
    }

    // Metodo final: non può essere sovrascritto
    final public function regolaBase() {
        return "Tutti gli studenti devono studiare.";
    }
}

// Classe che eredita
class StudenteSpeciale extends Studente {
    // Posso aggiungere metodi
    public function salutaSpeciale() {
        return "Salve! Sono $this->nome, uno studente speciale!";
    }

    // Errore se provo a sovrascrivere regolaBase()
    // public function regolaBase() { ... } // Fatal error: Cannot override final method
}

// Creo oggetti
$studente1 = new Studente("Luca");
$studente2 = new Studente("Sara");
$studente3 = new StudenteSpeciale("Marco");

// Uso proprietà e metodi normali
echo $studente1->saluta() . "\n";
// Output: Ciao, sono Luca!

echo $studente3->salutaSpeciale() . "\n";
// Output: Salve! Sono Marco, uno studente speciale!

// Uso metodi statici senza oggetto
echo "Totale studenti: " . Studente::getTotaleStudenti() . "\n";
// Output: Totale studenti: 3

// Uso metodo final
echo $studente2->regolaBase() . "\n";
// Output: Tutti gli studenti devono studiare.

// Posso chiamare il metodo statico anche da un oggetto, ma è raro
echo "Totale (via oggetto): " . $studente1::getTotaleStudenti() . "\n";
// Output: Totale (via oggetto): 3
?>
```

**Dettagli utili**

• **static:**

    o Proprietà: un unico valore per tutta la classe (es. $totaleStudenti).

    o Metodi: li chiami senza creare oggetti (es. Studente::getTotaleStudenti()).

    o Usa self:: dentro la classe per accedervi.

• **final:**

    o Su una classe: final class Studente impedisce che venga estesa.

    o Su un metodo: final public function impedisce che venga sovrascritto.

• Accesso: Puoi usare static con public, private o protected per controllare chi ci arriva.
Come ricordarlo

• static: "Vale per tutti, non per me solo!" – come un registro generale.

• final: "Finito, non toccare!" – come un cartello "non modificare".

• $this-> vs self::: $this è "io oggetto", self è "noi classe".
