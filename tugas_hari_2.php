<?php

//tugas hari ini:
//1. siswa budi memiliki nilai matematika 70, bhs indonesia 80, bhs inggris 90
//2. siswa tono memiliki nilai matematika 60, bhs indonesia 70, bhs inggris 80
//3. siswa gadis memiliki nilai matematika 55, bhs indonesia 75, bhs inggris 95
//tampilkan nilai matematika yang nilainya >= 60

	$nilai = [
		'budi' => [
			'matematika' =>70, 'indonesia' => 80, 'bhs_inggris' =>90
		],
		'tono' => [
			'matematika' =>60, 'indonesia' => 70, 'bhs_inggris' =>80
		],
		'gadis' => [
			'matematika' =>55, 'indonesia' => 75, 'bhs_inggris' =>95
		]
	];
	
	foreach ($nilai as $key => $value) {
		foreach ($value as $k => $v) {
			if ($k == 'matematika' && $v ==60) {
				echo "Nilai Matematika yang dapat nilai 60 adalah <br>";
				echo 'Nilai ' .$k. '  '.$key. ' Adalah '. $v. '<br>';
				//break;
			}
			//echo 'Nilai ' .$k. '  '.$key. ' Adalah '. $v. '<br>';
		}
		//echo "<br>";
	}
