<html>
<head>
	<title></title>
</head>
<body>
	<p><b>KATAKAN CINTA</b></p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <input type="text" name="nama_cinta" placeholder="Siapa yang anda suka ?" required><br>
	  <input type="number" name="itung" placeholder="Seberapa dalam ?" required><br>
	  <button type="submit"> Katakan </button>
	</form><br>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	
	    	$nama_cinta = $_POST['nama_cinta'];
	    	$itung = $_POST['itung'];

			if ($itung > 0) {
				echo "nama_cinta : $nama_cinta | itung : $itung <br><br>";
				for ($i=1; $i <= $itung ; $i++) { 
					echo "Saya cinta <b>".$nama_cinta."</b> <br>";
				}
			}else{
				echo "Isi lebih dari 0";
			}
		}

		?>
</body>
</html>