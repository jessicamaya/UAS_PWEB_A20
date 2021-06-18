<?php 

$connector_db = mysqli_connect('localhost','root','','jawaban');

function getdb($query){
    global $connector_db;
    $go = mysqli_query($connector_db,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($go)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($jawaban){

    global $$connector_db;
    $id_user = htmlspecialchars($jawaban["id_user"]);
    $isijawaban = htmlspecialchars($jawaban["isijawaban"]);

    $query = "INSERT INTO jawaban VALUES (NULL, '$id_user' , '$isijawaban')";

    mysqli_query($connector_db,$query);

    return mysqli_affected_rows($connector_db);

}

?>

