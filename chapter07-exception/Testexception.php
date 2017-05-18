<?php 
class myException extends Exception{
	function __toString(){
		return "<table border=\"1\">
		<tr>
		<td><strong>Exception ".$this->getCode().
		"</strong>: ".$this->getMessage()."<br/>".
		"in ".$this->getFile()."on line ".$this->getLine().
		"</td></tr></table><br/>";
	}
}
try{
	throw new myException("Error Processing Request", 1);
}
catch(Exception $e){
	// echo "Exception ".$e->getCode().":".$e->getMessage()."<br/>".
	// "in ".$e->getFile()." on line".$e->getLine()."<br/d>";
	echo $e;
}
?>