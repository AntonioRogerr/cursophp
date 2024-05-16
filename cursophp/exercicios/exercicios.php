<?php

// Questão 1: Crie uma função que receba dois números como parâmetros e retorne a soma deles.

function soma($n1, $n2) {
    echo $n1 + $n2 . PHP_EOL;
}

soma(5, 10);

// Questão 2: Crie uma função que receba a base e altura do triângulo e retorne a área.

function areatriangulo ($base, $altura) {
    echo ($base * $altura) / 2 . PHP_EOL;
}

areatriangulo(5, 10);

// Questão 3: Crie uma função que receba um array e retorne o último item deste array

$ultimoitem = [10, 5, 25];
echo $ultimoitem[2] . PHP_EOL;
echo end($ultimoitem) . PHP_EOL;

// Questão 4: Crie uma função que valide se um array contém um determinado número. Se contém um determinado número, retorne ``true``. Caso contrário, retorne ``false``
$numeros = [1, 2, 3, 4, 5];

function validar($numeros, $numeroteste) {
    // Verifica se o número teste está presente no array
    if (in_array($numeroteste, $numeros)) {
        return true;
    } else {
        return false;
    }
}

echo validar($numeros, 8) . PHP_EOL;

# Questão 5: Um fazendeiro pergunta para você quantas pernas pode ser contada entre todos os seus animais. O fazendeiro tem 3 espécies de animais em sua fazenda:

function animais($galinhas, $vacas, $porcos){
    echo ($galinhas * 2) + ($vacas * 4) + ($porcos * 4) . PHP_EOL;
}

animais(2,3,5) . PHP_EOL;

# Questão 6: Crie uma função que retorne o menor número:

function menornum ($num1, $num2){
    if ($num1 < $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

echo menornum (20, 30) . PHP_EOL;

#Questão 7: Calculadora de IMC: Escreva um script PHP que calcule o Índice de Massa Corporal (IMC) de uma pessoa. 
#O usuário deve fornecer sua altura e peso, e o script deve retornar o IMC.
#O cálculo do IMC é feito usando a seguinte fórmula: peso (kg) ÷ (altura x altura) (m).

function calcularIMC($peso, $altura){
    if ($peso > 0 && $altura > 0){
        $imc = $peso / ($altura * $altura);
        return $imc;
    } else {
        echo "Coloque um peso ou altura maior que zeror!";
    }
}

echo calcularIMC(65, 1.72) . PHP_EOL;

#Questão 8: Escreva um script PHP que converta temperaturas de Celsius para Fahrenheit e vice-versa. O usuário deve fornecer a temperatura e a escala desejada (Celsius ou Fahrenheit), e o script deve realizar a conversão.

function celsiusparaF($celsius){
    return ($celsius * 1.8) + 32;
}

function fahrenheitparaC($fahrenheit){
    return ($fahrenheit - 32) / 1.8;
}

$celsius = 40;
$fahrenheit = 130;

echo "$celsius celsius em fahrenheit, é igual a " . celsiusparaF($celsius) . " fahrenheit" . PHP_EOL;
echo "$fahrenheit fahrenheit em celsius, é igual a " . fahrenheitparaC($fahrenheit) . " celsius" . PHP_EOL; 
