<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
@$fp=fopen("E:/wamp64/www/php/orders.txt", 'rb');
	
	if(!$fp){
		echo "<p>Please try agian later</p>";
		exit;
	}
	while (!feof($fp)) {
		$order=fgetS($fp,100);
		
		echo $order."<br/>";
		}
		echo ftell($fp)."<br/>";
		 rewind($fp)."<br/>";
		echo ftell($fp)."<br/>";
		fclose($fp);



?>
</body>
</html>