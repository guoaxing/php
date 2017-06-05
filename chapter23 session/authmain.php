<?php
session_start();
if(isset($_POST['uesrid'])&&isset($_POST['password']))
{
	$uesrid=$_POST['uesrid'];
	$password=$_POST['password'];
	$db_conn=new mysqli('localhost','webauth','webauth','auth');
	if(mysqli_connect_errno()){
		echo "Connection to database failed";
		exit();
	}
	$query='select * from authorized_users'.
			"where name='$uesrid'"."and password=sha1('$password')";
	$result=$db_conn->query($query);
	if($result->num_rows>0){
		$_SESSION['valid_user']=$uesrid;

	}
	$db_conn->close();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Home Page</h1>
<?php
if(isset($_SESSION['valid_user'])){
	echo 'You are logged in as:'.$_SESSION['valid_user']."<br>";
	echo '<a href="logout.php">Log out</a><br>';
}
else{
if (isset($uesrid)) {
	echo "Could not log you in .<br>";
}else{
	echo "You are not logged in.<br>";
}
echo '<form method="post" action="authmain.php">';
echo '<table>';
echo '<tr><td>Userid:</td>';
echo '<td><input type="text" name="uesrid"></td></tr>';
echo '<tr><td>password:</td>';
echo '<td><input type="password" name="password"></td></tr>';
echo '<tr><td colspan="2" align="center">';
echo '<input type="submit" value="log in"></td></tr>';
echo '</table></form>';
}
?>

</body>
</html>