**Interface**

Un’interfaccia in PHP è come un contratto: dice a una classe quali metodi deve avere, ma non spiega come farli. È un po’ come un capo che ti dà una lista di compiti ("devi fare questo e quello"), ma sta a te decidere come svolgerli. Serve per assicurarsi che diverse classi seguano le stesse regole, anche se funzionano in modo diverso.

• Non contiene codice vero e proprio (niente logica), solo "firme" di metodi (il nome e i parametri).

• Le classi che usano un’interfaccia (con implements) devono implementare tutti i metodi elencati.

• È utile per rendere il codice flessibile e prevedibile, soprattutto quando lavori in team o con più oggetti simili.

**Esempio pratico**

Immagina di avere diversi tipi di animali, e vuoi che tutti sappiano "parlare" e "muoversi", ma ognuno a modo suo.

```php

<?php
// Definisco l'interfaccia
interface Animale {
    public function parla(); // Firma del metodo, senza corpo
    public function muoviti();
}

// Classe Cane che implementa l'interfaccia
class Cane implements Animale {
    public function parla() {
        return "Bau bau!";
    }

    public function muoviti() {
        return "Corro con 4 zampe!";
    }
}

// Classe Uccello che implementa l'interfaccia
class Uccello implements Animale {
    public function parla() {
        return "Cip cip!";
    }

    public function muoviti() {
        return "Volo con le ali!";
    }
}

// Funzione che usa l'interfaccia
function descriviAnimale(Animale $animale) { // Accetta solo oggetti che seguono l'interfaccia
    echo "Parla: " . $animale->parla() . "\n";
    echo "Si muove: " . $animale->muoviti() . "\n";
    echo "----\n";
}

// Creo gli oggetti
$cane = new Cane();
$uccello = new Uccello();

// Uso la funzione con entrambi
descriviAnimale($cane);
// Output:
// Parla: Bau bau!
// Si muove: Corro con 4 zampe!
// ----

descriviAnimale($uccello);
// Output:
// Parla: Cip cip!
// Si muove: Volo con le ali!
// ----

// Se una classe dimentica un metodo:
// class Gatto implements Animale {
//     public function parla() { return "Miao!"; }
// }
// Errore! Manca muoviti()
?>
```

**Come ricordarlo**

• Interfaccia: Una lista di "cose da fare" che una classe deve rispettare.

• implements: La promessa di una classe di seguire il contratto.

• Nessun codice dentro: solo nomi di metodi, il "come" lo decidi tu nella classe.

Pensa all’interfaccia come a un regolamento di un club: "Per entrare, devi saper fare A e B". Ogni membro (classe) lo fa a modo suo, ma tutti rispettano le regole
