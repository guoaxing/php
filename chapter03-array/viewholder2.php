<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
$orders=file("E:/wamp64/www/php/orders.txt");
$number_of_orders=count($orders);

	if($number_of_orders==0){
		echo "<p>Please try agian later</p>";
	}
	echo "<table border=\"1\">\n";
	echo "<tr>
			<th bgcolor=\"#ccc\">Order Date</th>
			<th bgcolor=\"#ccc\">Tires</th>
			<th bgcolor=\"#ccc\">Oil</th>
			<th bgcolor=\"#ccc\">Spark plug</th>
			<th bgcolor=\"#ccc\">Total</th>
			<th bgcolor=\"#ccc\">Address</th>
		 </tr>";

		for ($i=0; $i < $number_of_orders; $i++) { 
			
		}

?>
</body>
</html>