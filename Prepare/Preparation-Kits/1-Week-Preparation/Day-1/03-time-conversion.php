<?php
function timeConversion($s) {
    return date('H:i:s', strtotime($s));
}

echo timeConversion('07:05:45PM'); // 19:05:45
echo PHP_EOL;
echo timeConversion('12:01:00PM'); // 12:01:00
echo PHP_EOL;
echo timeConversion('12:01:00AM'); // 00:01:00