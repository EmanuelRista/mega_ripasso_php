**res parameters e func_get_args**

- **Rest parameters (**...**)**: Ti permette di prendere tutti i parametri "extra" passati a una funzione e metterli in un array. È come dire: "Dammi tutto quello che resta!"
- **func_get_args**: È una funzione vecchia scuola che restituisce un array con tutti i parametri passati, anche senza usare .... Risponde: "Che mi hai dato?"

**Esempio:**

php

// Rest parameters con ...

function somma(...$numeri) {

return array_sum($numeri);

}

echo somma(1, 2, 3, 4); // 10 - $numeri diventa \[1, 2, 3, 4\]

// func_get_args

function lista() {

$argomenti = func_get_args();

print_r($argomenti);

}

lista("pane", "latte", "uova"); // Array(\[0\] => pane \[1\] => latte \[2\] => uova)
