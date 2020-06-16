<html>
<head>
	<title>Add User</title>
</head>

<body>
	<br>
		<a href="tugas_hari_4_view.php">Lihat Data</a><br/><br/>
	<form action="tugas_hari_4_tambah.php" method="post" name="form2">
	<table widht='25%' border=0>
		<tr>
			<td>No Induk</td>
			<td><input type="text" name="no_induk"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><input type="text" name="no_telepon"></td>
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
</body>
</html>


<?php 

//cek if form submited , insert into users table

 if (isset($_POST['submit'])) {
 	$no_induk = $_POST['no_induk'];
 	$nama = strtoupper($_POST['nama']);
 	$no_telepon = $_POST['no_telepon'];
 	$alamat = strtoupper($_POST['alamat']);

 	// include database connection file
 	include_once("koneksidatabase.php");

 	$result = mysqli_query($connect, "INSERT INTO siswa(no_induk,nama,no_telepon,alamat) value('$no_induk','$nama','$no_telepon','$alamat')");

 	echo "User added successfully. <a href='tugas_hari_4_view.php'>View User </a>";
 }
 ?>
