<?php

$libri = [
    ["titolo" => "Il Signore degli Anelli", "autore" => "Tolkien"],
    ["titolo" => "Harry Potter", "autore" => "Rowling"]
];

$json = json_encode($libri);
print_r($json);

echo "<br>";

file_put_contents("libri.json", $json);
$json_da_file = file_get_contents("libri.json");
$libri_da_file = json_decode($json_da_file, true); //true per avere un array associativo e non un array di oggetti
print_r($libri_da_file);

echo '<br>';

$libri_da_file_obj = json_decode($json_da_file, false);
print_r($libri_da_file_obj); 

echo '<br>';

print_r($libri_da_file);
echo getType($libri_da_file);
echo '<br>';
print_r($libri_da_file_obj);
echo getType($libri_da_file_obj);
echo '<br>';
print_r($json_da_file);
echo getType($json_da_file);