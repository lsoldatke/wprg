<?php
function print_multiplication_table($size) {
    for ($i = 1; $i < $size + 1; $i++) {
        for ($j = 1; $j < $size + 1; $j++) {
            $product = $i * $j;
            echo $product."\t";
            if ($j == $size) {
                echo "\n";
            }
        }
    }
}

print_multiplication_table(10);
