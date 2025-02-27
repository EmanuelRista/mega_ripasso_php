**$\_GET, $\_POST, $\_COOKIE, $\_REQUEST**

• **$\_GET:** Contiene i dati inviati tramite l’URL (parametri visibili). È come dire: "Cosa c’è nella barra degli indirizzi?"
• **$\_POST:** Contiene i dati inviati tramite un form con metodo POST (non visibili nell’URL). È come dire: "Cosa mi ha mandato il form?"
• **$\_COOKIE:** Contiene i dati salvati nei cookie del browser. È come dire: "Cosa si ricorda il browser?"
• **$\_REQUEST:** Un mix di $\_GET, $\_POST e $\_COOKIE (prende quello che trova). È come dire: "Dammi tutto quello che arriva!"

Esempio:

```php
// URL: pagina.php?nome=Mario
echo $_GET['nome']; // "Mario"

// Form: <form method="post"><input name="eta" value="25">
echo $_POST['eta']; // "25"

// Cookie impostato: setcookie("colore", "blu");
echo $_COOKIE['colore']; // "blu"

// Funziona con GET, POST o COOKIE
echo $_REQUEST['nome']; // "Mario" (se presente)
```
