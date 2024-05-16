<?php

$listafrutas = ['Manga', 'Morango', 'Acerola', 'Uva'];

foreach($listafrutas as $key => $item) {
    echo $key . ' - ' . $item . PHP_EOL;
} //esse aqui vai retornar os índices e valores do array

foreach($listafrutas as $listafrutas) {
    echo $listafrutas . " " . PHP_EOL;
} //esse aqui vai retornar os itens do array, apenas os itens