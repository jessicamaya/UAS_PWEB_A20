<?php


session_login();
if(isset($_POST['input_komentar'])){
    $isi = $_POST["isi"];
    $query = mysqli_query($conn,"INSERT INTO komentar VALUES(0,'$_SESSION[id_judul]','$_SESSION[username]','$isi)");
    echo "<script>alert('Komentar berhasil ditambahkan')</script>";

}

?>