**Scandir, is_dir, is_file, file_exists, DirectoryIterator**

Questi sono strumenti di PHP per lavorare con file e cartelle. Immagina di avere una scatola piena di cose (file e cartelle) e di voler sapere cosa c’è dentro o controllare se qualcosa esiste. Ecco cosa fa ognuno:

• **scandir:** Ti dà una lista di tutto quello che c’è in una cartella, come un inventario. Ti restituisce un array con i nomi di file e cartelle.

• **is_dir:** Controlla se una cosa è una cartella. Risponde sì (true) o no (false).

• **is_file:** Controlla se una cosa è un file (non una cartella). Anche qui, sì o no.

• **file_exists:** Controlla se qualcosa (file o cartella) esiste davvero nel posto che gli dici.

• **DirectoryIterator:** È come un esploratore più sofisticato. Ti permette di passare in rassegna file e cartelle uno per uno, con più dettagli rispetto a scandir.

**Esempio pratico**

Mettiamo che hai una cartella chiamata "miei_file" con dentro un file "foto.jpg" e una sottocartella "documenti". Ecco come usare questi strumenti:

```php

<?php
// 1. Scandir: lista tutto nella cartella "miei_file"
$contenuto = scandir("miei_file");
print_r($contenuto); // Output: Array ( [0] => . [1] => .. [2] => foto.jpg [3] => documenti )

// 2. is_dir: è una cartella?
$è_cartella = is_dir("miei_file/documenti");
echo $è_cartella ? "Sì, è una cartella!" : "No, non lo è"; // Output: Sì, è una cartella!

// 3. is_file: è un file?
$è_file = is_file("miei_file/foto.jpg");
echo $è_file ? "Sì, è un file!" : "No, non lo è"; // Output: Sì, è un file!

// 4. file_exists: esiste davvero?
$esiste = file_exists("miei_file/foto.jpg");
echo $esiste ? "Esiste!" : "Non esiste"; // Output: Esiste!

// 5. DirectoryIterator: esplora la cartella con più dettagli
$iterator = new DirectoryIterator("miei_file");
foreach ($iterator as $elemento) {
    if (!$elemento->isDot()) { // Salta "." e ".."
        echo $elemento->getFilename() . " - " . ($elemento->isDir() ? "Cartella" : "File") . "\n";
    }
}
// Output:
// foto.jpg - File
// documenti - Cartella
?>
```

**Come ricordarlo**

Pensa a scandir come a un elenco rapido, is_dir e is_file come domande "che cos’è?", file_exists come un "c’è o non c’è?", e DirectoryIterator come un tour guidato della tua cartella. Semplice, no?
