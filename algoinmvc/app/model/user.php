<?php 

$connector_db = mysqli_connect('localhost','root','','user');

function getdb($query){
    global $connector_db;
    $go = mysqli_query($connector_db,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($go)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($user){

    global $$connector_db;
    $username = htmlspecialchars($user["username"]);
    $password = htmlspecialchars($user["password"]);
    $email = htmlspecialchars($user["email"]);
    $namalengkap = htmlspecialchars($user["namalengkap"]);

    $query = "INSERT INTO user VALUES (NULL, '$username' , '$password', '$email', '$namalengkap')";

    mysqli_query($connector_db,$query);

    return mysqli_affected_rows($connector_db);

}

?>

