<?php
abstract class Person {
    abstract public function greet();
}
class English extends Person{
    public function greet(){
        return "2 gol";   
    }
}
class Jerman extends Person{
    public function greet(){
        return "5 gol";
    }
}
class Francis extends Person{
    public function greet(){
        return "8 gol";
    }
}
$hayo1 = new English();
echo $hayo1->greet()."<br>";
$hayo2 = new Jerman();
echo $hayo2->greet()."<br>";
$hayo3 = new Francis();
echo $hayo3->greet()."<br>";
?>

<?php
// Interface
interface Pencetak {
    public function cetak();
}

// Abstract class
abstract class Bentuk {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function hitungLuas();
}

// Class Lingkaran yang extends Bentuk dan mengimplementasikan Pencetak
class Lingkaran extends Bentuk implements Pencetak {
    private $jari_jari;

    public function __construct($nama, $jari_jari) {
        parent::__construct($nama);
        $this->jari_jari = $jari_jari;
    }

    public function hitungLuas() {
        return 3.14 * $this->jari_jari * $this->jari_jari;
    }

    public function cetak() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Luas Lingkaran: " . $this->hitungLuas() . "<br>";
    }
}

// Class Persegi yang extends Bentuk dan mengimplementasikan Pencetak
class Persegi extends Bentuk implements Pencetak {
    private $sisi;

    public function __construct($nama, $sisi) {
        parent::__construct($nama);
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function cetak() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Luas Persegi: " . $this->hitungLuas() . "<br>";
    }
}

// Class Segitiga yang extends Bentuk dan mengimplementasikan Pencetak
class Segitiga extends Bentuk implements Pencetak {
    private $alas;
    private $tinggi;

    public function __construct($nama, $alas, $tinggi) {
        parent::__construct($nama);
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function cetak() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Luas Segitiga: " . $this->hitungLuas() . "<br>";
    }
}

// Contoh penggunaan polimorfisme
$lingkaran = new Lingkaran("Lingkaran A", 5);
$persegi = new Persegi("Persegi B", 4);
$segitiga = new Segitiga("Segitiga C", 6, 8);

$shapes = [$lingkaran, $persegi, $segitiga];

foreach ($shapes as $shape) {
    $shape->cetak();
}

