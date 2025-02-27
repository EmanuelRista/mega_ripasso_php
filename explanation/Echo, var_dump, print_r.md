**Echo, var_dump, print_r**

**1\. Echo**

**Cos'è?**  
Echo è un comando di PHP che serve a "stampare" qualcosa sullo schermo, come un testo o un numero. È tipo quando dici a voce alta quello che pensi, ma qui lo scrivi sulla pagina web.

**Come si usa?**  
Scrivi echo seguito da quello che vuoi far vedere. Non è una funzione vera e propria, quindi non servono parentesi (anche se puoi metterle, se vuoi).

**Esempio semplice:**

```php

echo "Ciao, mondo!";
```

**Risultato:** Sullo schermo appare "Ciao, mondo!".

**Altro esempio:**

```php

$nome = "Marco";

echo "Ciao, " . $nome;
```

**Risultato:** "Ciao, Marco". Il punto (.) serve a unire pezzi di testo.

**2\. var_dump**

**Cos'è?**  
Var_dump è come un detective: ti mostra tutto quello che c’è dentro una variabile, tipo il suo valore e il suo "tipo" (es. è un numero? Una stringa?). È utilissimo per capire cosa sta succedendo nel tuo codice quando qualcosa non torna.

**Come si usa?**  
Metti var_dump() e dentro le parentesi ci infili la variabile che vuoi controllare.

**Esempio semplice:**

```php

$numero = 42;

var_dump($numero);
```

**Risultato:** int(42). Significa che è un numero intero (integer) con valore 42.

**Altro esempio:**

```php

$array = \["pizza", "pasta"\];

var_dump($array);
```

**Risultato:** array(2) { \[0\]=> string(5) "pizza" \[1\]=> string(5) "pasta" }. Ti dice che è un array con 2 elementi, e ti mostra ogni elemento con il suo tipo (stringa) e lunghezza.

**3\. print_r**

**Cos'è?**  
Print_r è simile a var_dump, ma è più "gentile": ti mostra il contenuto di una variabile (soprattutto array) in modo più leggibile per gli umani. È meno dettagliato di var_dump, ma più carino da guardare.

**Come si usa?**  
Scrivi print_r() e dentro le parentesi metti la variabile. Se vuoi, puoi avvolgerlo in &lt;pre&gt; per renderlo ancora più chiaro.

**Esempio semplice:**

```php

$array = \["pizza", "pasta"\];

print_r($array);
```

**Risultato:**

Array

(

\[0\] => pizza

\[1\] => pasta

)

Vedi? È pulito e facile da leggere.

**Con &lt;pre&gt; per bellezza:**

```php

echo "&lt;pre&gt;";

print_r($array);

echo "&lt;/pre&gt;";
```

**Risultato:** Lo stesso di sopra, ma formattato meglio sul browser.

**Differenze in breve**

- **Echo:** Stampa testo semplice, veloce e diretto.
- **Var_dump:** Ti dà tutti i dettagli tecnici (tipo e valore), perfetto per debug.
- **Print_r:** Mostra array e robe complesse in modo leggibile, meno tecnico di var_dump.
