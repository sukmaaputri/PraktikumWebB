<?php 
include_once('db-con.php');
$database = new database();
session_start();
if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($database->login($email,$password))
    {
      header('location:index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "style.php"; ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>
<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <style>
                h1{
                text-align: center;
                /*ketebalan font*/
                font-weight: 300;
            }
            
            .tulisan_login{
                text-align: center;
                /*membuat semua huruf menjadi kapital*/
                text-transform: uppercase;
            }
            
            .kotak_login{
                width: 350px;
                background: #3498db;
                /*meletakkan form ke tengah*/
                margin-left: 150px;
                padding: 30px 20px;
                border-radius: 10px;
            }
            
            .kotak_login2{
                width: 250px;
                height: 250px;
                background: greenyellow;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }

            label{
                font-size: 11pt;
            }
            
            .form_login{
                /*membuat lebar form penuh*/
                box-sizing : border-box;
                width: 100%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 20px;
            }
            .tombol_login{
                background: #34495e;
                color: white;
                font-size: 11pt;
                width: 100%;
                border-radius: 3px;
                padding: 10px 20px;
            }
            .link{
                color: #232323;
                text-decoration: none;
                font-size: 10pt;
            }
            </style>
            <div class="kotak_login">
            <p class="tulisan_login">Form Login</p>
    
            <form action="" method="post" name="login">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form_login" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form_login" id="exampleInputPassword1" name="password" required>
    
                <button type="submit" class="tombol_login" name="login">Login</button>
            </form> 
            <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>    
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <div id="clear"></div>
        <div id="footer" style="margin-top: 30px;">
            <p>©2020 Sukma Putri</p>
        </div>

    </div>
</body>

</html>