<?php

echo '<h1>Definição</h1>';

echo '<h2>Lista ordenada</h2>';

$array = [
    'banana',
    'goiaba',
    'morango'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array associativo</h2>';

$array = [
    'nome' => 'Antonio Roger',
    'idade' => 19,
    'canal' => 'WDVEY'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array bagunçado</h2>';

$array = [
    'nome' => 'Antonio Roger',
    'idade' => 19,
    'canal' => 'WDVEY',
    'goiaba',
    'banana',
    'morango'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Adicionando valores na lista ordenada</h2>';

$array = [
    'banana',
    'goiaba',
    'morango'
];

$array[] = 'maça';
$array[5] = 'pera';
//se colocar uma posição(parâmetro) que já existe ele só substitui o valor

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Adicionando valores em um array associativo</h2>';

$array = [
    'nome' => 'Antonio Roger',
    'idade' => 19,
    'canal' => 'WDVEY'
];

$array['instagram'] = '@rogeersm_';
//se colocar uma chave que já existe ele substitui

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array multidimensional</h2>';

$array = [
    'pessoas' => [
        [
            'id' => 1,
            'nome' => 'William',
            'idade' => 24
        ],
        [
            'id' => 2,
            'nome' => 'Alberto',
            'idade' => 22
        ],
        [
            'id' => 3,
            'nome' => 'Maria',
            'idade' => 36
        ]
    ]
];

echo "<pre>";
print_r($array);
echo "</pre>";
        
echo '<hr>';

echo '<h2>Obtendo valores dos arrays</h2>';

$array = [
    'pessoas' => [
        [
            'id' => 1,
            'nome' => 'William',
            'idade' => 24
        ],
        [
            'id' => 2,
            'nome' => 'Alberto',
            'idade' => 22
        ],
        [
            'id' => 3,
            'nome' => 'Maria',
            'idade' => 36
        ]
    ]
];

echo "<pre>";
print_r($array['pessoas']);
echo "</pre>";

echo "<pre>";
print_r($array['pessoas'][0]); //se quiser filtrar na hora de printar, basta usar as chaves e ir colocando os valores que quer, tipo, se eu quisesse adicionar mais o nome, era só por ['nome'].
echo "</pre>";

echo '<h1>Funções</h1>';

$array = [
    'banana',
    'goiaba',
    'morango'
];

$arrayAssociativo = [
    'nome' => 'Antonio Roger',
    'canal' => 'WDEV'
];

echo '<h2>Count</h2>';

echo "<pre>";
echo count($array);
echo "</pre>";

echo "<pre>";
echo count($arrayAssociativo);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Keys</h2>';

echo "<pre>";
print_r(array_keys($array));
echo "</pre>";
 
echo "<pre>";
print_r(array_keys($arrayAssociativo));
echo "</pre>";
 
echo '<hr>';

echo '<h2>Array Values</h2>';

echo "<pre>";
print_r(array_values($array));
echo "</pre>";
 
echo "<pre>";
print_r(array_values($arrayAssociativo));
echo "</pre>";
 
echo '<hr>';

echo '<h2>In Array</h2>';

echo "<pre>";
var_dump(in_array('banana', $array));
//print_r(in_array('banana', $array)); RETORNARIA 1 AQUI, QUE É TRUE, JÁ O VAR DUMP RETORNA TRUE PORQUE É O TIPO DO 1
echo "</pre>";

echo "<pre>";
var_dump(in_array('WDEV', $arrayAssociativo));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Search</h2>';

echo "<pre>";
var_dump(array_search('morango', $array));
echo "</pre>";

echo "<pre>";
var_dump(array_search('WDEV', $arrayAssociativo));
echo "</pre>";

echo '<hr>';

echo '<h2>Isset</h2>';

echo "<pre>";
var_dump(isset($array[0]));
echo "</pre>";

echo "<pre>";
var_dump(isset($arrayAssociativo['canal']));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Key Exists</h2>';

echo "<pre>";
var_dump(array_key_exists(0, $array));
echo "</pre>";

echo "<pre>";
var_dump(array_key_exists('instagram', $arrayAssociativo));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Key First</h2>';

echo "<pre>";
echo array_key_first($arrayAssociativo);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Key Last</h2>';

echo "<pre>";
echo array_key_last($arrayAssociativo);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Flip</h2>';

echo "<pre>";
print_r(array_flip($array));
echo "</pre>";

echo '<hr>';

echo '<h2>Implode</h2>';

echo "<pre>";
echo implode(',',$array);
echo "</pre>";

echo '<hr>';

echo '<h2>Explode</h2>';

echo "<pre>";
print_r(explode('a','bananas'));
echo "</pre>";

echo '<h1>Ordenação</h1>';

echo '<h2>Sort</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Asort</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

asort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Rsort</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Ksort</h2>';

$array = [
    'nome' => 'Roger',
    'canal' => 'WDEV',
    'a' => 'b'
];

echo "<pre>";
print_r($array);
echo "</pre>";

ksort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Krsort</h2>';

$array = [
    'nome' => 'Roger',
    'canal' => 'WDEV',
    'a' => 'b'
];

echo "<pre>";
print_r($array);
echo "</pre>";

krsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Usort</h2>';

$array = [
        [
            'id' => 1,
            'nome' => 'William',
            'idade' => 24
        ],
        [
            'id' => 2,
            'nome' => 'Alberto',
            'idade' => 22
        ],
        [
            'id' => 3,
            'nome' => 'Maria',
            'idade' => 36
        ]
];

echo "<pre>";
print_r($array);
echo "</pre>";

usort($array, function($a,$b){
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1;
});

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Uasort</h2>';

$array = [
        [
            'id' => 1,
            'nome' => 'William',
            'idade' => 24
        ],
        [
            'id' => 2,
            'nome' => 'Alberto',
            'idade' => 22
        ],
        [
            'id' => 3,
            'nome' => 'Maria',
            'idade' => 36
        ]
];

echo "<pre>";
print_r($array);
echo "</pre>";

uasort($array, function($a,$b){
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1;
});

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Shuffle</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

shuffle($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Natsort</h2>';

$array = [
    '10.0v',
    '1.0v',
    '2.0v'
];

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

natsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r($array);
echo "</pre>";

natcasesort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h1>Manipulação de dados</h1>';

echo '<h2>Array Unique</h2>';

$array = [
    10,
    11,
    11,
    12,
    15,
    15
];

echo "<pre>";
print_r(array_unique($array));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Filter</h2>';

$array = [
    'nome' => 'Roger',
    'canal' => 'WDEV',
    'instagram' => false,
    'novo' => 0
];

echo "<pre>";
print_r(array_filter($array));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Diff</h2>';

$arrayA = [
    10,
    15,
    25
];

$arrayB = [
    10,
    17,
    22,
    26
];

echo "<pre>";
print_r(array_diff($arrayA, $arrayB));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Intersect</h2>';

echo "<pre>";
print_r(array_intersect($arrayA, $arrayB));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Column</h2>';

$array = [
    [
        'id' => 1,
        'nome' => 'William',
        'idade' => 24
    ],
    [
        'id' => 2,
        'nome' => 'Alberto',
        'idade' => 22
    ],
    [
        'id' => 3,
        'nome' => 'Maria',
        'idade' => 36
    ]
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r(array_column($array, 'id'));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Combine</h2>';

$arrayA = [
    1,
    10,
    22
];

$arrayB = [
    'a',
    'c',
    'd'
];

echo "<pre>";
print_r($arrayA);
echo "</pre>";

echo "<pre>";
print_r($arrayB);
echo "</pre>";

echo "<pre>";
print_r(array_combine($arrayA, $arrayB));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Merge</h2>';

$arrayA = [
    'Willian',
    'Alberto',
    'Aghata'
];

$arrayB = [
    'Alfredo',
    'Bruno'
];

echo "<pre>";
print_r($arrayA);
echo "</pre>";

echo "<pre>";
print_r(array_merge($arrayA, $arrayB));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Pad</h2>';

$array = [
    'A',
    'B',
    'C'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r(array_pad($array,10, 'sem posição'));
echo "</pre>";

echo '<hr>';

echo '<h2>Array Shift</h2>';

$array = [
    'A',
    'B',
    'C'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
echo array_shift($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Unshift</h2>';

$array = [
    'A',
    'B',
    'C'
];

echo "<pre>";
print_r($array);
echo "</pre>";

array_unshift($array, 'W', 'I');

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Pop</h2>';

$array = [
    'A',
    'B',
    'C'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
echo array_pop($array);
echo "</pre>";

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Unset</h2>';

$array = [
    'A',
    'B',
    'C'
];

echo "<pre>";
print_r($array);
echo "</pre>";

unset($array[1]);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

echo '<h2>Array Map</h2>';

$array = [
    [
        'id' => 1,
        'nome' => 'William',
        'idade' => 24
    ],
    [
        'id' => 2,
        'nome' => 'Alberto',
        'idade' => 22
    ],
    [
        'id' => 3,
        'nome' => 'Maria',
        'idade' => 36
    ]
];

echo "<pre>";
print_r($array);
echo "</pre>";

$map = array_map(function($value){
    $value['nome'] = strtolower($value['nome']);
    return $value;
}, $array); 


echo "<pre>";
print_r($map);
echo "</pre>";


