<?php

include ('classes/Numeros.class.php');
include ('classes/Unidade.class.php');
include ('classes/Dezena.class.php');
include ('classes/Centena.class.php');
header('Content-Type: application/json');

$unidade = new Numeros(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT));

echo (ucfirst($unidade->getString()) . '.');