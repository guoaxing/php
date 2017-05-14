<?php 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	$toaddress="18052135@qq.com";
	$subject="Feedback from web site";
	$mailcontent="Customer name:".$name."\n".
				 "Customer email:".$email."\n".
				 "Customer comments:".$feedback."\n";
	$fromaddress="From:18052135@qq.com";
	/*mail($toaddress, $subject, $mailcontent,$fromaddress);*/
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts-Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback has been sent</p>
<?php
echo "Mailcontent is :$mailcontent"."<br/>";
echo "with nl2br"."<br/>";
// test nl2br()
echo nl2br($mailcontent)."<br/>";
// test ucwords()
 echo ucwords(nl2br($mailcontent))."<br/>";
// test addslashes()
 echo addslashes($mailcontent)."<br/>";
//test stirpslashes
 echo stripslashes(addslashes($mailcontent))."<br/>";
 //test explode()
 $email_array=explode('@',$email);
 foreach ($email_array as $value) {
 	echo "$value"."<br/>";
 }
 //test join()/implode()
 $nums=array(1,2,3);
 $nums_array=implode("-",$nums);
 echo "$nums_array"."<br/>";
//test strtok()
 $token=strtok($feedback, '"');
 echo "$token"."<br/>";
 while ($token!="") {
 	$token=strtok(" ");
 	echo "$token"."<br/>";
 }
//test substr()
 $test='Your name is guo';
 echo substr($test, 2)."<br/>";
 echo substr($test, -3)."<br/>";
 echo substr($test, 5,4)."<br/>";
  echo substr($test, 5,-4)."<br/>";
//test strcmp()
  $str1="2";
  $str2="12";
  echo strcmp($str1, $str2)."<br/>";
  echo strcasecmp($str1, $str2)."<br/>";
  echo strnatcmp($str1, $str2)."<br/>";
  //test strstr()
  $target="I believe i can fly";
  echo strchr($target,"can")."<br/>";
  //test strpos()
 $target="Hello World";
 echo strpos($target, "o")."<br/>";
 echo strpos($target, "o",5)."<br/>";
 echo strrpos($target, "o")."<br/>";
 //test str_replace()
 $target="Hello World";
 echo str_replace("l", "a", $target)."<br/>";
 //test substr_replace()
 $target1="Hello World";
 echo substr_replace($target1, "a", 3,7);
?>

</body>
</html>