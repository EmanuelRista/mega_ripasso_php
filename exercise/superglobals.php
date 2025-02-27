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

echo '<br>';

print_r($_SERVER);
echo '<br>';
print_r($_SERVER['REQUEST_URI']);

echo '<br>';

print_r($_GET);

echo '<br>';

print_r($_POST);

echo '<br>';

print_r($_COOKIE);

echo '<br>';

print_r($_FILES);

echo '<br>';

print_r($_REQUEST);

echo '<br>';

session_start();
print_r($_SESSION);
session_destroy();

echo '<br>';