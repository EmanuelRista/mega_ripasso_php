**array_pop, array_shift, array_push, array_unshift**

- **array_pop**: Toglie e restituisce l’ultimo elemento di un array. È come dire: "Prendi l’ultimo e via!"
- **array_shift**: Toglie e restituisce il primo elemento di un array (gli altri si spostano). È come dire: "Prendi il primo e via!"
- **array_push**: Aggiunge uno o più elementi alla fine di un array. È come dire: "Metti in fondo!"
- **array_unshift**: Aggiunge uno o più elementi all’inizio di un array (gli altri si spostano). È come dire: "Metti davanti!"

**Esempio:**

```php

$lista = ["pane", "latte", "uova"];

// array_pop - ultimo via

echo array_pop($lista); // "uova" ($lista ora è \["pane", "latte"\])

// array_shift - primo via

echo array_shift($lista); // "pane" ($lista ora è \["latte"\])

// array_push - aggiungi in fondo

array_push($lista, "zucchero", "sale");

print_r($lista); // Array(\[0\] => latte \[1\] => zucchero \[2\] => sale)

// array_unshift - aggiungi davanti

array_unshift($lista, "acqua");

print_r($lista); // Array(\[0\] => acqua \[1\] => latte \[2\] => zucchero \[3\] => sale)
```
