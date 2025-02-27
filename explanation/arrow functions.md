**arrow functions**

- **Arrow functions**: Sono funzioni anonime più corte e semplici, introdotte in PHP 7.4. Usano la sintassi fn(parametro) => espressione. È come dire: "Fammi una cosa veloce senza troppe righe!"

**Esempio:**

php

// Funzione normale

$normal = function($x) {

return $x \* 2;

};

// Arrow function

$arrow = fn($x) => $x \* 2;

echo $normal(5); // 10

echo $arrow(5); // 10

// Usata con array_map

$numeri = \[1, 2, 3\];

$risultato = array_map(fn($n) => $n \* 3, $numeri);

print_r($risultato); // Array(\[0\] => 3 \[1\] => 6 \[2\] => 9)
