<?php
$file = $_POST['file'];
$file_arr = file($file);

for ($i = count($file_arr) - 1; $i >= 0; $i--) {
    $str = nl2br("$i. $file_arr[$i]");
    echo $str;
}
