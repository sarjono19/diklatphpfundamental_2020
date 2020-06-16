<?php
	$gaji = [
		'budi' =>200000,
		'tono' =>100000,
		'gadis' =>250000
	];

	echo "Gaji Budi = $gaji[budi] <br>";
	echo "Gaji Tono = $gaji[tono] <br>";
	echo "Gaji Gadis = $gaji[gadis] <br>";

	echo "<br>";

	foreach ($gaji as $key => $value) {
		echo "Gaji $key adalah $value <br>";
	}