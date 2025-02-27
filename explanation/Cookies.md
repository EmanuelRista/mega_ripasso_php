**Cookies**

• **Cookies:** Sono piccoli dati salvati nel browser dell’utente per ricordarsi cose (es. preferenze o login). È come dire: "Tieniti questo biglietto per dopo!"

Come funzionano in PHP:

• **setcookie():** Imposta un cookie (nome, valore, scadenza, ecc.).
• **$\_COOKIE:** Recupera i valori dei cookie.

Esempio:

```php
// Imposta un cookie (dura 1 ora)
setcookie("colore", "blu", time() + 3600);

// Recupera il cookie
if (isset($_COOKIE['colore'])) {
    echo $_COOKIE['colore']; // "blu"
}

// Elimina un cookie (scadenza nel passato)
setcookie("colore", "", time() - 3600);
```

Nota: I cookie sono disponibili solo dalla richiesta successiva, non subito dopo setcookie().
