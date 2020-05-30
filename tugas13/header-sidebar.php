<div id="atas">
    <img src="gambar/banner.jpg" alt="" style="height: 250px; width: 700px;">
    <p style="color: white; font-weight: bolder; color: #244D49;
    text-shadow: 3px 3px 0px #D7DACC, 0px 0px 0px rgba(0, 0, 0, 0.1);">SISTEM INFORMASI PERPUSTAKAAN UDAYANA</p>
</div>
<div id="sidebar">
    <img src="gambar/logo.png" alt="" style="height: 240px; width: 240px; ">
    <div class="populer">
        <p><?php
        if(isset($_SESSION['is_login'])){
            if($_SESSION['role']=="user")
                echo $_SESSION['nama'];
            elseif($_SESSION['role']=="admin")
                echo $_SESSION['nama'];
            elseif($_SESSION['role']=="suadmin")
                echo "Super Admin";
        }
        else{
            echo "Anda Belum Login!";
        }
        ?></p>
    </div>
    <ul>
    <?php
        if(isset($_SESSION['is_login'])){
            if($_SESSION['role'] == "user"){
                echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"aturan.php\">ATURAN</a></li>
                <li><a href=\"profil.php\">PROFIL</a></li>
                <li><a href=\"peminjaman-user.php\">AKTIVITAS</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>";
            }
            elseif($_SESSION['role'] == "admin"){
                echo "<li><a href=\"home.php\">HOME</a></li>
                <li><a href=\"category.php\">KATEGORI</a></li>
                <li><a href=\"peminjaman-admin.php\">PEMINJAMAN</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }
            elseif($_SESSION['role'] == "suadmin"){
                echo "<li><a href=\"admin.php\">ADMIN</a></li>
                <li><a href=\"user.php\">USER</a></li>
                <li><a href=\"stok.php\">STOK</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }
        }
        else{
            echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"aturan.php\">ATURAN</a></li>
                <li><a href=\"login.php\">PROFIL</a></li>
                <li><a href=\"login.php\">LOGIN</a></li>";
        }
        ?>
        
    </ul>

</div>
<div id="menu">
    <ul>
    <?php
        if(isset($_SESSION['is_login'])){
            if($_SESSION['role'] == "user"){
                echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"aturan.php\">ATURAN</a></li>
                <li><a href=\"profil.php\">PROFIL</a></li>
                <li><a href=\"peminjaman-user.php\">AKTIVITAS</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>";
            }
            elseif($_SESSION['role'] == "admin"){
                echo "<li><a href=\"home.php\">HOME</a></li>
                <li><a href=\"category.php\">KATEGORI</a></li>
                <li><a href=\"peminjaman-admin.php\">PEMINJAMAN</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }
            elseif($_SESSION['role'] == "suadmin"){
                echo "<li><a href=\"admin.php\">ADMIN</a></li>
                <li><a href=\"user.php\">USER</a></li>
                <li><a href=\"stok.php\">STOK</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }
        }
        else{
            echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"aturan.php\">ATURAN</a></li>
                <li><a href=\"login.php\">PROFIL</a></li>
                <li><a href=\"login.php\">LOGIN</a></li>";
        }
        ?>
    </ul>
</div>