Le **magic methods** in PHP sono funzioni speciali che iniziano con ** (due underscore) e vengono chiamate automaticamente in certe situazioni. Sono come "trucchi magici" che PHP usa quando non trova qualcosa o quando succede un evento specifico. Ti spiego **get, **callStatic e **call in modo semplice!

---

1.  **\_\_get - Prendi una proprietà che non esiste**

    Questa magia si attiva quando provi a leggere una proprietà di una classe che non è stata definita o non è accessibile. Puoi decidere tu cosa fare.

    Esempio:

    ```php

    class Persona {
    private $dati = ["nome" => "Luca"];

        public function __get($nomeProprieta) {
            if (isset($this->dati[$nomeProprieta])) {
                return $this->dati[$nomeProprieta];
            }
            return "Non trovato!";
        }

    }
    $persona = new Persona();
    echo $persona->nome; // Stampa: Luca
    echo $persona->età; // Stampa: Non trovato!
    ```

Cosa succede? Quando cerco $persona->nome, PHP non trova la proprietà nome, quindi chiama \_\_get e io gli dico cosa restituire.

---

2. **\*\*callStatic - Chiama un metodo statico che non esiste**

   Questa magia si attiva quando chiami un metodo statico (con ::) che non è definito nella classe. Puoi gestire la chiamata come vuoi.

   Esempio:

   ````php

   class Calcolatrice {
   public static function \*\*callStatic($nomeMetodo, $argomenti) {
        if ($nomeMetodo == "somma") {
   return $argomenti[0] + $argomenti[1];
   }
   return "Metodo non trovato!";
   }
   }

    echo Calcolatrice::somma(3, 5); // Stampa: 8
    echo Calcolatrice::moltiplica(2, 3); // Stampa: Metodo non trovato!
    ```
   Cosa succede? somma non esiste, ma \_\_callStatic intercetta la chiamata e somma i numeri. Se il metodo non è riconosciuto, dà un messaggio.
   ````

---

3. **\*\*call - Chiama un metodo normale che non esiste**

   Questa magia si attiva quando chiami un metodo su un oggetto (con ->) che non esiste o non è accessibile. È simile a \*\*callStatic, ma per oggetti, non per chiamate statiche.

   Esempio:

   ```php

   class Cane {
   public function \_\_call($nomeMetodo, $argomenti) {
        if ($nomeMetodo == "abbaia") {
   return "Bau bau!";
   }
   return "Non so fare questo!";
   }
   }

    $cane = new Cane();
    echo $cane->abbaia(); // Stampa: Bau bau!
    echo $cane->salta(); // Stampa: Non so fare questo!
   ```

Cosa succede? abbaia non è un metodo vero, ma \_\_call lo intercetta e risponde. Per altri metodi, dà un messaggio di errore.

---

**Riassunto veloce:**

• **\*\*get:** "Ehi, vuoi una proprietà che non c’è? Te la gestisco io!"

• **\*\*callStatic:** "Vuoi un metodo statico che non esiste? Ci penso io!"

• **\_\_call:** "Chiami un metodo su un oggetto che non c’è? Lo aggiusto io!"

**Quando le usi davvero?**

• Framework e librerie: Le magic methods sono ovunque in tools come Laravel, Symfony o WordPress per semplificare la vita agli sviluppatori.

• Codice dinamico: Se non sai in anticipo quali proprietà o metodi serviranno (es. configurazioni, API esterne).

• Debug o test: Puoi usarle per intercettare errori o loggare cosa succede.
• Interfacce semplici: Rendono il codice più leggibile per chi lo usa, nascondendo la complessità dietro.

Attenzione: Non esagerare! Troppa "magia" può rendere il codice difficile da capire per altri (o per te fra sei mesi!).
