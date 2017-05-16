<?php
//test __construct()
class classname{

	function __construct($para){
		echo "Constructor called with parameter ".$para."<br/>";
	}
}
$a=new classname("A");
$b=new classname("hello world");
//test $this
class classname1{
	public $attribute;
	
}

$c=new classname1();
$c->attribute="a"."<br/>";
echo $c->attribute;
//test __get()&__set()
class classname2{
	private $attribute;
	public function __get($name){
		return $this->$name;
	}
	public function __set($name,$value){
		$this->$name=$value;

	}
	
}
$d=new classname2();
$d->__set("name","guo");
echo $d->__get("name")."<br/>";
//test modifier
class A{

	function func1(){
		echo "func1 is called"."<br/>";
	}
	private function func2(){
		echo "func2 is called"."<br/>";
	}
	protected function func3(){
		echo "func3 is called"."<br/>";
	}
}
class B extends A{
	function __construct(){
		$this->func1();
		//$this->func2();
		$this->func3();
	}
}
$b=new B();
//$b->func3() only can be used in the class B;
//test override()
class A1{
	public $attribute="default value";
	function func(){
		echo "something"."<br/>";
		echo "The value of \$attribute is ".$this->attribute."<br/>";
	}
}
class B1 extends A1{
	public $attribute="different value";
	function func(){
		echo "something else"."<br/>";
		echo "The value of \$attribute is ".$this->attribute."<br/>";
		parent::func();
	}
}
$a=new A1();
$a->func();
$b=new B1();
$b->func();
?>