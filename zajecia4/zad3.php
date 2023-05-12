<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3 - Licznik odwiedzin z użyciem sesji i cookie</title>
</head>
<body>
<?php
if (!isset($_COOKIE['counter'])) {
    setcookie('counter', '1');
    echo "Stronę odwiedzono pierwszy raz.";
} else {
    if (isset($_SESSION)) {
        $_COOKIE['counter']++;
    } else {
        echo "Nie zwiekszono licznika poniewaz jest aktywna sesja.".'<br>';
    }
    echo "Stronę odwiedzono {$_COOKIE['counter']} razy.";
}

?>
</body>
</html>
