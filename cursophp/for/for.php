<?php

//for($i = 0; $i < 10; $i++) {
    echo $i . PHP_EOL;
//}

for($i = 0; $i < 10; $i++) {
    if ($i % 3 == 0) {
        continue;
    }
    echo $i . PHP_EOL;
}