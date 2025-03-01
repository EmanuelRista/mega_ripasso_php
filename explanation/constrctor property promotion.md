**Constructor property promotion**

Il constructor property promotion (promozione delle proprietà nel costruttore) è una scorciatoia introdotta in PHP 8.0 che ti permette di dichiarare e assegnare proprietà direttamente nei parametri del costruttore. È come dire "facciamo tutto in un colpo solo" invece di scrivere le proprietà una per una nella classe e poi assegnarle nel costruttore. Risparmia righe di codice e rende tutto più pulito.

• Normalmente, devi:

1. Dichiarare le proprietà nella classe (es. public $nome;).

2. Ripetere i nomi nel costruttore per assegnarle (es. $this->nome = $nome;).
   • Con questa novità, metti la visibilità (public, private, protected) e il tipo direttamente nei parametri del costruttore, e PHP fa il resto automaticamente.

   Esempio pratico
   Confrontiamo il modo vecchio e quello nuovo con una classe "Studente".

3. **Modo vecchio (pre-PHP 8.0)**

```php

<?php
class Studente {
    public string $nome;
    private int $età;
    protected float $mediaVoti;

    public function __construct(string $nome, int $età, float $mediaVoti) {
        $this->nome = $nome;
        $this->età = $età;
        $this->mediaVoti = $mediaVoti;
    }

    public function mostraDettagli() {
        return "Nome: $this->nome, Età: $this->età, Media: $this->mediaVoti";
    }
}

$studente = new Studente("Luca", 20, 8.5);
echo $studente->mostraDettagli() . "\n";
// Output: Nome: Luca, Età: 20, Media: 8.5
?>
```

2. **Modo nuovo con constructor property promotion (PHP 8.0+)**

```php

<?php
class Studente {
    // Dichiaro e assegno tutto nel costruttore!
    public function __construct(
        public string $nome,
        private int $età,
        protected float $mediaVoti
    ) {
        // Non serve più fare $this->nome = $nome, è automatico!
    }

    public function mostraDettagli() {
        return "Nome: $this->nome, Età: $this->età, Media: $this->mediaVoti";
    }
}

$studente = new Studente("Luca", 20, 8.5);
echo $studente->mostraDettagli() . "\n";
// Output: Nome: Luca, Età: 20, Media: 8.5
?>
```

**Dettagli utili**

• Come funziona: Metti public, private o protected (e opzionalmente il tipo) davanti ai parametri del costruttore, e PHP li trasforma in proprietà tipizzate automaticamente.

• Valori di default: Puoi usarli (es. public string $nome = "Senza nome").

• Solo costruttore: Questa magia funziona solo lì, non in altri metodi.

• Misto: Puoi combinare parametri "promossi" con parametri normali (es. public string $nome, $altroParametro).

• Vantaggio: Meno codice ripetitivo, più leggibilità.

**Esempio con default e misto**

```php

<?php
class Persona {
    public function __construct(
        public string $nome = "Anonimo",
        private int $età,
        $extra = "qualcosa" // Non diventa proprietà
    ) {
        echo "Extra: $extra\n";
    }
}

$persona = new Persona("Marco", 25, "test");
echo "Nome: " . $persona->nome . "\n";
// Output:
// Extra: test
// Nome: Marco
?>
```

**Come ricordarlo**

• Constructor property promotion: "Unisco dichiarazione e assegnazione nel costruttore!"

• Scrivi public string $nome direttamente nei parametri, e salti il $this->nome = $nome.

• È una scorciatoia per rendere il codice più snello.

Pensa a questa feature come a un "tutto incluso": invece di montare i pezzi uno per uno, il costruttore te li dà già pronti.
