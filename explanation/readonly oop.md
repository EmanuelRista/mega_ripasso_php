**Readonly properties and classes**

Le readonly properties (proprietà di sola lettura) e le readonly classes (classi di sola lettura) sono funzionalità introdotte in PHP 8.1 e 8.2 per rendere alcune parti del codice "immutabili", cioè non modificabili dopo essere state impostate. È come scrivere qualcosa con un pennarello indelebile: una volta fatto, non lo cambi più.

• **Readonly properties:** Una proprietà marcata come readonly può essere impostata solo una volta (di solito nel costruttore) e poi diventa "bloccata". Perfetto per dati che non devono cambiare, come un ID o una data di nascita.

• **Readonly classes:** Una classe marcata come readonly fa sì che tutte le sue proprietà siano automaticamente readonly. È utile per creare oggetti immutabili dall’inizio alla fine.
Dettagli utili

• **Readonly properties (PHP 8.1+):**

    o Si dichiarano con readonly prima del tipo o della visibilità (es. readonly public string $nome).

    o Devono essere tipizzate (es. string, int, ecc.).

    o Puoi scriverci solo una volta, poi qualsiasi tentativo di modifica dà errore.

• **Readonly classes (PHP 8.2+):**

    o Scrivi readonly prima di class (es. readonly class Nome).

    o Tutte le proprietà sono implicitamente readonly, anche senza scriverlo.

    o Non puoi avere proprietà non tipizzate nella classe.

**Esempio pratico**

1. **Readonly properties (PHP 8.1+)**

```php

<?php
class Utente {
    // Proprietà readonly
    readonly public string $nome;
    readonly private int $id;

    public function __construct(string $nome, int $id) {
        $this->nome = $nome; // Ok, prima scrittura
        $this->id = $id;     // Ok, prima scrittura
    }

    public function getId() {
        return $this->id;
    }
}

$utente = new Utente("Luca", 123);
echo "Nome: " . $utente->nome . ", ID: " . $utente->getId() . "\n";
// Output: Nome: Luca, ID: 123

// Errore se provo a modificare
// $utente->nome = "Marco"; // Fatal error: Cannot modify readonly property
?>
```

2. **Con constructor property promotion (PHP 8.1+)**

```php

<?php
class Utente {
    public function __construct(
        readonly public string $nome,
        readonly private int $id
    ) {
        // Tutto fatto nei parametri!
    }

    public function getId() {
        return $this->id;
    }
}

$utente = new Utente("Sara", 456);
echo "Nome: " . $utente->nome . ", ID: " . $utente->getId() . "\n";
// Output: Nome: Sara, ID: 456
?>
```

3. **Readonly class (PHP 8.2+)**

```php

<?php
readonly class Punto {
    // Tutte le proprietà sono readonly automaticamente
    public float $x;
    public float $y;

    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function mostra() {
        return "Punto: ($this->x, $this->y)";
    }
}

$punto = new Punto(3.5, 4.2);
echo $punto->mostra() . "\n";
// Output: Punto: (3.5, 4.2)

// Errore se provo a modificare
// $punto->x = 5.0; // Fatal error: Cannot modify readonly property
?>
```

**Come ricordarlo**

• **readonly properties:** "Scrivi una volta, leggi sempre!"

    o Metti readonly prima della proprietà.

    o Perfetto per dati fissi come un codice fiscale.

• **readonly classes:** "Tutto bloccato, niente cambia!"

    o Scrivi readonly prima di class.

    o Ideale per oggetti immutabili come coordinate o configurazioni.

Pensa alle proprietà readonly come a un biglietto del treno già timbrato (non lo cambi più) e alle classi readonly come a una statua: bella, ma non la modifichi.
