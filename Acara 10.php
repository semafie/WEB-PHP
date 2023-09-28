<?php
class car {
    protected  $model;
    public function setmodel($model){
        $this->model=$model;
    }
    function getmodel(){
        return $this->model;
    }
}
class sportclass extends car{
    public function hello(){
        return "beep!  I am a <i>".$this->model."</i><br/>";
    }
}
$sportcar1 = new sportclass();
$sportcar1-> setmodel("Marcendes ferrari");
// $model = $sportcar1->getmodel(); // Menyimpan hasil pemanggilan getmodel() dalam variabel $model
// echo $model;
echo $sportcar1->hello();
?>

<?php

abstract class carss {
    protected $tankvolume;

    public function setTankVolume($volume) {
        $this->tankvolume = $volume;
    }

    abstract public function fullTank(); // Metode abstrak
}

class Sedan extends carss {
    public function fullTanki() {
        return "Mengisi tangki sedan dengan $this->tankvolume liter bahan bakar.";
    }
    
    public function fullTank(){

    }
}

class SUV extends carss {
    public function fullTank() {
        return "Mengisi tangki SUV dengan $this->tankvolume liter bahan bakar.";
    }
}

$sedan = new Sedan();
$sedan->setTankVolume(50);
echo $sedan->fullTanki(); // Output: Mengisi tangki sedan dengan 50 liter bahan bakar.

$suv = new SUV();
$suv->setTankVolume(70);
echo $suv->fullTank()."<br>";
?>

<?php
class damn {
    public function hello(){
        return "beep";
    }
}
class damn1 extends damn{
    public function hello(){
        return "hayooo";
    }
}

$debb4 = new damn1();
echo $debb4->hello();