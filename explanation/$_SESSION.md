**$\_SESSION**

• **$\_SESSION:** È un array speciale che ti permette di salvare dati per un utente durante la sua visita sul sito. È come dire: "Tieniti queste cose in memoria finché non chiudo il browser o scade il tempo!"

Esempio:

```php
// Avvia la sessione (da mettere all’inizio)
session_start();

// Salva un dato nella sessione
$_SESSION['utente'] = "Mario";

// Recupera il dato
echo $_SESSION['utente']; // "Mario"

// Elimina un dato
unset($_SESSION['utente']);

// Chiudi tutta la sessione
session_destroy();
```

Nota: I dati in $\_SESSION rimangono disponibili tra le pagine finché la sessione è attiva. Perfetto per login o carrelli!
