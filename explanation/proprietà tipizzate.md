**Typed properties**

Le typed properties (proprietà tipizzate) sono una novità introdotta in PHP 7.4 che ti permette di dire esattamente che tipo di dato può contenere una proprietà in una classe. È come mettere un’etichetta su una scatola: "qui dentro solo numeri" o "solo stringhe". Questo rende il codice più sicuro e facile da capire, perché eviti errori tipo mettere un testo dove ci vuole un numero.

• Prima di PHP 7.4, potevi specificare i tipi solo per i parametri dei metodi o i valori restituiti, ma non per le proprietà.

• Con le typed properties, aggiungi il tipo (es. int, string, float, ecc.) prima del nome della proprietà.

• Supportano tipi base (int, string, bool, ecc.), classi, interfacce e anche ?tipo per valori che possono essere null.

• Se provi a mettere un dato del tipo sbagliato, PHP ti dà un errore.

**Esempio pratico**

Creiamo una classe "Persona" con proprietà tipizzate per nome, età e altezza.

```php

<?php
class Persona {
    // Proprietà tipizzate
    public string $nome;      // Deve essere una stringa
    public int $età;          // Deve essere un numero intero
    public ?float $altezza;   // Può essere un numero decimale o null
    public bool $èStudente;   // Deve essere true o false

    // Costruttore
    public function __construct(string $nome, int $età, ?float $altezza, bool $èStudente) {
        $this->nome = $nome;
        $this->età = $età;
        $this->altezza = $altezza;
        $this->èStudente = $èStudente;
    }

    // Metodo per mostrare i dettagli
    public function mostraDettagli() {
        $studente = $this->èStudente ? "sì" : "no";
        return "Nome: $this->nome, Età: $this->età, Altezza: $this->altezza m, Studente: $studente";
    }
}

// Creo un oggetto
$persona = new Persona("Luca", 25, 1.75, true);

echo $persona->mostraDettagli() . "\n";
// Output: Nome: Luca, Età: 25, Altezza: 1.75 m, Studente: sì

// Posso usare null per altezza perché è ?float
$persona2 = new Persona("Sara", 30, null, false);
echo $persona2->mostraDettagli() . "\n";
// Output: Nome: Sara, Età: 30, Altezza:  m, Studente: no

// Errore se provo a usare un tipo sbagliato
// $persona->età = "trenta"; // Fatal error: Uncaught TypeError: Typed property must be int
// $persona->nome = 123;     // Fatal error: Uncaught TypeError: Typed property must be string
?>
```
