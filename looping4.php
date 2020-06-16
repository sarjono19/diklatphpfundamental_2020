<?php 
			$array = array( 1, 2, 3, 4, 5); 
			$lengthArray = count($array);
			echo "Panjang Array = $lengthArray";
			foreach( $array as $value ) { 
				echo "Value is $value <br />"; 
			} 


echo "<br>";
for ($i=0; $i < $lengthArray ; $i++) { 
	echo "Value = $array[$i] ,";
}