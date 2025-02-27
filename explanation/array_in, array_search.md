**Array_in, array_search**

in_array

**Cos’è?**  
in_array è come un cercatore: ti dice se un certo valore è dentro un array oppure no. È tipo chiedere "Ehi, c’è la pizza nella lista della spesa?". Ti risponde con un sì (vero) o un no (falso).

**Come si usa?**  
Scrivi in_array() e metti due cose dentro le parentesi:

1. Il valore da cercare (l’"ago").
2. L’array dove cercare (il "pagliaro").

Restituisce true (vero) se lo trova, false (falso) se non c’è.

**Esempio semplice:**

php

$frutta = \["mela", "banana", "pera"\];

$cerca = "banana";

if (in_array($cerca, $frutta)) {

echo "Sì, c’è!";

} else {

echo "No, non c’è.";

}

**Risultato:** Sì, c’è!. Perché "banana" è nell’array.

**Esempio con valore assente:**

php

$frutta = \["mela", "banana", "pera"\];

$cerca = "pizza";

if (in_array($cerca, $frutta)) {

echo "Sì, c’è!";

} else {

echo "No, non c’è.";

}

**Risultato:** No, non c’è.. "Pizza" non è nella lista.

**Con numeri:**

php

$numeri = \[1, 5, 10\];

if (in_array(5, $numeri)) {

echo "Il 5 è nella lista!";

}

**Risultato:** Il 5 è nella lista!.

**Attenzione ai tipi**

Per default, in_array non è troppo pignolo: considera "5" (stringa) uguale a 5 (numero). Ma puoi dirgli di essere più severo con il terzo parametro opzionale: true.

**Esempio senza severità:**

php

$numeri = \[1, 5, 10\];

if (in_array("5", $numeri)) {

echo "Trovato!";

}

**Risultato:** Trovato!. Anche se "5" è una stringa e 5 è un numero, li considera uguali.

**Esempio con severità (strict mode):**

```php

$numeri = \[1, 5, 10\];

if (in_array("5", $numeri, true)) {

echo "Trovato!";

} else {

echo "Non trovato.";

}
```

**Risultato:** Non trovato.. Con true, controlla anche il tipo, e "5" (stringa) non è uguale a 5 (numero).

**Con array associativi**

Funziona anche se l’array ha chiavi personalizzate, ma cerca solo nei **valori**, non nelle chiavi.

**Esempio:**

```php

$persona = \[

"nome" => "Marco",

"età" => 30

\];

if (in_array("Marco", $persona)) {

echo "Marco è qui!";

}
```

**Risultato:** Marco è qui!.

**In breve**

- in_array(valore, array)**:** Cerca senza pignoleria (stringhe e numeri simili sono ok).
- in_array(valore, array, true)**:** Cerca con pignoleria (controlla anche il tipo).
- Restituisce: true (trovato) o false (non trovato).

**Trucco:**  
Se vuoi sapere DOVE si trova il valore (non solo SE c’è), usa array_search() invece, che ti dà l’indice.
