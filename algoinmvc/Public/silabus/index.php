<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/navbar2.css">

<body>
<?php require "../../app/views/template/navbar1.php" ?>

    <div class="tulisan-silabusmateri">Silabus Materi</div>
    <div class="main-silabus">
        <div class="kotak-abu">
            <div class="kotak-kiri">
                <div class="dasar-silabus">Dasar-Dasar Python</div>
                <div class="level-silabus">Level Pemula</div>
                <div class=tombol-silabus ">
                    <a href="../ambilkelas/">
                        <button type="button " class="tombol-ambilkelas ">Ambil Kelas</button>
                    </a>
                </div>
            </div>
            <div class="kotak-kanan">
                <div class="minggu-1">Minggu 1</div>
                <ol>
                    <li class="minggu1">Tipe Data dan Operator</li>
                    <li class="minggu1">Data Flow</li>
                    <li class="minggu1">Method Dasar</li>
                    <li class="minggu1">Format Output</li>
                </ol>
            </div>
            <div class="kotak-panah">
                <a href="../silabus2">
                    <img src="../images/panahkanan.png" width="50" height="50">
                </a>
            </div>
        </div>
        <div class="kotak-img">
            <img src="../images/silabus.png" class="img-silabus">
        </div>
    </div>
    

    <br><br><br>
    <div class="footer">
        <div class="footer-logo"></div>
        <ul class="footer-menu">
            <li class="footer-menu-list"><a href="#">Bantuan</a></li>
            <li class="footer-menu-list"><a href="#">FAQ</a></li>
            <li class="footer-menu-list"><a href="#">Hubungi Kami</a></li>
        </ul>
    </div>
</body>