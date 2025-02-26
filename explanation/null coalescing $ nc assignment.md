**Null coalescing & null coalescing assignment**

**Null Coalescing Operator (**??**)**

**Cos’è?**  
Il ?? è come un paracadute: ti dà un valore di riserva se quello che vuoi usare è null. Confronta una variabile e, se è null, usa il valore dopo il ??. È più corto di un if!

**Come si usa?**  
Metti la variabile da controllare, poi ??, e infine il valore di default.

**Esempio semplice:**

php

$nome = null;

$risultato = $nome ?? "Anonimo";

echo $risultato;

**Risultato:** Anonimo. Perché $nome è null, quindi usa "Anonimo".

**Esempio con valore non null:**

php

$nome = "Marco";

$risultato = $nome ?? "Anonimo";

echo $risultato;

**Risultato:** Marco. $nome non è null, quindi usa quello.

**Differenza con** isset**:**  
A differenza di isset(), ?? considera solo null, non se la variabile esiste o no. Se $nome non è definita, dà errore senza un check aggiuntivo.

**Null Coalescing Assignment Operator (**??=**)**

**Cos’è?**  
Il ??= è un "riempi se vuoto": assegna un valore a una variabile solo se quella variabile è null. È una scorciatoia per non scrivere un if.

**Come si usa?**  
Scrivi la variabile, poi ??=, e il valore da assegnare se è null.

**Esempio semplice:**

php

$nome = null;

$nome ??= "Anonimo";

echo $nome;

**Risultato:** Anonimo. $nome era null, quindi gli assegna "Anonimo".

**Esempio con valore non null:**

php

$nome = "Marco";

$nome ??= "Anonimo";

echo $nome;

**Risultato:** Marco. $nome non era null, quindi non cambia.

**In breve**

- ??**:** Sceglie un valore di riserva se qualcosa è null (es. $a ?? $b = usa $a se non è null, altrimenti $b).
- ??=**:** Assegna un valore solo se la variabile è null (es. $a ??= $b = $a diventa $b solo se $a è null).

**Trucco:**

php

$eta = null;

$eta ??= 18; // $eta diventa 18

$eta ??= 25; // $eta resta 18

echo $eta; // 18
