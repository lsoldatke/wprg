<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Portal z samochodami</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona glowna</a></td>
            <td><a href="allcars.php">Wszystkie samochody</a></td>
            <td><a href="addcar.php">Dodaj samochod</a></td>
        </tr>
    </table>
    <?php
    $db_hostname = "";
    $db_username = "";
    $db_password = "";

    if (!$db_connection = mysqli_connect($db_hostname, $db_username, $db_password)) {
        echo "Nie można połączyć z bazą danych.<br>";
    } else {
        echo "Połączono z bazą danych.<br>";
    }

    if (!mysqli_select_db($db_connection, "mojabaza")) {
        echo "Nie mozna wybrac bazy danych.<br>";
    } else {
        echo "Wybrano baze danych.<br>";
    }

    $query_result = mysqli_query($db_connection, "SELECT * FROM samochody");

    echo '<table>';
    for ($i = 0; $i < 5; $i++) {
        $car = mysqli_fetch_row($query_result);

        echo '<tr>';
        foreach ($car as $column) {
            echo '<td>';
            echo $column.' ';
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    if (!mysqli_close($db_connection)) {
        echo "Nie udało się zamknąć połączenia z bazą danych.<br>";
    } else {
        echo "Zamknięto połączenie z bazą danych.<br>";
    }

    ?>
</body>
</html>
