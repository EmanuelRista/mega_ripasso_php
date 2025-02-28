<?php 

$host = 'localhost';
$db = 'cicciobello';
$user = 'pippo';
$password = '1234';

/* $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$password);

$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  */

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Errore di connessione:" . $e->getMessage());
}

//Questo metodo è pericoloso perchè si possono fare attacchi di SQL injection
//NON USARE MAI QUESTO METODO

$nome = "Marco";
$result = $pdo->query("SELECT * FROM utenti WHERE nome = '$nome'"); //seleziono tutti gli utenti con nome Marco

while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "Trovato: " . $row["nome"] . ", età: " . $row["età"] . "\n";
}  //fetch ritorna un array associativo

while($row = $result->fetch()) {
    echo "Trovato: " . $row["nome"] . ", età: " . $row["età"] . "\n";
} //fetch ritorna un array di oggetti

//Problema: Se $nome fosse "Marco'; DROP TABLE utenti; --", potrebbe distruggere il database!

//Per evitare questo problema, usare il metodo prepare

$stmt = $pdo->prepare("SELECT * FROM utenti WHERE nome = ?"); //puoi usare anche :nome
$stmt->execute([$nome]);
//se usi :nome devi fare $stmt->execute([':nome' => $nome]);
//Utilizzando le dichiarazioni preparate e le query parametrizzate, PDO si assicura che il valore di $nome venga trattato come un dato e non come una parte del codice SQL. Questo significa che qualsiasi carattere speciale o malizioso presente nel valore di $nome non potrà alterare la struttura della query SQL.
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Trovato: " . $row["nome"] . ", età: " . $row["età"] . "\n";
}