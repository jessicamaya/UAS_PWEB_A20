<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/stylesheet.css">
<link rel="stylesheet" href="../css/navbar2.css">


<body>
<?php require "../../app/views/template/navbar1.php" ?>
    
    <div class="diskusi-container">
        <div class="diskusi-tulisan">
            Forum Diskusi
        </div>
        
        <div class="diskusi-menu-container">
            <div class="diskusi-menu-kiri-container">
                <a href="../inputdiskusi/"><input type="button" value="Populer" class="diskusi-menu-box" style="color:white"></a>
                <span class="box-span"></span>
                <a href="diskusiku.html"><input type="button" value="Diskusimu" class="diskusi-menu-box" style="background-color: #CDCDCD;"></a>
            </div>
            <div class="diskusi-menu-kanan-container">
                <div class="diskusi-mulai-diskusi-tombol-container">
                    <input type="button" value="Mulai Diskusi" class="diskusi-mulai-diskusi-tombol">
                </div>
            </div>
        </div>

        <div class="diskusi-line"></div>

        <div class="diskusi-buat-main-container">
            <div class="diskusi-komentar-title">
                Tambahkan Diskusi
            </div>

            <div class="diskusi-buat-komentar-container">
                <form action="" method="POST">
                    <div><input type="text" name="judul" placeholder="Ketik disini..." id="diskusi-kotak-buat-judul-teks"></div>
                    <div><input type="text" name="isi" placeholder="Ketik disini..." class="diskusi-kotak-buat-komentar" id="diskusi-kotak-buat-komentar-teks"></div>
                    <div>
                    <br>
                    <a href="../forum/">
                    <button type="submit" name="input_diskusi" class="btn btn-dark" >kirim</button>
                    </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-logo"></div>
        <ul class="footer-menu">
            <li class="footer-menu-list"><a href="#">Bantuan</a></li>
            <li class="footer-menu-list"><a href="#">FAQ</a></li>
            <li class="footer-menu-list"><a href="#">Hubungi Kami</a></li>
        </ul>
    </div>
</body>
