<?php

session_login();
if(isset($_POST['input_diskusi'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $query = mysqli_query($conn,"INSERT INTO diskusi values(0,'$_SESSION[id]','$judul','$_SESSION[username]','$isi')");
    echo "<script>alert('berhasil terkirim')</script>";
}

?>