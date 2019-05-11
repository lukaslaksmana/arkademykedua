<?php
	function sort_array($array){
		sort($array);
		$arr = array();
		foreach($array as $sorting){
			sort($sorting);
			$arr[] = $sorting;
		}return $arr;
		}
		$array = array(
			array(
				"w",
				"x",
				"e"),
			array(
				"e",
				"g",)
				);
print_r(sort_array($array));