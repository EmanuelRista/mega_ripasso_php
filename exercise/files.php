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