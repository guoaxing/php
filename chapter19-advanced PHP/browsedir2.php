<!DOCTYPE html>
<html>
<head>
	<title>Browse Directories</title>
</head>
<body>
<h1>Browsing</h1>
<?php 
	$dir=dir('E:/wamp64/www/uploads/');


	echo "<p>Handle is $dir->handle</p>";
	echo "<p>Upload directory is $dir->path</p>";
	echo "<p>Directory Listing:</p><ul>";


	
	while (false!==($file=$dir->read())) {
		# code...
		if($file!="."&&$file!=".."){
			echo "<li>$file</li>";
		}
	}
	echo "</ul>";
	$dir->close();
?>
</body>
</html>