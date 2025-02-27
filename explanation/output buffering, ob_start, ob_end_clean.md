**Output buffering (ob_start, ob_end_clean)**

Ecco una spiegazione semplice per output buffering in PHP, con ob_start e ob_end_clean:

• **Output buffering:** È un modo per "tenere in sospeso" l’output (es. echo) invece di inviarlo subito al browser. È come dire: "Aspetta, lo mando quando sono pronto!"

• **ob_start():** Avvia il buffering, tutto quello che stampi viene salvato in memoria.

• **ob_end_clean():** Ferma il buffering e cancella quello che avevi salvato (non lo manda).

Esempio:

```php
// Avvia il buffering
ob_start();

echo "Ciao "; // Non va subito al browser
echo "Mondo";

// Cancella tutto e ferma
ob_end_clean();

// Niente viene stampato sopra, proviamo di nuovo
echo "Solo questo"; // "Solo questo" (normale, senza buffering)
```

Nota: Utile per modificare l’output prima di inviarlo o per evitare errori di header!
