**Traits**

I traits sono come dei "pacchetti di codice" riutilizzabili che puoi aggiungere a una classe. Sono un modo per condividere metodi (e a volte proprietà) tra classi diverse senza dover usare l’ereditarietà classica. È come avere un set di superpoteri extra che puoi dare a chi vuoi, senza costringerlo a essere "figlio" di una sola classe genitore.

• Non puoi creare oggetti direttamente da un trait (non è una classe).

• Si includono in una classe con la parola chiave use.

• Risolvono il limite dell’ereditarietà singola in PHP: una classe può ereditare da una sola classe, ma può usare più traits.

• Se ci sono conflitti (es. due traits con lo stesso metodo), puoi decidere quale usare o rinominarlo.

**Esempio pratico**

Immagina di voler dare a diversi personaggi la capacità di "volare" e "parlare", senza ripetere il codice.

```php

<?php
// Definiamo i traits
trait Volare {
    public function vola() {
        return "Sto volando!";
    }
}

trait Parlare {
    public function parla() {
        return "Ciao, come stai?";
    }

    // Un metodo che potrebbe confliggere
    public function saluta() {
        return "Saluti dal trait Parlare!";
    }
}

// Classe con un solo trait
class Uccello {
    use Volare;

    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe con più traits
class Supereroe {
    use Volare, Parlare {
        // Risolvo conflitto: uso il saluta di Parlare e rinomino l'altro
        Parlare::saluta insteadof Volare; // Se Volare avesse un saluta, lo scarto
        Parlare::saluta as salutoParlante; // Creo un alias
    }

    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Creo oggetti
$uccello = new Uccello("Passerotto");
$supereroe = new Supereroe("Superman");

// Uso i traits
echo "$uccello->nome: " . $uccello->vola() . "\n";
// Output: Passerotto: Sto volando!

echo "$supereroe->nome: " . $supereroe->vola() . "\n";
// Output: Superman: Sto volando!

echo "$supereroe->nome: " . $supereroe->parla() . "\n";
// Output: Superman: Ciao, come stai?

echo "$supereroe->nome: " . $supereroe->salutoParlante() . "\n";
// Output: Superman: Saluti dal trait Parlare!
?>
```

**Dettagli utili**
• use: Include il trait nella classe (es. use Volare;).

• Conflitti: Se due traits hanno lo stesso metodo:

    o Usa insteadof per scegliere quale tenere (es. Parlare::saluta insteadof Volare).

    o Usa as per rinominare (es. Parlare::saluta as salutoParlante).

• Visibilità: Puoi cambiare la visibilità dei metodi del trait con as (es. saluta as private).

• Proprietà: I traits possono avere proprietà, ma attenzione ai conflitti con la classe.

**Esempio con proprietà e visibilità**

```php

<?php
trait Info {
    public $livello = 1;

    public function getInfo() {
        return "Livello: $this->livello";
    }
}

class Giocatore {
    use Info {
        getInfo as private; // Rendo il metodo privato
    }

    public function mostra() {
        return $this->getInfo(); // Posso usarlo internamente
    }
}

$giocatore = new Giocatore();
echo $giocatore->mostra() . "\n";
// Output: Livello: 1

// Errore se provo a chiamare direttamente
// echo $giocatore->getInfo(); // Fatal error: Call to private method
?>
```

**Come ricordarlo**

• Traits: "Superpoteri condivisi da incollare dove vuoi!"

• use: "Aggiungi questo pacchetto alla mia classe."

• Flessibili: Più traits, niente limiti come con l’ereditarietà.

Pensa ai traits come a moduli LEGO: li prendi, li attacchi alla tua costruzione (classe) e funzionano subito.
