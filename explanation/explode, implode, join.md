**explode, implode, join**

- **explode**: Divide una stringa in un array usando un separatore. È come dire: "Spezzami dove vedi questo!"
- **implode**: Unisce un array in una stringa usando un separatore. È come dire: "Incolla tutto insieme!"
- **join**: È uguale a **implode**, solo un altro nome (un alias). Stessa cosa: "Metti insieme!"

**Esempio:**

```php

// explode - da stringa ad array

$testo = "pane,latte,uova";

$array = explode(",", $testo);

print_r($array); // Array(\[0\] => pane \[1\] => latte \[2\] => uova)

// implode - da array a stringa

$nuovo = implode(" - ", $array);

echo $nuovo; // "pane - latte - uova"

// join - stessa cosa di implode

$stesso = join(" + ", $array);

echo $stesso; // "pane + latte + uova"
```
