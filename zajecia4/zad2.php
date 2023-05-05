<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Licznik odwiedzin z użyciem cookie</title>
</head>
<body>
<?php
if (!isset($_COOKIE['counter'])) {
    setcookie('counter', '1');
    echo "Stronę odwiedzono pierwszy raz.";
} else {
    $_COOKIE['counter']++;
    echo "Stronę odwiedzono {$_COOKIE['counter']} razy.";
}

?>
</body>
</html>
