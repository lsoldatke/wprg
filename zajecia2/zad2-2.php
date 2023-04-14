<?php
function factorial_iteratively($number) {
    $result = 1;

    for ($i = 1; $i <= $number; $i++) {
        $result = $result * $i;
    }

    return $result;
}

function factorial_recursively($number) {
    if ($number < 2) {
        return 1;
    } else {
        return $number * factorial_iteratively($number - 1);
    }
}

$number = 5;

$iteratively_start_time = microtime(true);
echo "Silnia od $number iteracyjnie: ".factorial_iteratively($number)."\n";
$iteratively_end_time = microtime(true);

$recursively_start_time = microtime(true);
echo "Silnia od $number rekursywnie: ".factorial_recursively($number);
$recursively_end_time = microtime(true);

$iteratively_time = $iteratively_end_time - $iteratively_start_time;
$recursively_time = $recursively_end_time - $recursively_start_time;

echo "\nCzas działania iteracyjnie: ".$iteratively_time."\n";
echo "Czas działania rekursywnie: ".$recursively_time;
