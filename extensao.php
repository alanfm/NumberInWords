<?php

include ('classes/Numeros.php');

$n = new Numeros(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT));

header('Content-Type: application/json');
echo (ucfirst($n->porExtenso()) . '.');