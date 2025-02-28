**XML** è un modo per organizzare dati in un file, un po’ come un albero con rami (nodi) che contengono informazioni. Pensa a un elenco telefonico: ogni persona ha un nome, un numero, un indirizzo, ecc., e tutto è ben strutturato. Con PHP, puoi usare il DOM (Document Object Model) per leggere, modificare o creare questi "alberi" di dati.

In PHP, il **DOM** è una specie di superpotere che ti permette di:

• Aprire un file XML.

• Guardare o cambiare quello che c’è dentro (nodi, attributi, testo).

• Creare un XML da zero e salvarlo.

Le classi principali sono DOMDocument (il "capo" che gestisce tutto) e i suoi "aiutanti" come DOMElement (per i nodi) e DOMText (per il testo).

**Esempio pratico**

Immagina di avere un file XML con una lista di amici e di volerlo leggere o modificarne uno con PHP.

1. File XML di partenza (amici.xml):

   ```xml
   <?xml version="1.0" encoding="UTF-8"?>
   <amici>
       <amico>
           <nome>Marco</nome>
           <età>25</età>
       </amico>
       <amico>
           <nome>Lucia</nome>
           <età>30</età>
       </amico>
   </amici>
   ```

2. Codice PHP per leggere e modificare:

```php

<?php
// Creo un oggetto DOMDocument
$dom = new DOMDocument();

// Carico il file XML
$dom->load("amici.xml");

// Leggo tutti gli amici
$amici = $dom->getElementsByTagName("amico");
foreach ($amici as $amico) {
$nome = $amico->getElementsByTagName("nome")->item(0)->nodeValue;
$età = $amico->getElementsByTagName("età")->item(0)->nodeValue;
echo "Amico: $nome, età: $età\n";
}
// Output:
// Amico: Marco, età: 25
// Amico: Lucia, età: 30

// Aggiungo un nuovo amico
$nuovo_amico = $dom->createElement("amico");
$nuovo_nome = $dom->createElement("nome", "Sara");
$nuova_età = $dom->createElement("età", "28");
$nuovo_amico->appendChild($nuovo_nome);
$nuovo_amico->appendChild($nuova_età);

// Lo metto nella lista degli amici
$dom->documentElement->appendChild($nuovo_amico);

// Salvo il file modificato
$dom->save("amici.xml");
echo "Nuovo amico aggiunto e file salvato!\n";
?>
```

3. Risultato (amici.xml dopo il codice):

```xml

<?xml version="1.0" encoding="UTF-8"?>
<amici>
    <amico>
        <nome>Marco</nome>
        <età>25</età>
    </amico>
    <amico>
        <nome>Lucia</nome>
        <età>30</età>
    </amico>
    <amico>
        <nome>Sara</nome>
        <età>28</età>
    </amico>
</amici>
```

**Come ricordarlo**

• **XML:** È un albero di informazioni con "rami" (nodi) come <nome> o <età>.

• **DOMDocument:** Il tuo "giardiniere" che ti aiuta a esplorare o piantare nuovi rami.

• **getElementsByTagName:** Ti trova i nodi che cerchi (tipo "tutti i nomi").

• **createElement:** Crea nuovi "rami" da aggiungere all’albero.

• **save:** Salva l’albero nel file.

Pensa al DOM come a un gioco di costruzioni: puoi prendere pezzi (nodi), aggiungerne di nuovi o buttarli via.
