<?php 

include_once("koneksidatabase.php");

 if (isset($_POST['update'])) {
 	$id = $_POST['id'];
 	$nama = $_POST['nama'];
 	$alamat = $_POST['alamat'];

 	// Update user data

 	$result = mysqli_query($connect, "UPDATE user SET nama='$nama' ,alamat='$alamat' WHERE id=$id");

 	// redirect to homepage
 	header("location: viewdatabase.php");
 }
 ?>

 <?php

 	$id = $_GET['id_user'];

 	$result = mysqli_query($connect, "SELECT * FROM user WHERE id=$id");

 	while($user_data = mysqli_fetch_array($result))
 	{
 		$nama = $user_data['nama'];
 		$alamat = $user_data['alamat'];
 	}

 ?>

<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<br>
		<a href="viewdatabase.php">Lihat Data</a><br/><br/>

	<form name="update_user" method="post" action="editdatabase.php">
	<table border=0>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
		</tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
		</tr>
		<tr>
			<td>
				<input type="hidden" name="id" value="<?php echo $_GET['id_user'];?>">
			</td>
			<td>
				<input type="submit" name="update" value="update">
			</td>
		</tr>
	</table>
</form>


