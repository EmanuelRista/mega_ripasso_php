<?php

$stringa = 'Ciao mondo!';

echo strtolower($stringa);

echo "<br>";

echo strtoupper($stringa);

echo "<br>";

echo trim($stringa);

echo "<br>";

echo str_replace('mondo', 'universo', $stringa);

echo '<br>';

echo $stringa;

echo '<br>';

echo strstr($stringa,'ao');

echo '<br>';

echo strpos($stringa,'mondo');

echo '<br>';

print_r(str_split($stringa, 3));

echo '<br>';

print_r(explode(" ", $stringa));

echo "<br>";

$array = ['Ciao', 'Turin', 'mi', 'i', 'vado', 'via'];

echo implode(' ', $array);

echo '<br>';

echo join(' - ', $array);

echo '<br>';

$frase = "L\'albero è verde";

echo stripslashes($frase);

echo "<br>";

echo str_contains($frase, "verde");

echo str_starts_with($frase, "L");

echo str_ends_with($frase, "e");

