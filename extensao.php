<?php

// Inclui o arquivo da classe Numeros
require ('classes/Numeros.php');

// Cria uma instancia de Números
$n = new Numeros(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT));

// Seta o cabeçalho para saída do tipo JSON
header('Content-Type: application/json');

// Imprime o número passado por extenso
echo $n->porExtenso(), '.';