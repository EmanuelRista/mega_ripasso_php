**array_key_exists:** Controlla se una chiave (o indice) esiste in un array. È come dire: "Questa chiave c’è o no?"

Esempio:

```php
$frutta = ["mela" => "rosso", "banana" => "giallo"];

// Controlla se la chiave esiste
echo array_key_exists("mela", $frutta) ? "Sì" : "No"; // "Sì"
echo array_key_exists("pera", $frutta) ? "Sì" : "No"; // "No"
```
