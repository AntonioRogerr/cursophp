<?php

// Algoritmo nome completo

$nome = 'Antonio';
$sobrenome = 'Roger';

$nomeCompleto = $nome . ' ' . $sobrenome;

echo $nomeCompleto . PHP_EOL;

// Algoritmo média aritimética

$nota_1 = 10;
$nota_2 = 5.8;
$nota_3 = 4;
$nota_4 = 9.3;
$media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;

echo $media . PHP_EOL;

// Algoritmo mensagem personalizada!
$mensagem = "$nomeCompleto, você conquistou a média de $media";
echo $mensagem . PHP_EOL;