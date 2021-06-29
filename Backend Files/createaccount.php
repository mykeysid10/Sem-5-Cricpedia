<?php
    if(isset($_POST['email']))
    {
        require_once('mindex.php');
        $query = "select `email` as email1 from `register` where 1";
        $result = mysqli_query($conn,$query);
        $var=TRUE;
        while($r=mysqli_fetch_assoc($result))
        {
            $e=$r['email1'];
            if($e==$_POST['email'])
            {
                $var=FALSE;
                break;
            }
        }
        if($var)
        {
            $query="INSERT INTO `register`(`fname`, `lname`, `phno`, `email`, `pass`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[phno]','$_POST[email]','$_POST[password]')";
            mysqli_query($conn,$query);
            header('Location:login.php');
        }
        else
        {
            header('Location:login.php');
        }
    }
?>