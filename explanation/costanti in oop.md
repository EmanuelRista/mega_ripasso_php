**Usare costanti nelle classi**

Le costanti in una classe sono valori fissi che non cambiano mai, come una regola scritta sulla pietra. Sono utili per definire cose che devono restare sempre uguali, tipo un numero massimo, un nome standard o una configurazione. A differenza delle proprietà normali, non puoi modificarle dopo averle definite.

• Si dichiarano con la parola chiave const dentro la classe.

• Non usano il simbolo $ (diverse dalle variabili).

• Sono automaticamente "statiche", cioè appartengono alla classe, non a un oggetto specifico.

• Si accedono con NomeClasse::NOME_COSTANTE o self::NOME_COSTANTE dentro la classe.

• Possono essere public, private o protected (da PHP 7.1 in poi per visibilità).

**Esempio pratico**

Creiamo una classe "Biblioteca" con alcune costanti per gestire i limiti dei libri.

```php

<?php
class Biblioteca {
    // Costanti pubbliche
    public const MAX_LIBRI = 5;        // Numero massimo di libri per utente
    public const ORARIO_APERTURA = "9:00";

    // Costante privata (solo la classe può usarla)
    private const CODICE_SEGRETO = "BIB123";

    // Proprietà normale
    public $utente;

    // Costruttore
    public function __construct($utente) {
        $this->utente = $utente;
    }

    // Metodo per controllare il numero di libri
    public function prestaLibro($numeroLibri) {
        if ($numeroLibri <= self::MAX_LIBRI) {
            return "$this->utente può prendere $numeroLibri libri.";
        } else {
            return "Errore: il massimo è " . self::MAX_LIBRI . " libri!";
        }
    }

    // Metodo per mostrare il codice segreto (solo interno)
    public function getCodice() {
        return "Codice: " . self::CODICE_SEGRETO;
    }
}

// Creo un oggetto
$biblioteca = new Biblioteca("Luca");

// Uso le costanti dall'esterno
echo "Orario apertura: " . Biblioteca::ORARIO_APERTURA . "\n";
// Output: Orario apertura: 9:00

echo "Massimo libri: " . Biblioteca::MAX_LIBRI . "\n";
// Output: Massimo libri: 5

// Uso il metodo con la costante
echo $biblioteca->prestaLibro(3) . "\n";
// Output: Luca può prendere 3 libri.

echo $biblioteca->prestaLibro(7) . "\n";
// Output: Errore: il massimo è 5 libri!

// Mostro il codice segreto tramite il metodo
echo $biblioteca->getCodice() . "\n";
// Output: Codice: BIB123

// Errore se provo ad accedere alla costante privata direttamente
// echo Biblioteca::CODICE_SEGRETO; // Fatal error: Cannot access private const
?>
```

**Dettagli utili**

• Accesso:

    o Fuori dalla classe: NomeClasse::NOME_COSTANTE.

    o Dentro la classe: self::NOME_COSTANTE.

• Visibilità:

    o public: tutti possono usarla (default).

    o private: solo la classe.

    o protected: classe e classi che ereditano.

• Non modificabile: Una volta definita, non puoi cambiarla (es. Biblioteca::MAX_LIBRI = 10 dà errore).

**Come ricordarlo**

• const: "Questo non si tocca mai!"

• Nessun $: È un nome fisso, non una variabile.

• Statico di natura: Appartiene alla classe, come una regola generale.

Pensa alle costanti come a targhette fisse su una scatola: "Massimo 5" o "Apre alle 9:00". Non le cambi, le leggi e basta.
