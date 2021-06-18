<?php

if(isset($_SESSION['login'] ) && isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['password']) ){
    header("Location: ".BASE_URL."/Public/pelajaran");
  }

if (isset($_POST["register"])){
    header('Location: register.php');}
if (isset($_POST["login"])){
    $username_log = $_POST["username"];
    $password_log = $_POST["password_login"];
    $query = mysqli_query($conn,"SELECT * FROM user where username= '$username_log' && password = '$password_log'");
    $result = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query)){
        header("Location: ".BASE_URL."/Public/halamanakun/");
        $_SESSION['login'] = true;
        $_SESSION['id'] =$result['id'];
        $_SESSION['username'] =$result['username'];
        $_SESSION['password'] =$result['password'];
    }

    else{
        echo "<script>alert('password salah')</script>";
    }
}
?>