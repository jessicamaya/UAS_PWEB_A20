<?php

session_login();

if(isset($_POST['kumpulkan'])){
    $isijawaban = $_POST["isijawaban"];
    $query = mysqli_query($conn,"INSERT INTO jawaban VALUES(0,'$_SESSION[id]','$isijawaban')");
    echo "<script>alert('jawaban berhasil ditambahkan')</script>";

if (isset($_POST["kumpulkan"])){
    header("Location: ".BASE_URL."/Public/pengumpulantugas");
    
}
}

?>