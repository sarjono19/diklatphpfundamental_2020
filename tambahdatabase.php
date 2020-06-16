<html>
<head>
	<title>Add User</title>
</head>

<body>
	<br>
		<a href="viewdatabase.php">Lihat Data</a><br/><br/>
	<form action="tambahdatabase.php" method="post" name="form1">
	<table widht='25%' border=0>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="add">
			</td>
		</tr>
	</table>
</form>

<?php 

// cek if form submited , insert into users table
 if (isset($_POST['submit'])) {
 	$nama = strtoupper($_POST['nama']);
 	$alamat = strtoupper($_POST['alamat']);

 	// include database connection file
 	include_once("koneksidatabase.php");

 	$result = mysqli_query($connect, "INSERT INTO user(nama,alamat) value('$nama','$alamat')");

 	echo "User added successfully. <a href='viewdatabase.php'>View User </a>";
 }
 ?>
