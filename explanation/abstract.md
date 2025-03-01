**Classi astratte**

Una classe astratta è come un progetto base che non puoi usare direttamente, ma che serve per creare altre classi più specifiche. È un po’ come una ricetta generica ("prepara un dolce") che non puoi mangiare così com’è: devi completarla con dettagli (tipo "torta al cioccolato" o "biscotti").

• Non puoi creare un oggetto direttamente da una classe astratta (niente new ClasseAstratta()).

• Può avere metodi normali (con codice) e metodi astratti (solo "firme" senza codice).

• Le classi che ereditano da una classe astratta (con extends) devono implementare tutti i metodi astratti, altrimenti è un errore.

È utile quando vuoi che diverse classi condividano una struttura comune, ma ognuna la personalizzi a modo suo.

**Esempio pratico**

Immagina di voler creare un sistema per diversi tipi di veicoli, con alcune regole base.

```php

<?php
// Classe astratta
abstract class Veicolo {
    // Proprietà normale
    protected $nome;

    // Costruttore
    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Metodo normale (con codice)
    public function getNome() {
        return $this->nome;
    }

    // Metodo astratto (senza codice, solo firma)
    abstract public function muoviti(); // Le classi figlie devono implementarlo
}

// Classe concreta che eredita dalla classe astratta
class Auto extends Veicolo {
    public function muoviti() {
        return "L'auto $this->nome sfreccia sulla strada!";
    }
}

// Altra classe concreta
class Bicicletta extends Veicolo {
    public function muoviti() {
        return "La bici $this->nome pedala sul sentiero!";
    }
}

// Creo oggetti dalle classi concrete
$auto = new Auto("Ferrari");
$bici = new Bicicletta("Mountain Bike");

echo $auto->getNome() . ": " . $auto->muoviti() . "\n";
// Output: Ferrari: L'auto Ferrari sfreccia sulla strada!

echo $bici->getNome() . ": " . $bici->muoviti() . "\n";
// Output: Mountain Bike: La bici Mountain Bike pedala sul sentiero!

// Errore se provo a creare un oggetto dalla classe astratta
// $veicolo = new Veicolo("Errore"); // Fatal error: Cannot instantiate abstract class
?>
```

**Differenze con le interfacce**

• Classe astratta: Può avere metodi con codice (come getNome()) e metodi astratti (come muoviti()). Una classe può ereditare solo da una classe astratta (ereditarietà singola).

• Interfaccia: Solo metodi astratti (senza codice). Una classe può implementare più interfacce.

**Come ricordarlo**

• Classe astratta: Una "base incompleta" che dice "fai così, ma aggiungi i tuoi dettagli".

• abstract: Parola chiave che rende una classe o un metodo "da completare".

• Ereditarietà: Le classi "figlie" devono finire il lavoro.

Pensa a una classe astratta come a un kit di montaggio IKEA con alcune parti già assemblate (metodi normali) e altre che devi costruire tu (metodi astratti).
