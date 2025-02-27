Cos’è **try/catch?**

Try e catch sono un meccanismo in PHP (e in molti altri linguaggi) per gestire gli errori in modo controllato. Serve a "provare" a eseguire del codice che potrebbe fallire e, se succede un problema, "catturare" l’errore senza che il programma si blocchi in modo brutto.

• **try:** Dentro questo blocco metti il codice che vuoi eseguire, ma che potrebbe causare un errore.

• **catch:** Se qualcosa va storto nel blocco try, il programma salta nel blocco catch per gestire l’errore.

Come funziona nel nostro caso?

Nel file config.php, usiamo try/catch per connetterci al database con PDO. Ecco il codice che abbiamo:

```php
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}
```

Spiegazione passo passo

1. **Blocco try:**

o Qui "proviamo" a fare la connessione al database con **new PDO(...)**.

o Se tutto va bene (es. il database esiste e le credenziali sono corrette), il codice dentro try si esegue e si passa oltre.

o Ma se c’è un problema (es. il database bitpost non esiste ancora), PDO lancia un’eccezione (un tipo di errore).

2. **Blocco catch:**

o Se viene lanciata un’eccezione nel try, il programma salta subito qui.

o **PDOException $e:** PDOException è il tipo di eccezione che PDO usa per gli errori di database, e $e è l’oggetto che contiene i dettagli dell’errore.

o **die("Errore di connessione: " . $e->getMessage());:** Mostra un messaggio (es. "Errore di connessione: No such database") e ferma il programma.

Esempio pratico

Immagina che il database bitpost non esista ancora. Se esegui questo codice:

• Nel try, new PDO(...) fallisce perché non trova il database.

• Salta al catch e $e->getMessage() potrebbe restituire qualcosa come "Unknown database 'bitpost'".

• Vedrai a schermo: "Errore di connessione: Unknown database 'bitpost'" e lo script si ferma.

Se invece il database esiste, il try va a buon fine e il catch viene ignorato.

Perché usarlo?

• Senza try/catch, un errore farebbe crashare il programma con un messaggio confuso per l’utente.

• Con try/catch, puoi gestire l’errore in modo elegante, mostrando un messaggio chiaro o magari provando a fare qualcos’altro.

In breve

• try: "Prova questo, potrebbe fallire."

• catch: "Se fallisce, fai questo."
