<!DOCTYPE html>
<html>
<head>
  <title>Membuat Login Multi User Level</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Membuat Login Multi User Level</h1>
  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
  }
  ?>
  <div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>
    <form action="cek_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username .." required="required">

      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
      <input type="submit" class="tombol_login" value="LOGIN">
 
      <br/>
      <br/>
    </form> 
  </div>
  <div class="kotak_note">
    <h2>Note</h2>
    <h5>Admin</h5>Username : ardijelek<br>Password  : ardijelek
    <h5>Mahasiswa</h5>Username : sukma<br>Password  : aryadi123
  </div>
</body>
</html> 