<?php
function max_from_array_for($array) {
    $max = 0;

    for ($i = 0; $i < sizeof($array); $i++) {
        if ($i == 0) {
            $max = $array[$i];
        } else if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    return $max;
}

function max_from_array_while($array) {
    $max = 0;
    $i = 0;

    while ($i < sizeof($array)) {
        if ($i == 0) {
            $max = $array[$i];
        } else if ($array[$i] > $max) {
            $max = $array[$i];
        }

        $i++;
    }

    return $max;
}

function max_from_array_do_while($array) {
    $max = 0;
    $i = 0;

    do {
        if ($i == 0) {
            $max = $array[$i];
        } else if ($array[$i] > $max) {
            $max = $array[$i];
        }

        $i++;
    } while ($i < sizeof($array));

    return $max;
}

function max_from_array_foreach($array) {
    $max = 0;
    $i = 0;

    foreach ($array as $number) {
        if ($i == 0) {
            $max = $number;
        } else if ($number > $max) {
            $max = $number;
        }

        $i++;
    }

    return $max;
}

$random_numbers_array = [rand(1, 6), rand(1, 6), rand(1, 6)];

echo "Tablica: ";
foreach ($random_numbers_array as $number) {
    echo $number." ";
}
echo "\n";
echo "Max (for): ".max_from_array_for($random_numbers_array)."\n";
echo "Max (while): ".max_from_array_while($random_numbers_array)."\n";
echo "Max (do while): ".max_from_array_do_while($random_numbers_array)."\n";
echo "Max (foreach): ".max_from_array_foreach($random_numbers_array)."\n";
