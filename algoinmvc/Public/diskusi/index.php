<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/stylesheet.css">
<link rel="stylesheet" href="../css/navbar2.css">

<body>
<?php require "../../app/views/template/navbar1.php" ?>

<div class="diskusi-container">
        <div class="diskusi-tulisan">
            <center>
            Forum Diskusi
            </center>
        </div>
        <div class="diskusi-line"></div>
<div class="diskusi-main-container">  
        <div class="diskusi-main-box">
            <h2 class="diskusi-main-box-header"> <a href="../diskusi/"> <?= $diskusi['judul'] ?> </a></h2>
            <div class="diskusi-main-box-text">
            oleh <?= $diskusi['author'] ?>
            </div>
            <div class="diskusi-main-box-text">
                <?= $diskusi['isi'] ?>
            </div>
        </div>
</div>
<div class="diskusi-buat"style="padding-left:400px">
            <div class="diskusi-komentar-title"style=margin-left:100px>
                Tambahkan Komentar
            </div>

            <div class="diskusi-buat-komentar-container">
                <form action="" method="POST">
                    <div>
                        <textarea name="isi" placeholder="Ketik disini.." class="diskusi-kotak-buat-komentar" id="diskusi-kotak-buat-komentar-teks"style=width:55%></textarea>
                    </div>
                    <div>
                    <br>
                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                    <input type="hidden" name="id_diskusi" value="<?= $diskusi['id_diskusi'] ?>" >
                    <button type="submit" name="input_komentar"style= "margin-left:200px" class="btn btn-dark">kirim</button>
                    </div>
                </form>
            </div>
        </div>
</div>
<form name="form1" method="POST" action="">
		<table class="table table-dark" style="width: 600px; margin-left:370px;">
            <tr>
                <td>Nama</td>
                <td>isi komentar</td>
            </tr>
            <?php
                while($comment = mysqli_fetch_assoc($get_comment)){ ?>
                    <tr class="table-light">
                        <td><?= $comment['username'] ?></td>
                        <td> <?= $comment['isi'] ?> </td>
                    </tr>
                <?php
                }
            ?>
        </table>
	</form>
    <div class="footer">
        <div class="footer-logo"></div>
        <ul class="footer-menu">
            <li class="footer-menu-list"><a href="#">Bantuan</a></li>
            <li class="footer-menu-list"><a href="#">FAQ</a></li>
            <li class="footer-menu-list"><a href="#">Hubungi Kami</a></li>
        </ul>
    </div> 
</body>