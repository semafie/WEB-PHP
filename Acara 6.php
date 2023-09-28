<?php
$kelompok = array("Semar","Gareng","Petruk","Semar");
echo $kelompok[0];
echo "<br>";
echo $kelompok[3];
$kelompok[1]="semar";
$kelompok[2]="Gareng";
$kelompok[3]="Petruk";
$kelompok[4]="Bagong";
echo $kelompok[3]."<br>";

?>

<?php
$number = array(1,2,3,4,5);
foreach($number as $values)
{
echo "value is $values <br/>";
}
$number[0] = "one";
$number[1] = "two";
$number[2] = "three";
$number[3] = "four";
$number[4] = "five";
foreach($number as $values)
{
echo "Value is $values <br/>";
}
?>

<?php
$solaria = array(
    "agus" => 2000,
    "lapar" => 1000,
    "buk" => 500
);
echo "Salary of agus is ". $solaria['agus'] . "<br />";
echo "Salary of lapar is ". $solaria['lapar']. "<br />";
echo "Salary of buk is ". $solaria['buk']. "<br />";
/* Second method to create array. */
$solaria['agus'] = "high";
$solaria['lapar'] = "medium";
$solaria['buk'] = "low";
echo "Salary of agus is ". $solaria['agus'] . "<br />";
echo "Salary of lapar is ". $solaria['lapar']. "<br />";
echo "Salary of buk is ". $solaria['buk']. "<br />";
?>

<?php
$marks = array( 
    "agus" => array (
    "fisika" => 35, 
    "matematika" => 30, 
    "kimia" => 39 
    ),
    "asep" => array (
     "fisika" => 30,
     "matematika" => 32,
     "kimia" => 29
     ),
     "anto" => array (
     "fisika" => 31,
     "matematika" => 22,
     "kimia" => 39
     )
     );
     /* Accessing multi-dimensional array values */
     echo "Marks for agus in fisika : " ;
     echo $marks['agus']['fisika'] . "<br />"; 
     echo "Marks for asep in matematika : ";
     echo $marks['asep']['matematika'] . "<br />"; 
     echo "Marks for anto in kimia : " ;
     echo $marks['anto']['kimia'] . "<br />";
?>

<?php
//tugas ini bro
$array1 = array(
    array(7, 3, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$array2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

$hasilJumlah = array();

for ($i = 0; $i < count($array1); $i++) {
    for ($j = 0; $j < count($array1[$i]); $j++) {
        $hasilJumlah[$i][$j] = $array1[$i][$j] + $array2[$i][$j];
    }
}

echo "Hasil Penjumlahan Array 2 dimensi: <br />";
for ($i = 0; $i < count($hasilJumlah); $i++) {
    for ($j = 0; $j < count($hasilJumlah[$i]); $j++) {
        echo $hasilJumlah[$i][$j] . " ";
    }
    echo "<br />";
}
?>

<?php
// Membuat dua array tiga dimensi
$angka1 = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(9, 8, 7),
        array(6, 5, 4),
        array(3, 2, 1)
    ),
    array(
        array(9, 8, 7),
        array(6, 5, 4),
        array(3, 2, 1)
    )
);

$angka2 = array(
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    ),
    array(
        array(18, 17, 16),
        array(15, 14, 13),
        array(12, 11, 10)
    ),
    array(
        array(67, 3, 16),
        array(15, 14, 33),
        array(12, 41, 10)
    )
);

// Menginisialisasi array hasil penjumlahan
$hasilJumlah = array();

// Melakukan penjumlahan elemen-elemen kedua array
for ($i = 0; $i < count($angka1); $i++) {
    $hasilJumlah[$i] = array();
    for ($j = 0; $j < count($angka1[$i]); $j++) {
        $hasilJumlah[$i][$j] = array();
        for ($k = 0; $k < count($angka1[$i][$j]); $k++) {
            $hasilJumlah[$i][$j][$k] = $angka1[$i][$j][$k] + $angka2[$i][$j][$k];
        }
    }
}

// Menampilkan hasil penjumlahan
echo "Hasil Penjumlahan Array 3 dimensi: <br />";
for ($i = 0; $i < count($hasilJumlah); $i++) {
    for ($j = 0; $j < count($hasilJumlah[$i]); $j++) {
        for ($k = 0; $k < count($hasilJumlah[$i][$j]); $k++) {
            echo $hasilJumlah[$i][$j][$k] . " ";
        }
        echo "<br />";
    }
    echo "<br />";
}

?>