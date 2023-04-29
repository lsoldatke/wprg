<?php
$number_of_persons = $_POST['number-of-persons'];

echo '<form action="zad1-3.php" method="post">';

for ($i = 0; $i < $number_of_persons; $i++) {
    echo '  <label>Imie osoby '.($i + 1).': <input type="text" name="person'.($i + 1).'-first-name"></label><br><br>';
    echo '  <label>Nazwisko osoby '.($i + 1).': <input type="text" name="person'.($i + 1).'-last-name"></label><br><br>';
}

echo '<input type="submit">';
echo '</form>';
