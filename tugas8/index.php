<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Homepage</title>
 </head>
 <body>

 	<table width='80%' border=1>
 		<tr>
 			<th>NIM</th> <th>Nama</th> <th>E-mail</th> <th>No Hp</th>
 		</tr>
 		<?php 
 			while($user_data = mysqli_fetch_array($result)) {
 				echo "<tr>";
 				echo "<td>".$user_data['nim']."</td>";
 				echo "<td>".$user_data['nama']."</td>";
 				echo "<td>".$user_data['email']."</td>";
 				echo "<td>".$user_data['mobile']."</td>";
 				echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
 			}
 		 ?>
 	</table>
 	<br>
 	<a href="add.php"><input type="submit" name="tambah" value="Tambah"></a>
 </body>
 </html>