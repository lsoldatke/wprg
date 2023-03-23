<?php
function throw_a_dice_n_times($n) {
    $results = [];

    for ($i = 0; $i < $n; $i++) {
        $results[] = rand(1, 6);
    }

    return $results;
}

foreach (throw_a_dice_n_times(5) as $result) {
    echo $result." ";
}
