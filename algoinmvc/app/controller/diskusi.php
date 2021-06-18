<?php

session_login();
$query = mysqli_query($conn,"SELECT * FROM diskusi WHERE id_diskusi = $page->method");
$diskusi = mysqli_fetch_assoc($query);

$get_comment = mysqli_query($conn,"SELECT * FROM komentar order by id_komentar desc");

if(isset($_POST['input_komentar'])){
    // var_dump($_POST);
    $isi = $_POST["isi"];
    $username = $_POST['username'];
    $id_diskusi = $_POST['id_diskusi'];

    $query = mysqli_query($conn,"INSERT INTO komentar VALUES(0,'$id_diskusi','$username','$isi')");
    echo "<script>alert('Berhasil menambahkan komentar')</script>";

}

?>