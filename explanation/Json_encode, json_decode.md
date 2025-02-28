**JSON** è un modo leggero per salvare e scambiare dati, come una lista della spesa scritta in un formato che sia PHP che altri linguaggi (tipo JavaScript) capiscono. È più semplice di XML, ma fa un lavoro simile. Queste funzioni ti aiutano a trasformare dati PHP in JSON e viceversa.

• **json_encode:** Prende un array o un oggetto PHP e lo trasforma in una stringa JSON. È come mettere i tuoi dati in una scatola pronta per essere spedita.

• **json_decode:** Prende una stringa JSON e la trasforma in qualcosa che PHP può usare (array o oggetto). È come aprire la scatola e tirare fuori i dati.

**Esempio pratico**

Immagina di avere una lista di libri in PHP e di volerla trasformare in JSON per condividerla, poi di riaprirla.

```php

<?php
// 1. Creo un array PHP con dei libri
$libri = [
    ["titolo" => "Il Signore degli Anelli", "autore" => "Tolkien"],
    ["titolo" => "Harry Potter", "autore" => "Rowling"]
];

// 2. Uso json_encode per trasformarlo in JSON
$json = json_encode($libri);
echo "Dati in JSON: $json\n";
// Output: Dati in JSON: [{"titolo":"Il Signore degli Anelli","autore":"Tolkien"},{"titolo":"Harry Potter","autore":"Rowling"}]

// 3. Salvo il JSON in un file (opzionale)
file_put_contents("libri.json", $json);

// 4. Riapro il JSON con json_decode
$json_da_file = file_get_contents("libri.json");
$array_ritornato = json_decode($json_da_file, true); // 'true' lo fa tornare come array, non oggetto
print_r($array_ritornato);
// Output:
// Array
// (
//     [0] => Array
//         (
//             [titolo] => Il Signore degli Anelli
//             [autore] => Tolkien
//         )
//     [1] => Array
//         (
//             [titolo] => Harry Potter
//             [autore] => Rowling
//         )
// )

// 5. Accedo a un dato specifico
echo "Primo libro: " . $array_ritornato[0]["titolo"] . "\n";
// Output: Primo libro: Il Signore degli Anelli
?>
```

**Come ricordarlo**

• **json_encode:** "Codifica i miei dati PHP in JSON!" (da PHP a stringa).

• **json_decode:** "Decodifica questo JSON in PHP!" (da stringa a PHP).

Pensa a JSON come a un linguaggio universale: json_encode traduce dal PHP, json_decode ritraduce in PHP.
