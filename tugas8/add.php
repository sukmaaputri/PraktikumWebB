<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php"><input type="submit" name="home" value="Go to Home"></a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
        	<tr> 
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>No Hp</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
    	$nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(nim,nama,email,mobile) VALUES('$nim','$nama','$email','$mobile')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>