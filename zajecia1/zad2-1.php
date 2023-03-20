<?php
function random_number_from_array($index) {
    $random_values = [rand(), rand(), rand()];

    return $random_values[$index];
}

echo random_number_from_array(1);
