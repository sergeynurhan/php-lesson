<?php

require './Notebook.php';

$notebook = new Notebook(10, 'aaaaaaa');
$notebook->memory = 10;

echo $notebook->memory . PHP_EOL;