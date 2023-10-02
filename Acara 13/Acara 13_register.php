<?php
require ('Acara 13_koneksi.php');
if( isset($_POST['register'])){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "INSERT INTO user_detail VALUES ('','$userMail','$userPass','$userPass',2)";
    $result = $mysqli_query($koneksi,$query);
    header('Location : Acara 13_lagin.php');
}
?>
<!DOCTYPE html>
<html> 
<head>
    <title>Register</title>
</head>
<body>
    <form action="Acara 13_register.php" method = "Post">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required ></p>
        <p>password : <input type="password" name ="txt_pass" required></p>
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" required></p>
        <button type="submit" name="register" >Register</button>
    </form>
    <p><a href="Acara 13_login.php"></a>Login</p>
</body>
</html>