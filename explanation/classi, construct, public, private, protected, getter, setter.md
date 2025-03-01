**Classe, costruttore, proprietà public, private e protected, metodi getter e setter**

Questi sono i mattoni dell’**OOP (programmazione orientata agli oggetti)** in PHP. Immagina di costruire un giocattolo con pezzi diversi: la classe è il progetto, le proprietà sono le caratteristiche, e i metodi sono le azioni che può fare.

• **Classe:** È il "progetto" o modello per creare oggetti. Ad esempio, una classe "Auto" descrive come sono fatte tutte le auto.

• **Costruttore:** È una funzione speciale ( \_\_construct) che si attiva quando crei un oggetto dalla classe. Serve a impostare le cose iniziali, come il colore di un’auto appena costruita.

• **Proprietà:** Sono le "caratteristiche" dell’oggetto (variabili dentro la classe). Possono essere:

    o **public:** Tutti possono vederle e cambiarle, come il colore di un’auto visibile a chiunque.

    o **private:** Solo la classe stessa può usarle, come il numero di serie segreto di un’auto.

    o **protected:** Solo la classe e le sue "figlie" (classi che ereditano) possono accedervi, come un codice familiare.

• Metodi getter e setter: Sono funzioni per leggere (getter) o modificare (setter) le proprietà in modo controllato, soprattutto quelle private o protected. È come avere una finestrella per guardare dentro o un pulsante per cambiare qualcosa.

**Esempio pratico**

Creiamo una classe "Persona" con nome e età, usando tutte queste cose.

```php

<?php
class Persona {
    // Proprietà
    public $nome;           // Visibile e modificabile da tutti
    private $età;           // Solo la classe può usarla
    protected $codiceFamiglia = "ABC123"; // Accessibile a classi che ereditano

    // Costruttore
    public function __construct($nome, $età) {
        $this->nome = $nome;  // Imposto il nome
        $this->età = $età;    // Imposto l'età
    }

    // Getter per l'età (lettura)
    public function getEtà() {
        return $this->età;
    }

    // Setter per l'età (modifica controllata)
    public function setEtà($nuovaEtà) {
        if ($nuovaEtà > 0) { // Controllo per non avere età negative
            $this->età = $nuovaEtà;
        } else {
            echo "L'età non può essere negativa!\n";
        }
    }

    // Metodo per mostrare i dettagli
    public function mostraDettagli() {
        echo "Nome: $this->nome, Età: $this->età, Codice: $this->codiceFamiglia\n";
    }
}

// Creo un oggetto
$persona = new Persona("Luca", 30);

// Accedo direttamente alla proprietà public
echo "Nome iniziale: " . $persona->nome . "\n"; // Output: Nome iniziale: Luca
$persona->nome = "Marco"; // Posso cambiarlo perché è public

// Uso il getter per leggere l'età (private)
echo "Età: " . $persona->getEtà() . "\n"; // Output: Età: 30

// Uso il setter per cambiare l'età
$persona->setEtà(25);
echo "Nuova età: " . $persona->getEtà() . "\n"; // Output: Nuova età: 25

// Provo a impostare un'età negativa
$persona->setEtà(-5); // Output: L'età non può essere negativa!

// Mostro i dettagli
$persona->mostraDettagli(); // Output: Nome: Marco, Età: 25, Codice: ABC123

// Errore se provo ad accedere direttamente a $età o $codiceFamiglia
// $persona->età = 10; // Errore: $età è private!
?>
```

**Come ricordarlo**

• Classe: Il progetto della tua "macchina" (es. Persona).

• Costruttore: La fabbrica che monta la macchina con i pezzi iniziali.

• public: Finestrini aperti, tutti vedono e toccano.

• private: Cassaforte, solo la classe ha la chiave.

• protected: Cassetto di famiglia, classi "parenti" possono aprirlo.

• getter: "Fammi vedere!" (leggi una proprietà).

• setter: "Cambia questo!" (modifica con regole).

Pensa alla classe come a una persona con segreti (private), cose condivise con la famiglia (protected) e cose visibili a tutti (public). Getter e setter sono i suoi "portavoce".
