**PDO**

Cos’è PDO?

PDO sta per PHP Data Objects. È una libreria integrata in PHP che serve a connettersi e lavorare con i database (come MySQL, ma anche altri come PostgreSQL o SQLite) in modo sicuro e standardizzato.

Perché usiamo PDO?

1. Sicurezza: PDO aiuta a prevenire attacchi come l’SQL Injection, perché separa i dati dal codice SQL usando i "prepared statements" (lo vedremo più avanti quando faremo query).

2. Flessibilità: Funziona con diversi tipi di database, quindi se un giorno cambi da MySQL a un altro sistema, il codice cambia poco.

3. Semplicità: Ti dà un modo uniforme per fare query, recuperare dati e gestire errori.

Come funziona nel nostro caso?

Nel file config.php, usiamo PDO per stabilire una connessione al database MySQL. Ecco cosa fa ogni parte del codice che ti ho dato:

• Questa riga crea la connessione:

```php
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
```

o "mysql:host=$host;dbname=$db": Dice a PDO che vogliamo usare MySQL, su quale host (localhost) e quale database (bitpost).

o $user e $pass: Sono le credenziali per accedere (nel tuo caso root e '' con XAMPP).

o $pdo: È l’oggetto che rappresenta la connessione. Lo useremo poi per fare query.

**Gestione degli errori:**

```php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
```

o Questo dice a PDO: "Se c’è un problema, lancia un’eccezione" (un errore che possiamo catturare con try/catch). Così sappiamo subito se qualcosa va storto.
