<?php
echo "Figura której pole chcesz policzyć (trojkat, prostokat, trapez): ";
$figure = readline();

function calculate_triangle_area() {
    echo "Podaj bok trójkąta: ";
    $a = readline();
    echo "Podaj wysokość trójkąta: ";
    $h = readline();

    $area = $a * $h / 2;
    echo "Pole trójkąta wynosi: ".$area;

    return $area;
}

function calculate_rect_area() {
    echo "Podaj bok a prostokąta: ";
    $a = readline();
    echo "Podaj bok b prostokąta: ";
    $b = readline();

    $area = $a * $b;
    echo "Pole prostokąta wynosi: ".$area;

    return $area;
}

function calculate_trapeze_area() {
    echo "Podaj podstawę a trapezu: ";
    $a = readline();
    echo "Podaj podstawę b trapezu: ";
    $b = readline();
    echo "Podaj wysokość trapezu: ";
    $h = readline();

    $area = ($a + $b) * $h / 2;
    echo "Pole trapezu wynosi: ".$area;

    return $area;
}

switch ($figure) {
    case "trojkat": calculate_triangle_area(); break;
    case "prostokat": calculate_rect_area(); break;
    case "trapez": calculate_trapeze_area(); break;
    default: echo "Nie rozpoznano figury."; break;
}
