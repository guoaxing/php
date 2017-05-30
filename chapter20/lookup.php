<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$symbol='baidu';
$url='http://www.baidu.com';
$contents=file_get_contents($url);
echo "$contents";
/*if(!($contents=file_get_contents($url))){
	die('Failure to open'.$url);
}

list($symbol,$quote,$date,$time)=explode(',', $contents);
$date=trim($date,'"');
$time=trim($time,'"');
echo "$symbol"."<br>";
echo "$quote"."<br>";

echo "$time"."<br>";

echo "$date"."<br>";
echo 'This information retrieved from<br><a href="'.$url.'">'.$url.'</a>';*/
?>
</body>
</html>>