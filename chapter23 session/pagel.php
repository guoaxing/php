<?php
session_start();
$_SESSION['sess_var']='Hello World';
echo 'The content of $_SESSION[\'sess_var\'] is '.$_SESSION['sess_var']."<br>" ;
<
?>