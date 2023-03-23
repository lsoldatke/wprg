<?php
function date_of_birth_from_pesel($pesel) {
    $pesel_digits = str_split($pesel);
    $year = $pesel_digits[0].$pesel_digits[1];
    $month = $pesel_digits[2].$pesel_digits[3];
    $day = $pesel_digits[4].$pesel_digits[5];

    return $year."-".$month."-".$day;
}

echo date_of_birth_from_pesel("12345678912");
