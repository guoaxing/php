<!DOCTYPE html>
<html>
<head>
	<title>Book Entry Result</title>
</head>
<body>
<h1>Book Entry Result</h1>
<?php 
	$isbn=$_POST['isbn'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$price=$_POST['price'];

	if(!$isbn||!$title||!$author||!$price){
		echo "You have not enterted all the required details";
		exit;
	}

	if(!get_magic_quotes_gpc()){
		$isbn=addslashes($isbn);
		$title=addslashes($title);
		$price=addslashes($price);
		$author=addslashes($author);
	}

	@ $db=new mysqli('localhost','bookorama','bookorama123','books');

	if(mysqli_connect_errno()){
		echo "Could not connect to database";
		exit;
	}

	$query="insert into books values
			('".$isbn."','".$author."','".$title."','".$price."')";
	$result=$db->query($query);
	if($result){
		echo $db->affected_rows." book inserted into database";
	}else{
		echo "An error has occured";
	}
?>
</body>
</html>