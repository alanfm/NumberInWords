<?php

include ('classes/Numeros.class.php');
include ('classes/Unidade.class.php');
include ('classes/Dezena.class.php');
include ('classes/Centena.class.php');

$unidade = new Numeros(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT));

header('Content-Type: application/json');
echo (ucfirst($unidade->getString()) . '.');