<?php
$dom = new DOMDocument();

$dom->load("amici.xml"); //Carico il file XML

$amici = $dom->getElementsByTagName("amico"); //Prendo tutti gli elementi "amico"  

foreach($amici as $amico) {
    $nome = $amico->getElementsByTagName("nome")->item(0)->nodeValue;
    $età = $amico->getElementsByTagName("età")->item(0)->nodeValue;
    echo "Nome: $nome, Età: $età <br>";
}

//Aggiungo un nuovo amico
/* $new_amico = $dom->createElement("amico");
$new_nome = $dom->createElement("nome", "Giovanni");
$new_età = $dom->createElement("età", "37");
$new_amico->appendChild($new_nome);
$new_amico->appendChild($new_età);
$dom->documentElement->appendChild($new_amico);
$dom->save("amici.xml"); //Salvo il file XML
 */
?>