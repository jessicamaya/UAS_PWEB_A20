<div class="navbar">
        <div class="navbar-kiri">
            <a href="halaman-akun.html">
                <div class="navbar-logo"> </div>
            </a>
            <ul class="navbar-menu-list">
                <li><a href="../pelajaran"> Pelajaran </a></li>
                <li><a href="../ambilkelas"> Kelas </a></li>
                <li><a href="../forum/"> Forum </a></li>
            </ul>
        </div>
        
    
        <div class="navbar-kanan">
            <div class="navbar-username">
                <?= $_SESSION['username'] ?>
            </div>
            <div></div>
            <form action="" method="POST">
                <button type="submit" name="logout" class="btn btn-light" style="margin: 10px">logout</button>
            </form>
            
            
        </div>
        
    </div>