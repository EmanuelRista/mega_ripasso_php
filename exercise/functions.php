<?php

$funzioneNormale = function($x) :int {
    return $x * 2;
};

echo $funzioneNormale(2);

echo "<br>";

$arrowFunction = fn($x) => $x * 2;

echo $arrowFunction(5);

?>