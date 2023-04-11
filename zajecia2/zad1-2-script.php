<?php
$number_of_people = $_POST['number-of-people'];
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$address = $_POST['address'];
$email = $_POST['email'];
$arrival_date = $_POST['arrival-date'];
$departure_date = $_POST['departure-date'];
$arrival_time = $_POST['arrival-time'];
$credit_card_number = $_POST['credit-card-number'];
$credit_card_owner_name = $_POST['credit-card-owner-name'];
$credit_card_valid_to = $_POST['credit-card-valid-to'];

echo "Podsumowanie rezerwacji:<br><br>";
echo "Liczba osób: ".$number_of_people."<br>";
echo "Imię: ".$first_name."<br>";
echo "Nazwisko: ".$last_name."<br>";
echo "Adres: ".$address."<br>";
echo "E-mail: ".$email."<br>";
echo "Data przyjazdu: ".$arrival_date."<br>";
echo "Data wyjazdu: ".$departure_date."<br>";
echo "Godzina przyjazdu: ".$arrival_time."<br>";
echo "Numer karty kredytowej: ".$credit_card_number."<br>";
echo "Imię oraz nazwisko właściciela karty: ".$credit_card_owner_name."<br>";
echo "Karta ważna do: ".$credit_card_valid_to;
