<?php

$validate = true;
if(isset($_POST['register'])){
    $username = $_POST["username"];
    $password = $_POST["password_login"];
    $email= $_POST["email"];
    $namalengkap = $_POST["namalengkap"];

    $query = mysqli_query($conn,"INSERT INTO user VALUES(0,'$username','$password','$email','$namalengkap')");
    echo "<script>alert('Berhasil melakukan registrasi, silahkan melakukan login')</script>";

}

?>