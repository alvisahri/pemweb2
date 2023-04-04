<?php
class Bola {
    private $jari_jari;
    
    public function __construct($r) {
        $this->jari_jari = $r;
    }
    
    public function hitungvolume() {
        return (4/3) * pi() * pow($this->jari_jari, 3);
    }
    
    public function hitungsisi() {
        return 4 * pi() * pow($this->jari_jari, 2);
    }
}
 
$objek = new Bola("20");
echo $objek->hitungvolume();
echo "<br>";
echo $objek->hitungsisi();