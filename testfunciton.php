 <?php
	//phpinfo();
	function my_func(){
?>
<?php
	echo "hello world<br/>";		
	}
?>
<?php
	my_func();
?>

<?php
/*function create_table($data){
	echo "<table border=\"1\">";
	reset($data);
	$value=current($data);
	while ($value) {
		echo "<tr><td>".$value."</tr></tr>\n";
		$value=next($data);

	}
	echo "</table";
	
}
$my_array=array('Line one','Line two','Line three');
create_table($my_array);
*/
?>
<?php
function create_table2($data,$border=1,$cellpadding=4,$cellspacing=4){
	echo "<table border=\"".$border."\" cellspacing=\".$cellspacing.\"
	cellpadding=\"".$cellspacing."\">";
	reset($data);
	$value=current($data);
	while ($value) {
		echo "<tr><td>".$value."</tr></tr>\n";
		$value=next($data);

	}
	echo "</table";
}
$my_array=array('Line one','Line two','Line three','Line four');
create_table2($my_array,4,8,8);
function fn(){
	 global $var1;
	 $var1="bbb";
	echo "$var1"."<br/>";
}
fn();

echo "$var1";
// test pass value
function increment(&$value,$amount=1){
	$value+=$amount;
}
$value=10;
increment($value);
echo $value;
//test return
function largr($x,$y){
	if((!isset($x))||(!isset($y))){
		echo "you need two numbers";
		return;
	}
	echo ($x>$y?$x:$y)."<br/>";
}
$a=1;$b=2;
largr($a,$b);
//test recursion
function reverse_i($str){
	for($i=1;$i<strlen($str);$i++){
		echo substr($str,-$i,1);
	}
	return;
}
reverse_i("hello");
?>