**Array, array_push, unset**

**Creare un Array**

**Cos’è un array?**  
Un array è come una lista della spesa: una scatola dove metti più cose (numeri, parole, ecc.) e ogni cosa ha un posto (un "indice", che parte da 0).

**Come si fa?**  
Puoi usare due modi: la parola array() o le parentesi quadre \[\].

**Esempio semplice con** array()**:**

```php

$frutta = array("mela", "banana", "pera");

echo $frutta\[1\];
```

**Risultato:** banana. Perché? L’indice 1 è il secondo elemento (si parte da 0: mela=0, banana=1, pera=2).

**Esempio con** \[\]**:**

```php

$frutta = \["mela", "banana", "pera"\];

echo $frutta\[0\];
```

**Risultato:** mela. Stessa cosa, ma più corto e moderno.

**Array con chiavi personalizzate:**

```php

$persona = \[

"nome" => "Marco",

"età" => 30

\];

echo $persona\["nome"\];
```

**Risultato:** Marco. Qui usi "nome" come chiave invece di numeri.

array_push

**Cos’è?**  
array_push è come aggiungere un oggetto in fondo alla tua lista della spesa. Serve a mettere nuovi elementi alla fine di un array.

**Come si usa?**  
Scrivi array_push(), metti l’array e poi il valore (o valori) da aggiungere.

**Esempio semplice:**

```php

$frutta = \["mela", "banana"\];

array_push($frutta, "pera");

print_r($frutta);
```

**Risultato:**

Array

(

\[0\] => mela

\[1\] => banana

\[2\] => pera

)

La "pera" è stata aggiunta in fondo.

**Aggiungere più cose:**

```php

$frutta = \["mela"\];

array_push($frutta, "banana", "pera");

print_r($frutta);
```

**Risultato:**

Array

(

\[0\] => mela

\[1\] => banana

\[2\] => pera

)

**Alternativa:** Puoi anche usare \[\] per aggiungere:

```php

$frutta\[\] = "pera";
```

Fa lo stesso di array_push, ma è più veloce per un solo elemento.

unset

**Cos’è?**  
unset è come cancellare una riga dalla tua lista della spesa. Serve a rimuovere un elemento dall’array (o anche tutta la variabile).

**Come si usa?**  
Scrivi unset() e dentro metti l’array con l’indice (o la chiave) da eliminare.

**Esempio semplice:**

```php

$frutta = \["mela", "banana", "pera"\];

unset($frutta\[1\]);

print_r($frutta);
```

**Risultato:**

Array

(

\[0\] => mela

\[2\] => pera

)

La "banana" (indice 1) è sparita. Nota che gli indici non si riorganizzano da soli.

**Eliminare una chiave:**

```php

$persona = \[

"nome" => "Marco",

"età" => 30

\];

unset($persona\["età"\]);

print_r($persona);
```

**Risultato:**

Array

(

\[nome\] => Marco

)

L’"età" è stata cancellata.

**Cancellare tutto l’array:**

```php

$frutta = \["mela", "banana"\];

unset($frutta);
```

Ora $frutta non esiste più!

**Differenze in breve**

- **Creare array:** Usa \[\] o array() per fare la tua lista.
- array_push**:** Aggiunge roba in fondo all’array.
- unset**:** Toglie un elemento (o tutto l’array) come se non fosse mai esistito.

**Trucco:**

- Dopo unset, gli indici numerici restano "bucati" (es. salta da 0 a 2). Se vuoi riorganizzarli, usa array_values():

```php

$frutta = \["mela", "banana", "pera"\];

unset($frutta\[1\]);

$frutta = array_values($frutta);

print_r($frutta);
```

**Risultato:**

Array

(

\[0\] => mela

\[1\] => pera

)
