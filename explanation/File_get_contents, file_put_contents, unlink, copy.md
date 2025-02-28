Queste sono funzioni di PHP per lavorare con i file in modo più diretto rispetto a fopen e compagnia. È come avere dei superpoteri per leggere, scrivere, cancellare o copiare file senza troppi passaggi. Ecco cosa fanno:

• **file_get_contents:** Legge tutto il contenuto di un file e lo mette in una stringa. È come prendere un foglio e leggerlo tutto in un colpo solo.

• **file_put_contents:** Scrive qualcosa in un file. Basta dargli il testo e lui lo salva, senza bisogno di aprire e chiudere manualmente.

• **unlink: Cancella un file.** È come buttare via un foglio nel cestino.

• **copy:** Fa una copia di un file da un posto a un altro. Tipo fotocopiare un documento.

**Esempio pratico**

Immagina di voler creare un file, scriverci qualcosa, leggerlo, farne una copia e poi cancellare l’originale.

```php

<?php
// 1. Scrivo qualcosa in un file con file_put_contents
file_put_contents("nota.txt", "Devo studiare PHP oggi!");

// 2. Leggo il contenuto con file_get_contents
$contenuto = file_get_contents("nota.txt");
echo "Contenuto del file: $contenuto\n";
// Output: Contenuto del file: Devo studiare PHP oggi!

// 3. Copio il file in un altro chiamato "nota_copia.txt"
copy("nota.txt", "nota_copia.txt");
echo "File copiato con successo!\n";

// 4. Controllo il contenuto della copia
$contenuto_copia = file_get_contents("nota_copia.txt");
echo "Contenuto della copia: $contenuto_copia\n";
// Output: Contenuto della copia: Devo studiare PHP oggi!

// 5. Cancello il file originale con unlink
unlink("nota.txt");
echo "File originale cancellato!\n";

// Controllo se il file originale esiste ancora
if (!file_exists("nota.txt")) {
    echo "Infatti, nota.txt non c’è più!";
}
?>
```

**Come ricordarlo**

• **file_get_contents:** "Prendi tutto il testo!"

• **file_put_contents:** "Metti questo nel file!"

• **unlink:** "Via, cancellalo!"

• **copy:** "Fammi una copia!"

Sono come comandi veloci per gestire i file senza complicarti la vita.
