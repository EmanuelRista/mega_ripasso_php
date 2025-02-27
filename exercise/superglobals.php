<?php

$num = 10;

function aggiungi() {
    global $num;
    $num += 5;
}

aggiungi();
echo $num;

echo "<br>";

$num2 = 20;

function add() {
    $GLOBALS['num2'] += 5;
}

add();
echo $num2;