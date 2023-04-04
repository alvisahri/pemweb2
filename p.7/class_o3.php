<?php
class motor
 {
    public $merk;
    public $cc;
    public $transmisi;

    function jalan()
    {
        return "merk motor $this->merk berjalan di jalan raya";
    }
    function turing()
    {
        return "motor $this->merk adalah $this->cc cc";
    }
    function ngerem()
    {
        return "motor $this->merk bisa ngerem !";
    }
    function ngegas()
    {
        return "mototr $this->merk ini ngegas
                dan transmisinya $this->transmisi";
    }
}
$motor = new motor;
$motor->merk = "Supra Bapak 250";
$motor->cc = 250;
$motor->transmisi = "manual";
echo $motor->jalan();
echo "<br>";
echo $motor->turing();
echo "<br>";
echo $motor->ngerem();
echo "<br>";
echo $motor->ngegas();