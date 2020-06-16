<?php
	$nilai = [
		'budi' => [
			'matematika' =>70, 'fisika' => 80, 'biologi' =>75
		],
		'tono' => [
			'matematika' =>90, 'fisika' => 50, 'biologi' =>80
		],
		'gadis' => [
			'matematika' =>60, 'fisika' => 80, 'biologi' =>90
		]
	];

	echo 'Nilai Matematika Budi adalah' .$nilai['budi']['matematika'];


	echo "<br> Cetak Pakai Foreach <br>";
	foreach ($nilai as $key => $value) {
		foreach ($value as $k => $v) {
			echo 'Nilai ' .$k. '  '.$key. ' Adalah '. $v. '<br>';
		}
		echo "<br>";
	}

//	echo "<br>";

//	foreach ($gaji as $key => $value) {
//		echo "Gaji $key adalah $value <br>";
//	}