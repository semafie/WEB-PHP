<?php
require ('Acara 13_koneksi.php');

session_start();

if( isset($_POST['sumbit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
}
