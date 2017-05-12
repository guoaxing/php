<?php 
	$products=array(array("TIR","Tires",100),
					array("OIL","Oil",10),
					array("SPK","Spark Plugs",4),);
	function compare($x,$y){

		/*if($x[1]<$y[1]){
			return -1;
		}else{
			return 1;
		}*/
		return $y[2]-$x[2];
	}
	usort($products, 'compare');
	for ($i=0; $i <3 ; $i++) { 
		for ($j=0; $j <3 ; $j++) { 
			echo $products[$i][$j]."|";
		}
		echo "<br/>";
	}
	/*$prices=array(100,4,10);
	sort($prices);
	echo $prices[0];*/
?>