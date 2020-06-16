<?php

	function penjumlahan($a, $b) {
		$c = $a + $b;	
		return 'Hasil Penjumlahan' .$a. ' dan'.$b.' Adalah'.$c;
	}

	function pengurangan($a, $b) {
		$c = $a - $b;
		return 'Hasil Pengurangan' .$a. ' dan'.$b.' Adalah'.$c;
	}
	
	function jalan() {
		echo "Mobil Jalan";
	}

	function berhenti() {
		echo "<br>Mobil Berhenti";
	}

	function shift_up($gigi = 'N'){
	if($gigi == 'N') $gigi = 1;
	else $gigi = $gigi +1;
	return $gigi;
}

echo shift_up();
echo shift_up(2);


//	jalan();
//	berhenti();

//	$x = 50;
//	$y = 10;
//	$hasil = pengurangan($x,$y);
//	echo $hasil;

?>