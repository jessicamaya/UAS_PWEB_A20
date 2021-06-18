<?php

if(isset($_SESSION['login'] ) && isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['password']) ){
    header("Location: ".BASE_URL."/Public/pelajaran");
  }

?>