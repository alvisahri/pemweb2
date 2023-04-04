<?php

class Balok {
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($p, $l, $t) {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function hitungvolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    public function hitungsisi() {
        $luas_permukaan = 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
        $keliling = 4 * ($this->panjang + $this->lebar + $this->tinggi);
        return $luas_permukaan;
    }
}

$objek = new Balok("20","5","15");
echo $objek->hitungvolume();
echo "<br>";
echo $objek->hitungsisi();