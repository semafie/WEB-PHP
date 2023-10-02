<?php
interface Tanah{
    public function Hitungluas();
}
abstract class Bibit{
    abstract public function ditanami();
}
class Lingkaran extends Bibit implements Tanah{
    private $jari_jari;
    private $pi = 3.14;
    public function __construct($jari_jari){
        $this->jari_jari= $jari_jari;
    }
    public function Hitungluas(){
        return $this->jari_jari*$this->jari_jari*$this->pi;
    }
    public function ditanami(){
        return "ditanami kopi enak punya mbak debby";
    }
}
class Persegipanjang extends Bibit implements Tanah{
    private $panjang;
    private $lebar;
    public function __construct($panjang,$lebar){
        $this->panjang= $panjang;
        $this->lebar= $lebar;
    }
    public function Hitungluas(){
        return $this->panjang*$this->lebar;
    }
    public function ditanami(){
        return "ditanami Padi enak lo punya mbak debby";
    }
}

$tanahaguslaparbuk = new Lingkaran(3);
$tanahyanto = new Persegipanjang(3,4);
echo "Tanah Agus Seluas " .$tanahaguslaparbuk->Hitungluas()." m2 \n<br>";
echo $tanahaguslaparbuk->ditanami()."\n \n<br>";

echo "Tanah yanto Seluas " .$tanahyanto->Hitungluas()." m2 \n<br>";
echo $tanahyanto->ditanami()."\n \n<br>";
