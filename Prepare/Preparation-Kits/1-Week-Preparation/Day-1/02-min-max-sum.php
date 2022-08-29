<?php
function miniMaxSum($arr) {
    // Sort array
    sort($arr);
    $totalArr = count($arr);
    $minSum = 0;
    $maxSum = 0;

    for ($i = 0; $i < $totalArr; $i++) {
        if ($i < $totalArr - 1) {
            $minSum += $arr[$i];
        }

        if ($i > 0) {
            $maxSum += $arr[$i];
        }
    }

    echo $minSum . ' ' . $maxSum;
}

miniMaxSum([1, 2, 3, 4, 5]); // 10 14