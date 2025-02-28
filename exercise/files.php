<?php 

$content = scandir("../exercise");
foreach ($content as $file) {  
    echo $file . '<br>';
}

echo '<br>';

echo is_dir('../exercise') ? 'si':'no';

echo '<br>';

echo is_file('../exercise') ? 'si':'no';

echo '<br>';

echo file_exists('../exercise') ?'si':'no';

echo '<br>';

$iterator = new DirectoryIterator('../exercise');
foreach ($iterator as $file) {
    echo $file . ' - ' . ($file->isDir() ? 'Cartella' : 'File'). '<br>';
}

$file = fopen("diario.txt", "w");
fwrite($file,"Oggi è una bella giornata!\n");
fclose($file);

$file = fopen("diario.txt", "a");
fwrite( $file,"E sto ripassando PHP!\n");
fclose($file);

$dimensioneFile = filesize("diario.txt");
$file = fopen("diario.txt","r");
$contenuto = fread($file, $dimensioneFile);
echo "Contenuto del file: " . $contenuto;
rewind($file);
fclose( $file );

$file = fopen("diario.txt","r");

echo '<br>';

while(!feof($file)) {
    $riga = fgets($file); //fgets legge una riga alla volta
    if ($riga !== false) {
        echo $riga . '<br>';
    }
}

fclose($file);

echo '<br>';

$contenutoGet = file_get_contents('diario.txt');
echo $contenutoGet;

echo '<br>';

file_put_contents("diario.txt","I miei capezzolini piccini picciò sono andati in Francia");
$contenutoPut = file_get_contents('diario.txt');
echo $contenutoPut;

echo '<br>';

copy("diario.txt", "diario_copy.txt");
$content = scandir("../exercise");
foreach ($content as $file) {  
    echo $file . '<br>';
}

unlink("diario_copy.txt");