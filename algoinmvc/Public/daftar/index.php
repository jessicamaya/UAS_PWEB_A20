<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/stylesheet.css">

<body>
<div class="nav-menu-utama">
        <div class="nav-menu-utama-box">
            <div class="nav-utama-logo">
                <img src="../images/logoalgoin.png" width="110" height="60">
            </div>
            <div class="nav-utama-tombol-container">
                
                <a href="../login"><button data-toggle="modal-login" class="nav-utama-tombol">MASUK</button></a>
                <span class="nav-utama-jarak"></span>
                <button data-toggle="modal-login" class="nav-utama-tombol" id="nav-utama-tombol2">DAFTAR</button>
            </div>
        </div>
    </div>

<div class="container" style="margin-bottom: -20vh">
        <div class="card" style="margin-top: 10px">
            <div class="judul">
                <center>
                <h2>DAFTAR</h2>
                </center>
            </div>
            <div class="card-body">
                <form action="POST" method="post">
                    <div class="form-input">
                        <center>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="" id="username" placeholder="Username" required>
                        </center>
                    </div>
                    <br>
                    <div class="form-input">
                    <center>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password_login" value="" id="password" placeholder="Password" required >
                        </center>
                        <br>
                    </div>
                    <div class="form-input">
                    <center>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value=""  id="email" placeholder="email" required >
                        </center>
                        <br>
                    </div>
                    <div class="form-input">
                    <center>
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="namalengkap" value="" id="namalengkap" placeholder="nama lengkap" required >
                        </center>
                        <br>
                    </div>
                    <div class="remember">
                    <center>
                        <input style="" type="checkbox" class="form-check-input" name="rm" id="rm">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </center>
                    </div>
                    <br>
                    <center>
                        <button type="submit" name="register" class="btn btn-dark">Register</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <div class="footer"style= "margin-top: 150px">
        <div class="footer-logo"></div>
        <ul class="footer-menu">
            <li class="footer-menu-list"><a href="#">Bantuan</a></li>
            <li class="footer-menu-list"><a href="#">FAQ</a></li>
            <li class="footer-menu-list"><a href="#">Hubungi Kami</a></li>
        </ul>
    </div>
</body>