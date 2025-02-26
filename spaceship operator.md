**Operatore Spaceship**

**Operatore Spaceship (**&lt;=&gt;**)**

**Cos’è?**  
L’operatore spaceship (&lt;=&gt;) è un simbolo che sembra una navicella spaziale e serve a confrontare due valori in un colpo solo. Ti dice se il primo è minore, uguale o maggiore del secondo, restituendo un numero semplice. È stato introdotto in PHP 7 ed è super comodo per ordinare cose.

**Come funziona?**  
Confronta due valori e restituisce:

- \-1 se il primo è **minore** del secondo.
- 0 se sono **uguali**.
- 1 se il primo è **maggiore** del secondo.

**Esempio semplice:**

php

$a = 5;

$b = 10;

$result = $a &lt;=&gt; $b;

echo $result;

**Risultato:** -1. Perché 5 è minore di 10.

**Altro esempio:**

php

$a = 7;

$b = 7;

$result = $a &lt;=&gt; $b;

echo $result;

**Risultato:** 0. Perché 7 è uguale a 7.

**Un altro ancora:**

php

$a = 15;

$b = 10;

$result = $a &lt;=&gt; $b;

echo $result;

**Risultato:** 1. Perché 15 è maggiore di 10.

**Con stringhe**

Funziona anche con parole, confrontandole in ordine alfabetico (come un dizionario).

**Esempio:**

php

$parola1 = "banana";

$parola2 = "mela";

$result = $parola1 &lt;=&gt; $parola2;

echo $result;

**Risultato:** -1. Perché "banana" viene prima di "mela" in ordine alfabetico.

**Altro esempio:**

php

$parola1 = "pizza";

$parola2 = "pasta";

$result = $parola1 &lt;=&gt; $parola2;

echo $result;

**Risultato:** 1. Perché "pizza" viene dopo "pasta".

**Con array o cose strane**

Se confronti tipi diversi (es. numero e stringa), PHP prova a fare il meglio, ma meglio non mischiare troppo per evitare confusione.

**Esempio pratico:**

php

echo 5 &lt;=&gt; "5";

**Risultato:** 0. PHP converte la stringa "5" in numero e li vede uguali.

**Perché usarlo?**

È utilissimo per **ordinare** liste con funzioni come usort. Invece di scrivere mille if, l’operatore spaceship fa tutto in una riga.

**Esempio di ordinamento:**

php

$numeri = \[3, 1, 4, 1, 5\];

usort($numeri, function($a, $b) {

return $a &lt;=&gt; $b;

});

print_r($numeri);

**Risultato:**

Array

(

\[0\] => 1

\[1\] => 1

\[2\] => 3

\[3\] => 4

\[4\] => 5

)

Ordina dal più piccolo al più grande!

**In breve**

- &lt;=&gt;**:** Confronta due valori e ti dà:
  - \-1 (minore),
  - 0 (uguale),
  - 1 (maggiore).
- Funziona con numeri, stringhe e altro.
- Perfetto per ordinare o decidere "chi vince" in un confronto.
