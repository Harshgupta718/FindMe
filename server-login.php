<?php 

mysqli_connect("localhost", "root", "", "registration");
    
if (isset($_REQUEST['submit'])) {
  $username = mysqli_real_escape_string($db, $_REQUEST['username']);
  $password = mysqli_real_escape_string($db, $_REQUEST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Login Successful! Redirecting......";
  	  header('location: map.html');
}

?>