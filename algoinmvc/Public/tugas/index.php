<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/navbar2.css">
<body>
<?php require "../../app/views/template/navbar1.php" ?>

    <div class="tulisan-tugaspython">TUGAS DASAR-DASAR PYTHON</div>
    <div class="main-tugas-python">
        <div class="main-tugas-judul">Materi-1 : Percabangan Dasar</div>
        <div class="tugas-line"></div>
        <div class="lorem-tugas">
            <p>Buat program untuk menebak serta mencetakkategori usia seseorang dengan kriteria:
                <br><br> 1. Jika Usia 5 tahun kebawah (usia
                <=5), maka dia adalah balita<br><br> 2. Jika Usia diatas 5 tahun ke atas sampai 12 tahun (usia>5 dan
                    usia
                    <=12), maka dia adalah anak anak <br><br> 3. Jika Usia diatas 12 tahun ke atas sampai 18 tahun
                        (usia>12 dan usia
                        <=18), maka dia adalah anak remaja <br><br> 4. Jika Usia diatas 18 tahun ke atas maka dia adalah
                            dewasa
            </p>
        </div>
        <div class="contoh-input">
            Contoh Input:
        </div>
        <div class="kotak1">
            <h3>17</h3>
        </div>
        <div class="contoh-output">
            Contoh Output:
        </div>
        <div class="kotak2">
            <h3>remaja</h3>
        </div>
        <div class="implementasi-kode">
            Implementasi Kode :
        </div>
        <div class="input-box">
            <form method="POST" action="">
                <span class="input-box-tugas-container"><input type="text" name="isijawaban" placeholder="#Tulis Disini" class="input-box-tugas"></span>
                <br>
        </div>
        <div class="tombol3" style = margin-left:45%>
                <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                <input type="hidden" name="id_jawaban" value="<?= $jawaban['id_jawaban'] ?>" >
                <button type="submit" name="kumpulkan">Kumpulkan</button>
        </div>
        </form>
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