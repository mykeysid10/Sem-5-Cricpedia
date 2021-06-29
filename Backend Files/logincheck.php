<?php
session_start();
if(isset($_POST["Email"]))
{
    $email=$_POST["Email"];
    $_SESSION['email']=$email;
}
if(isset($_POST["Password"]))
{
    $pass=$_POST["Password"];
}
require_once('mindex.php');
$query = "SELECT register.pass from register where register.email='$email'";
$result = mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($result);
    if($pass==$rows["pass"]){
        $_SESSION['logincheck']=1;
        header('Location:index.php?');
    }
    else 
    {
        header('Location:login.php?logincheck=0');
        unset($_SESSION['email']);
        session_destroy();
    }
?>