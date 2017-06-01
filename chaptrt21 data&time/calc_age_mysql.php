<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$day=15;
$month=2;
$year=1993;

$bdayISO=date("c",mktime(0,0,0,$month,$day,$year));
$db=mysqli_connect('localhost','root','');
$res=mysqli_query($db,"select datediff(now(),'$bdayISO')");
$age=mysqli_fetch_array($res);

echo "Age is ".floor($age[0]/365.25);
?>

</body>
</html>