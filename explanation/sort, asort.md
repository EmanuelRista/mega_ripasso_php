**sort:** Ordina un array in ordine crescente e resetta gli indici numerici. È come dire: "Metti in ordine e ricomincia da zero!"

**asort:** Ordina un array in ordine crescente ma mantiene gli indici originali (utile per array associativi). È come dire: "Metti in ordine ma non toccare le chiavi!"

Esempio:

```php
// sort - ordina e resetta indici
$numeri = [3, 1, 4];
sort($numeri);
print_r($numeri); // Array([0] => 1 [1] => 3 [2] => 4)

// asort - ordina e tiene gli indici
$frutta = ["b" => "banana", "a" => "arancia", "c" => "ciliegia"];
asort($frutta);
print_r($frutta); // Array([a] => arancia [b] => banana [c] => ciliegia)
```
