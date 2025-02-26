<?php

$frutta = array("Mele","Pere","Banane");
$numeri = [1,2,3];
var_dump($frutta);
echo "<br>";
var_dump($numeri);

echo array_push($frutta,"Fragole");
echo "<br>";
print_r($frutta);
echo "<br>";
echo $frutta[4] = "Limoni";
print_r($frutta);

echo "<br>";

unset($frutta[3]);
print_r($frutta);

echo "<br>";

$frutta = array_values($frutta);
print_r($frutta);

echo "<br>";

unset($frutta);
//print_r($frutta);

echo "<br>";

$macchine = ['Panda', 'Punto', 'Giulietta'];

echo in_array('Punto', $macchine);

echo "<br>";

echo in_array("Lancia", $macchine);

echo "<br>";

echo array_search("Giulietta", $macchine);

echo "<br>";

function somma(...$nums) {
    return array_sum($nums);
}

echo somma(1,2,3);

echo "<br>";

function somma2($nums) {
    $nums = func_get_args();
    return array_sum($nums);
}

echo somma2(1,2,3);

echo "<br>";