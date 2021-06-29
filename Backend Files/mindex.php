<?php
$conn = mysqli_connect('localhost','root','','cricpedia');
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($conn,'cricpedia');
?>
