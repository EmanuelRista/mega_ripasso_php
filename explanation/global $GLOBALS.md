**1. global**
Con global dici alla funzione: "Ehi, usa la versione della variabile che sta fuori, non crearne una nuova!". Senza global, la funzione penserebbe che stai creando una variabile diversa.
Esempio:

```php

$numero = 10; // Variabile globale

function aggiungi() {
    global $numero; // Dico che voglio usare quella globale
    $numero = $numero + 5;
}

aggiungi();
echo $numero; // Stampa 15
```

Qui, grazie a global, la funzione modifica la variabile $numero che sta fuori.

**2. $GLOBALS**
$GLOBALS è un "super array" che contiene tutte le variabili globali. Puoi usarlo per accedere a una variabile globale senza dover dichiarare global. È come un cassetto dove trovi tutto.

Esempio:

```php

$numero = 10; // Variabile globale

function aggiungi() {
    $GLOBALS['numero'] = $GLOBALS['numero'] + 5; // Accedo direttamente
}

aggiungi();
echo $numero; // Stampa 15
```

Anche qui, $numero viene modificato, ma usando $GLOBALS invece di global.
Differenza in breve
global: devi dichiararlo prima di usare la variabile.

$GLOBALS: puoi usarlo direttamente senza dichiarazione, ma scrivi un po' di più.
