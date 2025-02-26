**isset, empty, is_null**

- **isset**: Serve a controllare se una variabile esiste ed ha un valore (non nullo). Risponde: "Ce l’ho o no?"
- **empty**: Controlla se una variabile è vuota (es. "", 0, array vuoto) o non esiste. Risponde: "È vuota o inutile?"
- **is_null**: Controlla se una variabile è proprio NULL, cioè non ha nessun valore. Risponde: "È proprio nulla?"

**Esempio:**

php

$var1 = "ciao"; // Ha un valore

$var2 = ""; // È vuota

$var3 = null; // È nulla

$var4; // Non definita

echo isset($var1); // 1 (true) - esiste ed ha valore

echo empty($var2); // 1 (true) - è vuota

echo is_null($var3); // 1 (true) - è null

echo isset($var4); // 0 (false) - non esiste
