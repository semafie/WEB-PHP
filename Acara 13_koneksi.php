<?php
$server   = "localhost";
$username = "root";
$password = "";
$db       = "db_acara13web";

$koneksi = mysqli_connect($server, $username,$password,$db);

if(mysqli_connect_errno()){
    echo "Koneksi gagal : " .maysqli_connect_error();
} else {
    echo "Berhasil brohhh";
}