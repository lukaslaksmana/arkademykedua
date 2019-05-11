<?php
$data = ['name' 	  => 'Lukas Laksmana',
		 'address'    => 'Jl. Pala no 39A Lubang buaya',
		 'hobbies'    => ['Game and Futsal'],
		 'is_married' => false,
		 'school'	  => [['Sekolah Kejuruan'=>'SMK CyberMedia Jakarta','University'=> null]],
		 'skills'	  => (object)['Editing Video','Configuration Mikrotik'],
		];
function mengubahkejson($data){
	return json_encode($data);
}
	echo mengubahkejson($data);
?>
