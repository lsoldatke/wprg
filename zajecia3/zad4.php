<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 4 - Rozne strony w zaleznosci od adresu IP</title>
</head>
<body>
<?php
$ip_addr = $_SERVER['REMOTE_ADDR'];

if (!$fd = fopen('ip-addresses', 'r')) {
    echo "Nie mozna odczytac pliku ip-addresses.";
} else {
    $bytes_to_read = filesize('ip-addresses') - 2;
    $ips = explode("\n", fread($fd, $bytes_to_read));
    $ip_found_in_file = false;

    foreach ($ips as $ip) {
        if ($ip == $ip_addr) {
            $ip_found_in_file = true;
            break;
        }
    }

    if ($ip_found_in_file) {
        include 'zad4-site1.php';
    } else {
        include 'zad4-site2.php';
    }

    fclose($fd);
}

?>
</body>
</html>
