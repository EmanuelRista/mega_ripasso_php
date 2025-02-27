**$\_SERVER**

**$\_SERVER**: È un array speciale che contiene informazioni sul server e sulla richiesta del browser. È come dire: "Dimmi tutto sull’ambiente in cui sto lavorando!"
Le più usate:
• **$\_SERVER['REQUEST_URI']:** L’URL richiesto (es. "/pagina.php").
• **$\_SERVER['HTTP_HOST']:** Il nome del dominio (es. "www.esempio.com").
• **$\_SERVER['REQUEST_METHOD']:** Il metodo della richiesta (es. "GET" o "POST").
• **$\_SERVER['REMOTE_ADDR']:** L’indirizzo IP del visitatore.
• **$\_SERVER['SERVER_NAME']:** Il nome del server (simile a HTTP_HOST).

Esempio:

```php
echo $_SERVER['REQUEST_URI'];     // "/index.php"
echo $_SERVER['HTTP_HOST'];       // "localhost"
echo $_SERVER['REQUEST_METHOD'];  // "GET"
echo $_SERVER['REMOTE_ADDR'];     // "127.0.0.1"
echo $_SERVER['SERVER_NAME'];     // "localhost"
```
