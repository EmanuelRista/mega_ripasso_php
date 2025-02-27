**strtolower, strtoupper, trim**

- **strtolower**: Trasforma una stringa tutta in minuscolo. È come dire: "Abbassa la voce!"
- **strtoupper**: Trasforma una stringa tutta in maiuscolo. È come dire: "Urla!"
- **trim**: Toglie spazi (o altri caratteri) all’inizio e alla fine di una stringa. È come dire: "Puliscimi i bordi!"

**Esempio:**

```php

$testo = " Ciao Mondo! ";

// Tutto minuscolo

echo strtolower($testo); // " ciao mondo! "

// Tutto maiuscolo

echo strtoupper($testo); // " CIAO MONDO! "

// Toglie spazi ai lati

echo trim($testo); // "Ciao Mondo!"
```
