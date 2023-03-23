<?php
function censorship($sentence) {
    $words_in_sentence = explode(" ", $sentence);
    $words_to_be_censored = ["cenzura1", "cenzura2", "cenzura3"];

    foreach ($words_to_be_censored as $word) {
        if (array_search($word, $words_in_sentence)) {
            $words_in_sentence[array_search($word, $words_in_sentence)] = "CENSORSHIP";
        }
    }

    return implode(" ", $words_in_sentence);
}

$sentence_to_be_censored = "Zdanie zawierajace cenzura1 cenzura2 i cenzura3";
echo censorship($sentence_to_be_censored);
