
<?php
$name = $_POST['name'];
  $password = $_POST['password'];

  if ((!isset($name)) || (!isset($password))) {
  } else if(($name=="user") && ($password=="pass")) {
    // visitor's name and password combination are correct
    echo "<h1>Here it is!</h1>
          <p>I bet you are glad you can see this secret page.</p>";
  } else {
    // visitor's name and password combination are not correct
    echo "<h1>Go Away!</h1>
          <p>You are not authorized to use this resource.</p>";
  }
?>
