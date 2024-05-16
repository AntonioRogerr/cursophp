<?php

$contador = 0;

while($contador < 5) {
    echo $contador . PHP_EOL;
    $contador ++;
}

$contador = 10;

while($contador > 0) {
    echo $contador . PHP_EOL;
    $contador -= 1;
    if ($contador == 5){
        break;
    }
}

$contador = 10;
while($contador > 0) {
    echo $contador . PHP_EOL;
    $contador -= 2;
}