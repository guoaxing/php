<?php 
//test static
class Math{
	static function squa($input){
		return $input*$input;
	}
}
echo Math::squa(5)."<br/>";
//test late static binding
class A{
	public static function who(){
		echo __CLASS__;
	}
	public static function test(){
		static::who();
	}
}

class B extends A{
	public static function who(){
		echo __CLASS__;
	}
}
B::test();
//test reflection
require("page.php");
$class = new ReflectionClass("Page");
echo "<pre>".$class."</pre>"; 
?>