<?php
function which_nationality_am_i($country) {
    $nationalities = [
        "Polska" => "Polak",
        "Anglia" => "Anglik",
        "USA" => "Amerykanin"
    ];

    return $nationalities[$country];
}

echo which_nationality_am_i("Polska");
