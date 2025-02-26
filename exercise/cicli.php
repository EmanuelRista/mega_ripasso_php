<?php 
$numeri = [1,2,3,4,5];
for( $i = 0; $i < count( $numeri ); $i++ ) {
    echo $numeri[$i]."<br>";
}

echo "<br>";

$a = 0;
while( $a < count( $numeri ) ) { 
    echo $numeri[$a]."<br>";
    $a++;
}

echo "<br>";

$b = 6;
do {
    echo "Ciao\n";
    $b++;
} while ($b < count( $numeri ) );

echo "<br>";

foreach( $numeri as $numero ) { 
    echo $numero."<br>";
}

?>