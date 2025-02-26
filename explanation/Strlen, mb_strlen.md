**Strlen, mb_strlen**

strlen

**Cos’è?**  
strlen è una funzione che conta quanti **caratteri** ci sono in una stringa. È come se prendessi una riga di testo e contassi ogni letterina, spazio o simbolo, uno per uno.

**Come si usa?**  
Scrivi strlen() e dentro le parentesi metti la stringa o la variabile con il testo.

**Esempio semplice:**

php

$testo = "Ciao";

echo strlen($testo);

**Risultato:** 4. Perché? "C-i-a-o" sono 4 caratteri.

**Altro esempio:**

php

$frase = "Ciao mondo!";

echo strlen($frase);

**Risultato:** 11. Conta tutto: "C-i-a-o- -m-o-n-d-o-!" (spazio e punto inclusi).

**Attenzione:**  
strlen conta i **byte**, non i caratteri "veri". Con lettere normali (come "a", "b", "c") va bene, ma con caratteri speciali (es. "è", "ñ") può fare confusione, perché occupano più di un byte.

mb_strlen

**Cos’è?**  
mb_strlen è la versione "smart" di strlen. Conta i **caratteri reali**, non i byte, ed è perfetta per testi con accenti, emoji o lingue strane (es. cinese). "mb" sta per "multibyte", cioè gestisce caratteri che occupano più spazio.

**Come si usa?**  
Scrivi mb_strlen() e dentro ci metti la stringa. Devi anche dire a PHP che "codifica" usare (di solito "UTF-8", che è lo standard per testi moderni).

**Esempio semplice:**

php

$testo = "Ciao";

echo mb_strlen($testo, "UTF-8");

**Risultato:** 4. Uguale a strlen, perché "Ciao" è semplice.

**Esempio con accenti:**

php

$testo = "Ciao è bello";

echo mb_strlen($testo, "UTF-8");

**Risultato:** 12. Conta ogni carattere: "C-i-a-o- -è- -b-e-l-l-o".

**Confrontiamo con** strlen**:**

php

$testo = "Ciao è bello";

echo strlen($testo);

**Risultato:** 13. Perché? La "è" occupa 2 byte, quindi strlen la conta "male" (13 byte), mentre mb_strlen la vede come 1 carattere (12 caratteri).

**Esempio con emoji:**

php

$testo = "Ciao 😊";

echo mb_strlen($testo, "UTF-8");

**Risultato:** 6. "C-i-a-o- -" (l’emoji conta come 1 carattere). Con strlen:

php

echo strlen($testo);

**Risultato:** 8. L’emoji occupa 4 byte, quindi strlen sballa.

**Differenze in breve**

- strlen**:** Conta i **byte**. Va bene per testi semplici (solo lettere normali), ma sbaglia con accenti o emoji.
- mb_strlen**:** Conta i **caratteri reali**. Perfetto per testi moderni con UTF-8 (accenti, emoji, ecc.).

**Quando usarli?**

- Usa strlen se sei sicuro che il testo è solo "ABC123" senza cose strane.
- Usa mb_strlen per tutto il resto, soprattutto siti web moderni.

**Nota pratica**

Per usare mb_strlen, devi avere l’estensione mbstring attiva in PHP (di solito lo è, ma se non funziona, controlla con il tuo hosting).
