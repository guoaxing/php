<?php
	require("page.php");
	class Servicepage extends Page{
		private $row2buttons =array(
								"btn1"=>"btn1.php",
								"btn2"=>"btn2.php",
								"btn3"=>"btn3.php",
								"btn4"=>"btn4.php",);
		public function Display(){
		echo "<html>\n<head>\n";
		$this->DisplayTitle();
		$this->DisplayKeywords();
		$this->DisplayStyles();
		echo "</head>\n<body>\n";
		$this->DisplayHeader();
		$this->DisplayMenu($this->buttons);
		$this->DisplayMenu($this->row2buttons);
		echo $this->content;
		$this->DisplayFooter();
		echo "</body\n</html>\n";
		}
	} 
	$services= new Servicepage();
	$services->content="Hello Another World";
	$services->Display();
?>