<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3 - Odnosniki z pliku</title>
</head>
<body>
    <?php
    if (!$fd = fopen('zad3-testfile.txt', 'r')) {
        echo "Nie mozna odczytac pliku zad3-testfile.txt.";
    } else {
        $bytes_to_read = filesize('zad3-testfile.txt');
        $links_and_descriptions = explode("\n", fread($fd, $bytes_to_read));

        echo "<ul>";
        foreach ($links_and_descriptions as $link_and_description) {
            $arr = explode(";", $link_and_description);
            echo "<li><a href=".$arr[0].">"."$arr[1]</a></li>";
        }
        echo "</ul>";

        fclose($fd);
    }

    ?>
</body>
</html>
