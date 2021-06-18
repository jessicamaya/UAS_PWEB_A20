<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/stylesheet.css">

<body>
<div class="nav-menu-utama"">
        <div class="nav-menu-utama-box">
            <div class="nav-utama-logo">
                <img src="../images/logoalgoin.png" width="110" height="60">
            </div>
            <div class="nav-utama-tombol-container">
                
                <a href="../login"><button data-toggle="modal-login" class="nav-utama-tombol">MASUK</button></a>
                <span class="nav-utama-jarak"></span>
                <a href="../daftar"><button data-toggle="modal-login" class="nav-utama-tombol" id="nav-utama-tombol2">DAFTAR</button></a>
            </div>
        </div>
    </div>
<div class="container" style="margin-bottom: -30vh ; margin-top:10px">
        <div class="card">
            <div class="judul">
                <center>
                <h2>MASUK</h2>
                <br>
                </center>
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="form-input">
                        <center>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php
                        if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" id="username" placeholder="Username" required>
                        </center>
                    </div>
                    <br>
                    <div class="form-input">
                    <center>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password_login" value="<?php
                        if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" id="password" placeholder="Password" required >
                        </center>
                        <br>
                    </div>
                    <div class="remember">
                    <center>
                        <input type="checkbox" class="form-check-input" name="rm" id="rm">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </center>
                    </div>
                    <br>
                    <center>
                        <button type="submit" name="login" class="btn btn-light">Login</button><br><br>
                        <a href="../daftar"
                        <button type="submit" name="register" class="btn btn-dark">Register</button></a>
                    </center>

                </form>
            </div>
        </div>
    </div>
    <div class="footer" style= "margin-top: 200px">
        <div class="footer-logo"></div>
        <ul class="footer-menu">
            <li class="footer-menu-list"><a href="#">Bantuan</a></li>
            <li class="footer-menu-list"><a href="#">FAQ</a></li>
            <li class="footer-menu-list"><a href="#">Hubungi Kami</a></li>
        </ul>
    </div>
</body>
    

