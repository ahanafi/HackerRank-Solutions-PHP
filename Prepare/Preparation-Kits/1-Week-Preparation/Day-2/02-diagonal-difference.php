<?php
function diagonalDifference($arr) {
    $sumX = 0;
    $sumY = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($x = 0; $x < count($arr); $x++) {
            if ($i == $x) {
                $sumX += $arr[$i][$x];
            }
            if (($i + $x) === count($arr) - 1) {
                $sumY += $arr[$i][$x];
            }
        }
    }

    return ($sumX < $sumY) ? ($sumY - $sumX) : ($sumX - $sumY);
}

$arr1 = [
    [11, 2, 4],
    [4,  5, 6],
    [10, 8, -12]
];

// First diagonal = 11 + 15 - 12 = 4
// Second diagonal = 4 + 6 + 10 = 19
// result = | 4 - 19 | = 15

echo diagonalDifference($arr1); // 15