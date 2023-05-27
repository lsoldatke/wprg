<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie</title>
</head>
<body>
<?php
if (isset($_COOKIE['s24729'])) {
    echo "Formularz zostal juz wypelniony.";
} else {
    session_start();

    $_SESSION['first_name'] = $_POST['first-name'];
    $_SESSION['last_name'] = $_POST['last-name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['answer'] = $_POST['answer'];

    echo '<h1>Podsumowanie</h1>';
    echo "Imie: {$_SESSION['first_name']}".'<br>';
    echo "Nazwisko: {$_SESSION['last_name']}".'<br>';
    echo "Email: {$_SESSION['email']}".'<br>';
    echo "Udzielona odpowiedz: {$_SESSION['answer']}".'<br><br>';
    echo '<a href="index3.php">Akceptuje</a><br>';
}

?>
</body>
</html>
