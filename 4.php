<?php
$string		=array();
$string		=['P','R','O','G','R','A','M','M','E','R'];
for ($y=0; $y < 10; $y++){
	for ($x=0; $x < 10; $x++){
		$kanan = 9;
		if($y == $x){
			echo $string[$y]." ";
		}elseif ($kanan-$x == $y){
			echo $string[$y]." ";
		}else {
			echo "= ";
		}

	}
	echo "\n";
}
?>