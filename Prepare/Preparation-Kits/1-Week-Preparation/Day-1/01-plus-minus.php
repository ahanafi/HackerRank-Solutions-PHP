<?php
function plusMinus($arr) {
    $positive = 0;
    $negative = 0;
    $zero = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            $positive++;
        } else if ($arr[$i] < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    $result = [$positive, $negative, $zero];
    foreach ($result as $res) {
        echo number_format($res / count($arr), 6) . PHP_EOL;
    }
}

// INPUT
plusMinus([-4, 3, -9, 0, 4, 1]);

// OUTPUT
// 0.500000
// 0.333333
// 0.166667
