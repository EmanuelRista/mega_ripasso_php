**$\_FILES**

• **$\_FILES:** È un array speciale che contiene informazioni sui file caricati tramite un form (es. immagini o documenti). È come dire: "Che file mi hai mandato?"

Struttura base:

• **$\_FILES['nome']['name']:** Nome originale del file.
• **$\_FILES['nome']['type']:** Tipo del file (es. "image/jpeg").
• **$\_FILES['nome']['tmp_name']:** Percorso temporaneo del file sul server.
• **$\_FILES['nome']['size']:** Dimensione del file in byte.
• **$\_FILES['nome']['error']:** Codice di errore (0 se tutto ok).

Esempio:

```php
// HTML: <form method="post" enctype="multipart/form-data">
// <input type="file" name="foto">

if ($_FILES['foto']['error'] == 0) {
    echo $_FILES['foto']['name'];     // "miafoto.jpg"
    echo $_FILES['foto']['size'];     // 12345 (byte)
    move_uploaded_file($_FILES['foto']['tmp_name'], "upload/miafoto.jpg"); // Sposta il file
}
```

Nota: Usa enctype="multipart/form-data" nel form per far funzionare il caricamento!
