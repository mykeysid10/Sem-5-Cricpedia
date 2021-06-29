<?php
include "mindex.php"; 
if(isset($_POST['submit']))
{		
    $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) FROM contact"));
    $x = $rows["COUNT(*)"];
    $x = $x + 1;

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $query = mysqli_query($conn,"INSERT INTO `contact`(`Msg_Id`,`First_Name`, `Last_Name`,`email`,`phone`,`message`) VALUES ($x,'$First_Name','$Last_Name','$email','$phone','$message')");
    if(!$query)
        echo mysqli_error();
    else
        header('Location:index.php');
}
mysqli_close($conn); 
?>