In PHP, quando usi **PDO (PHP Data Objects)** per parlare con un database (tipo MySQL), hai due modi principali per fare delle query (domande al database): **query()** e **prepare()** con **execute().** Sono come due approcci diversi per ordinare una pizza: uno è veloce ma meno sicuro, l’altro è più controllato e protetto.

• **query()**: È il modo rapido. Mandi una query completa al database in un colpo solo e ottieni subito il risultato. Va bene per cose semplici, ma se usi dati inseriti dall’utente (tipo un nome o un’età), rischi che qualcuno "imbrogli" il sistema (SQL injection).

• **prepare()** + **execute()**: È il modo sicuro. Prima prepari la query con dei "buchi" (placeholder), poi ci metti i dati separatamente e la esegui. È perfetto quando i dati vengono dall’utente, perché evita problemi di sicurezza.

In breve:
• **query()** = veloce, ma rischioso con dati esterni.
• **prepare()/execute()** = più sicuro e controllato, ideale per dati variabili.

**Esempio pratico**

Immagina di voler cercare utenti in un database in base al loro nome.

1. Usare **query()** (semplice ma pericoloso con input esterni)

```php

<?php
$pdo = new PDO("mysql:host=localhost;dbname=mio_db", "utente", "password");

// Query diretta con un nome fisso
$nome = "Marco"; // Se fosse un input utente, rischi SQL injection!
$result = $pdo->query("SELECT * FROM utenti WHERE nome = '$nome'");

while ($row = $result->fetch()) {
echo "Trovato: " . $row["nome"] . ", età: " . $row["età"] . "\n";
}
// Output (se c’è Marco): Trovato: Marco, età: 25
?>
```

**Problema:** Se $nome fosse **"Marco'; DROP TABLE utenti; --"**, potrebbe distruggere il database!

2. Usare **prepare() e execute()** (sicuro)

```php

<?php
$pdo = new PDO("mysql:host=localhost;dbname=mio_db", "utente", "password");

// Preparo la query con un placeholder (?)
$stmt = $pdo->prepare("SELECT * FROM utenti WHERE nome = ?");

// Inserisco il dato separatamente e la eseguo
$nome = "Marco"; // Anche se fosse un input pericoloso, PDO lo "pulisce"
$stmt->execute([$nome]);

while ($row = $stmt->fetch()) {
    echo "Trovato: " . $row["nome"] . ", età: " . $row["età"] . "\n";
}
// Output: Trovato: Marco, età: 25

// Anche con input "cattivo" non fa danni
$nome_pericoloso = "Marco'; DROP TABLE utenti; --";
$stmt->execute([$nome_pericoloso]); // PDO neutralizza il pericolo
?>
```

3. Variante con **placeholder nominativi**
   Puoi anche usare nomi invece di ?, tipo :nome:

```php

$stmt = $pdo->prepare("SELECT * FROM utenti WHERE nome = :nome");
$stmt->execute(["nome" => "Marco"]);
```

**Come ricordarlo**

• **query():** "Fai tutto subito!" – veloce, ma non fidarti con dati dall’utente.

• **prepare()/execute():** "Prima prepara, poi metti i dati e vai!" – sicuro, anche con input strani.

Pensa a query() come ordinare una pizza già pronta, e a prepare()/execute() come dare gli ingredienti uno per uno al pizzaiolo per farla sicura e su misura.
