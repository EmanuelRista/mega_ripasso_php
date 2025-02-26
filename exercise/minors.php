<?php

echo "Hello world!";

echo "<br>";

$helloWorld = "Hello world";

var_dump($helloWorld);

echo "<br>";

print_r($helloWorld);

echo "<br>";

$text = <<<EOD
Ciao volevo solo dirti: $helloWorld,
spero che non ti dispiaccia
EOD;

echo $text;

echo "<br>";

$anotherText = <<<'EOD'
Ciao volevo solo dirti $helloWorld,
spero che non ti dispiaccia
EOD;

echo $anotherText;

echo "<br>";

$salutoNapoletano = "Ciao marescià";
 echo strlen($salutoNapoletano);
 echo "<br>";
 echo mb_strlen($salutoNapoletano);

echo "<br>";

$a = 5; $b=10;
 
echo $a <=> $b;

echo "<br>";

$nome = null;
echo $nome ?? "Anonimo";
echo "<br>";
print_r($nome); //null
echo "<br>";
echo $nome ??= "Anonimo";
echo "<br>";
print_r($nome);

$var1 = "testo";
$var2 = "";
$var3 = null;
$var4;
echo "<br>";
echo isset( $var1 )."\n";
echo empty( $var2 )."\n";
echo is_null( $var3 )."\n";
echo isset( $var4 );

echo "<br>";

function saluta()
{
    echo "Ciao ciao!";
}

print_r(is_callable("saluta"));

echo "<br>";



?>