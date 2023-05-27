<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Udzielono odpowiedzi</title>
</head>
<body>
<?php
session_start();
setcookie("s24729", date("d-m-Y"), time() + 60 * 60 * 24 * 7);

// Dane logowania do bazy danych
$db_hostname = "";
$db_username = "";
$db_password = "";

$query = "INSERT INTO zgloszenia (imie, nazwisko, adres_email, odpowiedz) VALUES ('{$_SESSION['first_name']}', '{$_SESSION['last_name']}', '{$_SESSION['email']}', '{$_SESSION['answer']}')";

if (!$db_connection = mysqli_connect($db_hostname, $db_username, $db_password)) {
    echo "Blad podczas laczenia z baza danych.";
}

if (!mysqli_select_db($db_connection, "konkurs")) {
    echo "Blad podczas wybierania bazy danych.";
}

if (!mysqli_query($db_connection, $query)) {
    echo "Blad podczas wysylania zapytania do bazy danych.";
}

if (!mysqli_close($db_connection)) {
    echo "Blad podczas zamykania bazy danych.";
} else {
    echo "Pomyslnie zapisano odpowiedz.";
}

session_destroy();

?>
</body>
</html>
