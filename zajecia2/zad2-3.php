<?php
$path = $_GET['path'];
$directory = $_GET['directory'];
$full_path = "$path/$directory";
$operation = $_GET['operation'];

switch ($operation) {
    case "read":
        if (!($fd = opendir($full_path))) exit("Nie mozna otworzyc katalogu.");
        while (($file = readdir($fd)) !== false) {
            echo $file."<br>";
        }
        closedir($fd);
        break;
    case "delete":
        rmdir($directory);
        break;
    case "create":
        mkdir($directory);
}
