<!DOCTYPE html>
<?php
$tireqty=$_POST['tireqty'];
$oilqty=$_POST['oilqty'];
$sparkqty=$_POST['sparkqty'];
$address=$_POST['address'];
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$date=date('H:i,jS F Y');
?>
<html>
<head>
	<title>Bob's Auto Parts-Order Results</title>
</head>
<body>

<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
	echo "<p>Order processed at ".$date."</p>";
	echo "<p>Your order is as follows:</p>";
	$totalqty=$tireqty+$oilqty+$sparkqty;
	echo "Items ordered:".$totalqty."<br/>";
	echo $tireqty .' tires<br/>';
	echo $oilqty .' bottles of oil<br/>';
	echo $sparkqty .' spark plugs<br/>';
	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);
	$totalamount=$tireqty*TIREPRICE+$oilqty*OILPRICE+$sparkqty*SPARKPRICE;
	$totalamount=number_format($totalamount,2,".","");
	echo "Total order is ".$totalamount;
	echo "Address to ship is".$address;
	$outputstring=$date."\t".$tireqty."tires\t"+$oilqty."oil\t".$sparkqty."spark plugs\t".$address."\n";
	@$fp=fopen("E:/wamp64/www/orders.txt", 'ab');
	flock($fp, LOCK_EX);
	if(!$fp){
		echo "<p>Please try agian later</p>";
		exit;
	}
	fwrite($fp,$outputstring,strlen($outputstring));
	flock($fp, LOCK_UN);
	fclose($fp);
	echo "<p>Order Written</p>";
	
?>
</body>


</html>