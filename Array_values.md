**Array_values**

**Cos’è?**  
array_values è come un riordinatore di liste: prende un array e restituisce una versione con gli indici numerici consecutivi (0, 1, 2, ecc.), buttando via le chiavi personalizzate o i "buchi" negli indici. È utile quando hai cancellato qualcosa con unset e vuoi rimettere tutto in ordine.

**Come si usa?**  
Scrivi array_values() e dentro le parentesi metti l’array da riorganizzare. Ti dà un nuovo array con indici numerici puliti.

**Esempio semplice:**

php

$frutta = \["mela", "banana", "pera"\];

unset($frutta\[1\]); // Tolgo "banana"

print_r($frutta);

**Risultato:**

Array

(

\[0\] => mela

\[2\] => pera

)

Vedi il "buco"? L’indice salta da 0 a 2.

Ora usiamo array_values:

php

$frutta = array_values($frutta);

print_r($frutta);

**Risultato:**

Array

(

\[0\] => mela

\[1\] => pera

)

Gli indici sono di nuovo consecutivi: 0, 1. Tutto in ordine!

**Con chiavi personalizzate:**

php

$persona = \[

"nome" => "Marco",

"età" => 30,

"città" => "Roma"

\];

$lista = array_values($persona);

print_r($lista);

**Risultato:**

Array

(

\[0\] => Marco

\[1\] => 30

\[2\] => Roma

)

Le chiavi ("nome", "età", "città") spariscono, e i valori diventano una lista con indici numerici da 0 in poi.

**Perché usarlo?**

- Dopo aver usato unset per eliminare elementi, se vuoi indici senza buchi.
- Se hai un array con chiavi personalizzate e vuoi solo i valori in ordine numerico.
- Per rendere un array più semplice da scorrere (es. con un ciclo).

**Esempio pratico:**

php

$numeri = \[10 => "dieci", 20 => "venti", 30 => "trenta"\];

unset($numeri\[20\]); // Tolgo "venti"

print_r($numeri);

**Risultato:**

Array

(

\[10\] => dieci

\[30\] => trenta

)

Riordino con array_values:

php

$numeri = array_values($numeri);

print_r($numeri);

**Risultato:**

Array

(

\[0\] => dieci

\[1\] => trenta

)

**Differenza chiave**

- **Prima di** array_values**:** Gli indici possono essere sparsi o avere chiavi personalizzate.
- **Dopo** array_values**:** Solo indici numerici consecutivi (0, 1, 2, ecc.), senza chiavi.

**Nota:**  
Non modifica l’array originale a meno che non lo riassegni (come $frutta = array_values($frutta)). Se fai solo array_values($frutta) e non lo salvi, non cambia niente.
