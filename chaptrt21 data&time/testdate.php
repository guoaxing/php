<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
//test date()
date_default_timezone_set('Etc/GMT-8');
echo date('jS F Y ')."<br>";
echo date('z t T r ')."<br>";

//test mktime(),time()
echo mktime(12,0,0)."<br>";
echo mktime(0,0,0,1,1)."<br>";
echo mktime(0,0,0,1,1,70)."<br>";
$day=1;
echo mktime(0,0,0,1,$day+1,70)."<br>";
echo time()."<br>";

//test getdate()
$today=getdate();
print_r($today);
echo "<br>";
//test checkdate()
echo checkdate(2, 29, 2016)."<br>";
echo checkdate(2, 29, 2021)."<br>";

//test strftime()
echo strftime('%A<br>');
echo strftime('%x<br>');
echo strftime('%c<br>');
echo strftime('%Y<br>');
?>
</body>
</html>