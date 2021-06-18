<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="../css/navbar2.css">


<body>
<?php require "../../app/views/template/navbar1.php" ?>

    <div class="diskusi-container">
        <div class="diskusi-tulisan">
            Forum Diskusi
        </div>
        
        <div class="diskusi-menu-container">
            <div class="diskusi-menu-kiri-container">
                <input type="button" value="Populer" class="diskusi-menu-box" style="color:white"></a>
                <span class="box-span"></span>
                <input type="button" value="Diskusimu" class="diskusi-menu-box" style="background-color: #CDCDCD;"></a>
            </div>
            <div class="diskusi-menu-kanan-container">
                <div class="diskusi-mulai-diskusi-tombol-container">
                <a href="../inputdiskusi/"><input type="button" value="Mulai Diskusi" class="diskusi-mulai-diskusi-tombol"></a>
                </div>
            </div>
        </div>

        <div class="diskusi-line"></div>

        <div class="diskusi-main-container">
            <?php
                while($diskusi = mysqli_fetch_assoc($query)){ ?>
                <button class="diskusi-main-box btn" onclick="clicked(<?= $diskusi['id_diskusi'] ?>)">
                    <h2 class="diskusi-main-box-header"> <p href="../diskusi/"> <?= $diskusi['judul'] ?> </p></h2>
                    <div class="diskusi-main-box-text">
                    oleh <?= $diskusi['author'] ?>
                    </div>
                    <div class="diskusi-main-box-text">
                        <?= $diskusi['isi'] ?>
                    </div>
                </button>
                <?php
                }
            ?>
       
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

    <script src="js/JavaScript.js"></script>
    
    <script>
        function clicked(id_diskusi){
            let url_header = "<?= BASE_URL ?>/Public/diskusi/"+id_diskusi;
            window.location.assign(url_header);

        }
    </script>
</body>
</html>


