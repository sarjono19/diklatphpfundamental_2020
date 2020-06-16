<?php
		$nilai = 78;
		switch ($nilai) {
			case $nilai < 60 : echo "Tidak Lulus";
				break;
			case $nilai >= 60 && $nilai < 70: echo "Grade C";
				break;
			case $nilai >= 70 && $nilai < 80: echo "Grade B";
				break;
			case $nilai >= 80 && $nilai <= 100: echo "Grade A";
				break;
			default:
				echo "Anda salah memasukkan Nilai";
				break;
		}


