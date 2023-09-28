<?php
echo "Membuat Fungsi <br>";
function berhasil(){
    echo "Selamat anda berhasil";
};
function gagal(){
    echo "Maaf anda gagal";
}
$nilai = 90;
if($nilai >= 75){
    berhasil();
} else {
    gagal();
};
echo "<br>";
echo "Fungsi dengan parameter <br>";
function jumlah ($a,$b){
    return $a+$b;
}
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1,$nilai2);
echo "<br>";
echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "sekarang tanngal :".$sekarang["mday"]."<br>";
?>

<?php
$a = 10;
$b = 19;
function mencari_nilai_terbesar($d,$e){
    if($d>$e){
        return $d." merupakan yang terbesar"."<br>".$e." merupakan yang kecil"; 
    } else {
        return $e." merupakan yang terbesar"."<br>".$d." merupakan yang kecil";
    };
}
echo mencari_nilai_terbesar($a,$b);
?>

<?php

$sekarang = getdate(); // Mendapatkan informasi tanggal dan waktu sekarang

$hari = $sekarang["mday"]; // Mendapatkan hari (tanggal)
$bulan = $sekarang["mon"]; // Mendapatkan bulan (angka)
$tahun = $sekarang["year"]; // Mendapatkan tahun

// Format tanggal, bulan, dan tahun sesuai dengan keinginan Anda
$tanggal_format = sprintf("%02d-%02d-%04d", $hari, $bulan, $tahun);

echo "Tanggal, bulan, dan tahun sekarang: " . $tanggal_format."<br>";
$ded = $hari."-0".$bulan."-".$tahun;
echo "<br>".$ded."<br>";
?>

<?php
$waktu_sekarang = time(); // Mendapatkan waktu sekarang
$tanggal_format = date("d-F-Y", $waktu_sekarang); // Format tanggal sesuai keinginan Anda

echo $tanggal_format."<br>"; // Output: misalnya "27-September-2023"

$waktu_sekarang = getdate(); // Mendapatkan informasi tanggal dan waktu sekarang sebagai array asosiatif
$nama_hari = [
    "Minggu",    // 0
    "Senin",     // 1
    "Selasa",    // 2
    "Rabu",      // 3
    "Kamis",     // 4
    "Jumat",     // 5
    "Sabtu"      // 6
];
$tanggal_format = $nama_hari[$waktu_sekarang['wday']]. '-' . $waktu_sekarang['month'] . '-' . $waktu_sekarang['year']; // Format tanggal sesuai keinginan Anda

echo $tanggal_format; // Output: misalnya "27-September-2023"
?>

