<?php 
session_start();

$db=mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['reg_user']))  {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    $sql="INSERT INTO users(username,email,password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: after-sign.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>
