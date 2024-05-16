<?php

if(1 > 0) {
    echo "verdadeiro" . PHP_EOL;
} else {
    echo "errado" . PHP_EOL;
}

$nome = "Roger";
$idade = 19;
$matriculado = false;

if ($nome == "Lucas") {
    echo "Verdadeiro" . PHP_EOL;
} else if ($idade === 19) {
    echo "Idade OK" . PHP_EOL;
} else {
    echo "Nada feito!";
}