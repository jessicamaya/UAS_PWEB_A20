<?php
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/algoinmvc";
define('BASE_URL','http://localhost/algoinmvc');
$BASE_URL = BASE_URL;

session_start();
require "$absolute_path/app/model/connector_db.php";
require "$absolute_path/app/core/app.php";
require "$absolute_path/app/views/template/header.php";
?>