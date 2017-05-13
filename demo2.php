<?php 
	/*$array=array(1,2,3);
	$value=end($array);
	while ($value) {
		echo $value."<br/>";
		$value=prev($array);
	}*/
	/*$array=array(4,5,1,2,3,1,2,1,5,4,3,1,4,5,3,3);
	$ac=array_count_values($array);
	foreach ($ac as $key => $value) {
		echo $key."-".$value."<br/>";
	}*/
	$array=array("true"=>"1","false"=>"0");
	extract($array);
	echo $true." ".$false;
?>