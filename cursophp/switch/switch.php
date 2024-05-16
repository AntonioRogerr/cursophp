<?php

$dia = 1;

switch ($dia) {
case 1:
    echo "domingo" . PHP_EOL;
    break;
case 2:
    echo "segunda" . PHP_EOL;
    break;
default:
    echo "não temmm" . PHP_EOL;
}

$diaa = "sabado";

switch ($diaa) {
case "sabado":
    echo "domingo" . PHP_EOL;
    break;
case 2:
    echo "segunda" . PHP_EOL;
    break;
default:
    echo "não temmm" . PHP_EOL;
}