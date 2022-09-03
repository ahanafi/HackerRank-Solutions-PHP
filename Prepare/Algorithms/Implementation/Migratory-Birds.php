<?php
/**
 * @param $arr
 * @return int|string
 */
function migratoryBirds($arr) {
	asort($arr);
    $counter = array_count_values($arr);
    $max = max($counter);

    $keyMax = 0;
    foreach ($counter as $key => $val) {
    	if ($val === $max) {
    		$keyMax = $key;
    		break;
    	}
    }

    return $keyMax;
}

echo migratoryBirds([1, 4, 4, 4, 5, 3]); // 4