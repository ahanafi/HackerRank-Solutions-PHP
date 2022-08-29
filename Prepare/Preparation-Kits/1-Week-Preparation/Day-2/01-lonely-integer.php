<?php
/**
 * @param array $a
 * @return int
 */
function lonelyinteger($a) {
    $countValues = array_count_values($a);
    $lonelyInt = null;

    foreach ($countValues as $key => $val) {
        if ($val === 1) {
            $lonelyInt = $key;
            break;
        }
    }

    return $lonelyInt;
}

echo lonelyinteger([1, 2, 3, 4, 3, 2, 1]); // 4
echo PHP_EOL;
echo lonelyinteger([1, 1, 2]); // 2
echo PHP_EOL;
echo lonelyinteger([0, 0, 1, 2, 1]); // 2