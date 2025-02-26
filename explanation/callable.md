**callable**

- **callable**: Serve a indicare qualcosa che si può "chiamare" come una funzione. Può essere il nome di una funzione, una funzione anonima o un metodo di un oggetto. Risponde: "Posso usarlo come funzione?"

**Esempio:**

php

// Una funzione normale

function saluta() {

echo "Ciao!";

}

// Controllo se è callable

var_dump(is_callable("saluta")); // true - posso chiamarla

// Funzione anonima

$anonima = function() {

echo "Hey!";

};

var_dump(is_callable($anonima)); // true - anche questa si può chiamare

saluta(); // Ciao!

$anonima(); // Hey!
