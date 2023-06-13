<?php
class Buah
{
    public $namabuah;
    public $warnakulit;
    public $rasa;
    public $aroma;

    function __construct($nama, $warna, $taste, $bau)
    {
        $this->namabuah = $nama;
        $this->warnabuah = $warna;
        $this->rasa = $taste;
        $this->aroma = $bau;
    }
    function tumbuh()
    {
        return "Buah $this->namabuah itu tumbuh !";
    }
    function busuk()
    {
        return "Buah $this->namabuah itu busuk !";
    }
}
// $objekBuah = new Buah();
// echo $objekBuah->namabuah = "jeruk";
// echo "<br>";
// echo $objekBuah->warnakulit = "oranye";
// echo "<br>";
// echo $objekBuah->rasa = "kecut";
// echo "<br>";
// echo $objekBuah->aroma = "wangi";
// echo "<br>";
// echo $objekBuah->tumbuh();
// echo "<br>";
// echo $objekBuah->busuk();
$objek = new Buah("sirsak","merah","maniez","harum");
echo $objek->tumbuh();
echo "<br>";
echo $objek->busuk();