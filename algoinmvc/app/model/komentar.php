<?php 

$connector_db = mysqli_connect('localhost','root','','komentar');

function getdb($query){
    global $connector_db;
    $go = mysqli_query($connector_db,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($go)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($komentar){

    global $$connector_db;
    $id_judul = htmlspecialchars($komentar["id_judul"]);
    $username = htmlspecialchars($komentar["username"]);
    $isi = htmlspecialchars($komentar["isi"]);

    $query = "INSERT INTO komentar VALUES (NULL, '$id_judul' , '$username', '$isi')";

    mysqli_query($connector_db,$query);

    return mysqli_affected_rows($connector_db);

}

?>

