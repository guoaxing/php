<!DOCTYPE html>
<?php
require("file_exception.php");
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
	echo "Total order is ".$totalamount."<br/>";
	echo "Address to ship is".$address."<br/>";
	$outputstring=$date."\t".$tireqty."tires\t".$oilqty."oil\t".$sparkqty."spark plugs\t".$totalqty."\t".$address."\n";
	//echo $outputstring;
	//test try catch throw exception
	try{
		if(!(@$fp=fopen("$DOCUMENT_ROOT/.../orders/orders.txt", 'ab')))
			throw new fileOpenException("Error",1);
		if(!flock($fp, LOCK_EX))
			throw new fileLockException();
		if(!fwrite($fp,$outputstring,strlen($outputstring)))
			throw new fileWriteException();
		flock($fp, LOCK_UN);
		fclose($fp);
		echo "<p>Order Written</p>";
	}
	catch(fileOpenException $foe){
		echo "Order files could not be opeded";
	}
	catch(Exception $e){
		echo "Please try again later";
	}	
	

	
	
	
?>
</body>


</html>