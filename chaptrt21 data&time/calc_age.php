<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$day=15;
$year=1993;
$month=2;

$bdayunix=mktime(0,0,0,$month,$day,$year);
$nowunix=time();
$ageunix=$nowunix-$bdayunix;
$age=floor($ageunix/(365*24*60*60));
echo "Age is $age";
?>
</body>
</html>