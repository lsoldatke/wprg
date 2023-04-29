<?php
$purchaser_first_name = $_POST['first-name'];
$purchaser_last_name = $_POST['last-name'];
$credit_card_number = $_POST['credit-car-number'];
$number_of_persons = $_POST['number-of-persons'];

echo 'Podsumowanie:<br>';
echo 'Imie osoby zamawiajacej: '.$purchaser_first_name.'<br>';
echo 'Nazwisko osoby zamawiajacej: '.$purchaser_last_name.'<br>';
echo 'Numer karty kredytowej: '.$credit_card_number.'<br>';

foreach (array_keys($_POST) as $key) {
    echo $key;
}

for ($i = 0; $i < $number_of_persons; $i++) {
    echo 'Osoba '.($i + 1).'. '.$_POST['person'.($i + 1).'-first-name'].' '.$_POST['person'.($i + 1).'-last-name'];
}
