<?php

function soma($n1, $n2) {
    echo $n1 * $n2 . PHP_EOL;
}

soma(80, 100);

function apresentacao($nome, $idade, $profissao, $cidade) {
    echo "Olá $nome, aos $idade, você alcançou a sua profissão de $profissao, na cidade de $cidade" . PHP_EOL;
}

apresentacao('Roger', 19, 'Cibersegurança', 'Belém');

