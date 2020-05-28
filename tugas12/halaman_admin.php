<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
 
  ?>
    <div class="wrap">
        <div class="kiri">
            <div class="logo">
                <img src="img/logo.png">
                
            </div>
            <div class="judul">
                Buku Populer
            </div>
            <div class="menubar">
                <p class="dashed">Harry Poter</p>
                <p class="dashed">NKCTHI</p>
                <p class="dashed">HTML</p>
                <p class="dashed">PHP</p>
            </div>
        </div>
        <div class="kanan">
            <div class="header">
                <img src="img/rektorat.jpg">
                <a href="logout.php">LOGOUT</a> 
                <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?>
            </div>
            <div class="menu">
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Javascript</a></li>             
            </ul>
            </div>
            <div class="desc">
                <h2>Selamat Datang</h2>
                <p class="text">Ini adalah halaman web dari perpustakaan udayana, dimana Anda akan mendapat kemudahan untuk mencari berbagai jenis buku yang ada di perpustakaan Universitas Udayana. <br> Semoga Web ini dapat memudahkan Anda untuk mengetahui informasi buku yang akan Anda cari.</p>
                <h2>Galeri</h2>
                <img src="img/perpus.jpg">
                <img src="img/perpus.jpg">
                <img src="img/perpus.jpg">
            </div>
        </div>
        <div class="bawah">
                <p class="bawah">&copy;Copyright2017, Perpustakaan Udayana <br> Universitas Udayana</p> 
        </div>
    </div>
</body>
</html>