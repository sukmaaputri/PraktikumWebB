<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagination dengan PHP</title>
    <!-- Load File bootstrap.min.css yang ada difolder css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    .align-middle{
      vertical-align: middle !important;
    }
    </style>
  </head>
  <body>
    <!-- Membuat Menu Header / Navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color: white;"><b>Pagination dengan PHP</b></a>
    </nav>
    
    <div style="padding: 0 15px;">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th class="text-center">ID</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
          </tr>
          <?php
          // Include / load file koneksi.php
          include "config.php";
          
          // Cek apakah terdapat data page pada URL
          $page = (isset($_GET['page']))? $_GET['page'] : 1;
          
          $limit = 5; // Jumlah data per halamannya
          
          // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
          $limit_start = ($page - 1) * $limit;
          
          // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
          $sql = $pdo->prepare("SELECT * FROM users LIMIT ".$limit_start.",".$limit);
          $sql->execute(); // Eksekusi querynya
          
          $id = $limit_start + 1; // Untuk penomoran tabel
          while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
          ?>
            <tr>
              <td class="align-middle text-center"><?php echo $id; ?></td>
              <td class="align-middle"><?php echo $data['nim']; ?></td>
              <td class="align-middle"><?php echo $data['nama']; ?></td>
              <td class="align-middle"><?php echo $data['alamat']; ?></td>
            </tr>
          <?php
            $id++; // Tambah 1 setiap kali looping
          }
          ?>
        </table>
      </div>
      
      <!--
      -- Buat Paginationnya
      -- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
      -->
      <ul class="pagination">
        <!-- LINK FIRST AND PREV -->
        <?php
        if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
        ?>
          <a href="#">First</a>
          <a href="#">&laquo;</a>
        <?php
        }else{ // Jika page bukan page ke 1
          $link_prev = ($page > 1)? $page - 1 : 1;
        ?>
          <a href="index.php?page=1">First</a>
          <a href="index.php?page=<?php echo $link_prev; ?>">&laquo;</a>
        <?php
        }
        ?>
        
        <!-- LINK NUMBER -->
        <?php
        // Buat query untuk menghitung semua jumlah data
        $sql2 = $pdo->prepare("SELECT COUNT(*) AS jumlah FROM users");
        $sql2->execute(); // Eksekusi querynya
        $get_jumlah = $sql2->fetch();
        
        $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
        $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
        $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
        $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
        
        for($i = $start_number; $i <= $end_number; $i++){
          $link_active = ($page == $i)? ' ' : '';
        ?>
        <?php echo $link_active; ?> <a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        }
        ?>
        
        <!-- LINK NEXT AND LAST -->
        <?php
        // Jika page sama dengan jumlah page, maka disable link NEXT nya
        // Artinya page tersebut adalah page terakhir 
        if($page == $jumlah_page){ // Jika page terakhir
        ?>
          <a href="#">&raquo;</a>
          <a href="#">Last</a>
        <?php
        }else{ // Jika Bukan page terakhir
          $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
        ?>
          <a href="index.php?page=<?php echo $link_next; ?>">&raquo;</a>
          <a href="index.php?page=<?php echo $jumlah_page; ?>">Last</a>
        <?php
        }
        ?>
      </ul>
    </div>
  </body>
</html>