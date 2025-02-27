**str_replace, strstr, strpos, str_split**

- **str_replace**: Sostituisce una parte di una stringa con un’altra. È come dire: "Cambiami questa parola!"
- **strstr**: Trova la prima occorrenza di una sottostringa e restituisce tutto da lì in poi. È come dire: "Trovami questo e dammi il resto!"
- **strpos**: Trova la posizione (numero) della prima occorrenza di una sottostringa. È come dire: "Dove sta questo?"
- **str_split**: Divide una stringa in un array di pezzetti. È come dire: "Tagliami a fettine!"

**Esempio:**

php

```$testo = "Ciao Mondo";

// str_replace - sostituisce

echo str_replace("Mondo", "Amici", $testo); // "Ciao Amici"

// strstr - trova e restituisce da lì

echo strstr($testo, "Mondo"); // "Mondo"

// strpos - trova posizione

echo strpos($testo, "M"); // 5 (parte da 0)

// str_split - divide in array

print_r(str_split($testo, 2)); // Array(\[0\] => Ci \[1\] => ao \[2\] => Mo \[3\] => nd \[4\] => o)
```
