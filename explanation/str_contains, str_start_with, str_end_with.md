**str_contains, str_start_with, str_ends_with**

- **str_contains**: Controlla se una stringa contiene un’altra stringa. È come dire: "C’è questo dentro?"
- **str_starts_with**: Controlla se una stringa inizia con una certa sottostringa. È come dire: "Comincia così?"
- **str_ends_with**: Controlla se una stringa finisce con una certa sottostringa. È come dire: "Finisce così?"

**Esempio:**

```php

$testo = "Ciao caro amico";

// str_contains - c’è dentro?

echo str_contains($testo, "caro") ? "Sì" : "No"; // "Sì"

// str_starts_with - inizia con?

echo str_starts_with($testo, "Ciao") ? "Sì" : "No"; // "Sì"

// str_ends_with - finisce con?

echo str_ends_with($testo, "amico") ? "Sì" : "No"; // "Sì"
```

Nota: Queste funzioni sono disponibili da PHP 8.0 in poi. Restituiscono true o false.
