<?php 

$connector_db = mysqli_connect('localhost','root','','diskusi');

function getdb($query){
    global $connector_db;
    $go = mysqli_query($connector_db,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($go)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($diskusi){

    global $$connector_db;
    $id_user = htmlspecialchars($diskusi["id_user"]);
    $judul = htmlspecialchars($diskusi["judul"]);
    $author = htmlspecialchars($diskusi["author"]);
    $isi = htmlspecialchars($diskusi["isi"]);

    $query = "INSERT INTO diskusi VALUES (NULL, '$id_user' , '$judul', '$author', '$isi')";

    mysqli_query($connector_db,$query);

    return mysqli_affected_rows($connector_db);

}

?>

