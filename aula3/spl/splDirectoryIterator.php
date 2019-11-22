<?php

echo "<pre>";
foreach (new DirectoryIterator('/') as $diretorio) {
    echo "-" . $diretorio . "<br>";
    foreach (new DirectoryIterator('/' . $diretorio) as $diretorio2) {
        echo "---" . $diretorio2 . "<br>";
    }
}

echo gettype(new DirectoryIterator('/'));
