<?php
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operation = $_GET['operation'];

if (isset($number1) && isset($number2)) {
    if (is_numeric($number1) && is_numeric($number2)) {
        $result = null;
        switch ($operation) {
            case 'addition': $result = $number1 + $number2; break;
            case 'subtraction': $result = $number1 - $number2; break;
            case 'multiplication': $result = $number1 * $number2; break;
            case 'division': $result = $number1 / $number2;
        }
        echo "Wynik: ".$result;
    } else {
        echo "Podano niewłaściwą wartość.";
    }
} else {
    echo "Podane wartości są puste.";
}
