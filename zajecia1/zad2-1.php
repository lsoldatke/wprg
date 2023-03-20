<?php
function random_number_from_array($index) {
    $random_numbers = [rand(), rand(), rand()];

    return $random_numbers[$index];
}

echo random_number_from_array(1);
