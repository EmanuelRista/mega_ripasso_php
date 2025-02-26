**EOD, ‘EOD’**

'EOD' **con Heredoc**

**Cos’è heredoc?**  
Heredoc è un modo per scrivere blocchi di testo lunghi in PHP (es. frasi, HTML) senza impazzire con virgolette o punti per concatenare. 'EOD' è solo un’etichetta che usi per dire "inizia qui" e "finisci lì".

**Come si usa?**

- Scrivi <<<EOD (senza virgolette sull’etichetta).
- Metti il testo su una o più righe.
- Chiudi con EOD; da solo su una riga, senza spazi prima o dopo.

**Esempio semplice:**

php

$testo = <<<EOD

Ciao, sono Marco.

Oggi è sabato!

EOD;

echo $testo;

**Risultato:**

Ciao, sono Marco.

Oggi è sabato!

**Con variabili:**

php

$nome = "Anna";

$testo = <<<EOD

Ciao, mi chiamo $nome.

Ho fame!

EOD;

echo $testo;

**Risultato:**

Ciao, mi chiamo Anna.

Ho fame!

Le variabili (es. $nome) vengono lette automaticamente dentro heredoc, come con le virgolette doppie.

**Regola d’oro:**  
La riga finale (EOD;) deve essere pulita, niente spazi o tabulazioni, altrimenti PHP dà errore.

'EOD' **con Nowdoc**

**Cos’è nowdoc?**  
Nowdoc è il cugino di heredoc, ma più "rigido". Funziona uguale, però NON interpreta le variabili: quello che scrivi rimane tale e quale, come con le virgolette singole. È utile se vuoi testo puro, senza che PHP ci metta mano.

**Come si usa?**

- Scrivi <<<'EOD' (nota le virgolette singole sull’etichetta).
- Metti il testo.
- Chiudi con EOD; da solo su una riga, come prima.

**Esempio semplice:**

php

$testo = <<<'EOD'

Ciao, sono Marco.

Oggi è sabato!

EOD;

echo $testo;

**Risultato:**

Ciao, sono Marco.

Oggi è sabato!

**Con variabili:**

php

$nome = "Anna";

$testo = <<<'EOD'
./../../../Users/Utente/AppData/Local/Programs/Microsoft VS Code/**EOD, ‘EOD’**

'EOD' **con Heredoc**

**Cos’è heredoc?**  
Heredoc è un modo per scrivere blocchi di testo lunghi in PHP (es. frasi, HTML) senza impazzire con virgolette o punti per concatenare. 'EOD' è solo un’etichetta che usi per dire "inizia qui" e "finisci lì".

**Come si usa?**

- Scrivi <<<EOD (senza virgolette sull’etichetta).
- Metti il testo su una o più righe.
- Chiudi con EOD; da solo su una riga, senza spazi prima o dopo.

**Esempio semplice:**

php

= <<<EOD

Ciao, sono Marco.

Oggi è sabato!

EOD;

echo ;

**Risultato:**

Ciao, sono Marco.

Oggi è sabato!

**Con variabili:**

php

= "Anna";

= <<<EOD

Ciao, mi chiamo .

Ho fame!

EOD;

echo ;

**Risultato:**

Ciao, mi chiamo Anna.

Ho fame!

Le variabili (es. ) vengono lette automaticamente dentro heredoc, come con le virgolette doppie.

**Regola d’oro:**  
La riga finale (EOD;) deve essere pulita, niente spazi o tabulazioni, altrimenti PHP dà errore.

'EOD' **con Nowdoc**

**Cos’è nowdoc?**  
Nowdoc è il cugino di heredoc, ma più "rigido". Funziona uguale, però NON interpreta le variabili: quello che scrivi rimane tale e quale, come con le virgolette singole. È utile se vuoi testo puro, senza che PHP ci metta mano.

**Come si usa?**

- Scrivi <<<'EOD' (nota le virgolette singole sull’etichetta).
- Metti il testo.
- Chiudi con EOD; da solo su una riga, come prima.

**Esempio semplice:**

php

= <<<'EOD'

Ciao, sono Marco.

Oggi è sabato!

EOD;

echo ;

**Risultato:**

Ciao, sono Marco.

Oggi è sabato!

**Con variabili:**

php

= "Anna";

= <<<'EOD'

Ciao, mi chiamo .

Ho fame!

EOD;

echo ;

**Risultato:**

Ciao, mi chiamo .

Ho fame!

Vedi? La variabile non viene letta, rimane scritta così com’è.

**Differenze chiave**

- **Heredoc (**<<<EOD**):** Legge le variabili e le sostituisce, come virgolette doppie (").
- **Nowdoc (**<<<'EOD'**):** Non tocca niente, lascia tutto com’è, come virgolette singole (').

Ciao, mi chiamo $nome.

Ho fame!

EOD;

echo $testo;

**Risultato:**

Ciao, mi chiamo $nome.

Ho fame!

Vedi? La variabile $nome non viene letta, rimane scritta così com’è.

**Differenze chiave**

- **Heredoc (**<<<EOD**):** Legge le variabili e le sostituisce, come virgolette doppie (").
- **Nowdoc (**<<<'EOD'**):** Non tocca niente, lascia tutto com’è, come virgolette singole (').
