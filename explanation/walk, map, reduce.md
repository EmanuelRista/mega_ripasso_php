**array_walk, array_map, array_reduce**

- **array_walk**: Passa su ogni elemento di un array e gli applica una funzione che tu decidi. È come dire: "Fai qualcosa a tutti, uno per uno."
- **array_map**: Passa su ogni elemento e crea un nuovo array con i risultati della funzione. Risponde: "Trasformami tutto e dammi un nuovo array."
- **Equivalente di reduce (array_reduce)**: Sì, esiste! Riduce un array a un singolo valore usando una funzione. È come dire: "Somma, combina, fai quello che vuoi, ma dammi un risultato unico."

**Esempio:**

php

$numeri = \[1, 2, 3\];

// array_walk - modifica o usa ogni elemento

array_walk($numeri, function($val) {

echo $val \* 2 . " "; // 2 4 6

});

// array_map - crea un nuovo array

$nuovo = array_map(function($val) {

return $val \* 2;

}, $numeri);

print_r($nuovo); // Array(\[0\] => 2 \[1\] => 4 \[2\] => 6)

// array_reduce - riduce a un valore

$somma = array_reduce($numeri, function($carry, $val) {

return $carry + $val;

}, 0); // 0 è il valore iniziale

echo $somma; // 6
