<?php
class Mamalia{
    public $jumlahkaki;
    public $berekor;
    function menyusui()
    {
        return "hewan menyusui";
    }
    function melahirkan()
    {
        return "hewan melahirkan";
    }
}

$objekMamalia = new Mamalia();
echo $objekMamalia->melahirkan();

echo $objekMamalia->jumlahkaki = 2;