<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2 - Licznik odwiedzin strony</title>
</head>
<body>
    <?php
    if (!$fd = fopen('licznik.txt', 'r+')) {
        echo "Nie mozna odczytac pliku licznik.txt.";
    } else {
        $bytes_to_read = filesize('licznik.txt');
        if (!$bytes_to_read) $bytes_to_read++;
        $times = fread($fd, $bytes_to_read);
        $times++;
        fclose($fd);
        file_put_contents('licznik.txt', $times);
        echo "Strone odwiedzono $times razy.";
    }

    ?>
</body>
</html>
