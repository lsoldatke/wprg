<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>
<?php
class NoweAuto {
    public $model;
    public $cena;
    public $kurs_euro_pln;

    public function oblicz_cene() {
        return $this->cena = 50;
    }
}

class AutoZDodatkami extends NoweAuto {
    public $alarm;
    public $radio;
    public $klimatyzacja;

    public function oblicz_cene() {
        return NoweAuto::class->oblicz_cene() + 50;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    public $wartosc;
    public $ile_lat;

    public function oblicz_cene() {
        return ($this->wartosc * (AutoZDodatkami::class->oblicz_cene() * ((100 - $this->ile_lat) / 100)));
    }
}

$ubezpieczenie = new Ubezpieczenie();

echo "Cena: ".$ubezpieczenie->oblicz_cene();

?>
</body>
</html>
