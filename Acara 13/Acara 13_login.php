<?php
require ('Acara 13_koneksi.php');

session_start();

if( isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];


if(!empty(trim($email))&& !empty(trim($pass))) {
    $query  = "SELECT * FROM user_detail where user_email = '$email'";
    $result = mysqli_query($koneksi, $query);
    $num = mysqli_num_rows($result);

    while ($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $userVal = $row['user_email'];
        $passVal = $row['user_password'];
        $userName = $row['user_fullname'];
        $level = $row['level'];
    }
    if($num != 0) {
        if($userVal==$email && $passVal==$pass){
            header('Location: Acara 13_home.php');
        } else {
            $error = 'user atau password!!';
            // header('Location: Acara 13_login.php');
        }
    } else {
        $error = 'user tidak ditemukan!!';
        // header('Location: Acara 13_login.php');
    }
} else {
    // $error = 'Data tidak boleh kosong!!';
    echo $error;
}
}

?>
<html>
<head>
    <title>login page</title>
</head>
<body>
    <form action ="Acara 13_login.php" method ="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type= "text" name="txt_email"></p>
        <p>password :<input type="password" name= "txt_pass"></p>
        <button type="submit" name="submit">Sign In</button>
</form>
</body>
</html>