<?php
session_start();
$logincheck=0;
if(isset($_SESSION['email']))
{
		$email=$_SESSION['email'];
		$logincheck=$_SESSION['logincheck'];
}
include "mindex.php"; 
if(isset($_POST['submit']))
{		
    $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT register.pass from register where register.email = '$email'"));
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $pass = $_POST['pass'];
    $pass1 = $rows['pass'];
    $query = mysqli_query($conn,"UPDATE register SET fname = '$fname',lname='$lname',phno='$phno',pass='$pass' WHERE email='$email'");

    if(!$query)
        echo mysqli_error();
    else
    {
        if($pass==$pass1)
            header('Location:index.php');
        else header('Location:login.php');
    }
}
mysqli_close($conn); 
?>