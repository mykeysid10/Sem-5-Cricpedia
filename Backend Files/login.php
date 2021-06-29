<!-- ________________________________ -->
<html lang="en">
<?php
    $signup=0;
    $logincheck=1;
    if(isset($_GET["signup"]))
    {
        $signup=$_GET["signup"];
    }
    if(isset($_GET["logincheck"]))
    {
        $logincheck=$_GET["logincheck"];
    }
?>
<!-- ________________________________ -->
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="icon" type="image/png" href="img/logo.jpeg" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet"><!------ Include the above in your HEAD tag ---------->
    <style>
    body {
    font-family: "Lato", sans-serif;
}
h5 {
    margin-top: 25px;
    /* display: block; */
    font-size: 1em;
    font-weight: bold;
    /* font-family:'Sansita Swashed', cursive; */
}
.main-head{
    height: 150px;
    background: #FFF;

}
.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}
.main {
    padding: 0px 10px;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}
@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }
    .register-form{
        margin-top: 10%;
    }
}
@media screen and (min-width: 768px){
    .main{
        margin-left: 50%;
    }
    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }
    .login-form{
        margin-top: 50%;
    }
    .login-form2{
        margin-top: 20%;
    }
    .register-form{
        margin-top: 20%;
    }
}
    .close{
        margin-left: 70%;
    }
.login-main-text{
    margin-top: 13%;
    padding: 60px;
    color: #fff;
}
.login-main-text h2{
    font-weight: 300;
}
.btn-black{
    background-color: #000 !important;
    color: #fff;
}
.img{
    position: absolute;
    margin-left:25%;
    height:95%;
}
.boxes{
    border: 2px solid black;
  outline: grey solid 5px;
  margin: auto;
  padding: 20px;
  text-align: left;
}
.boxes1{
    border: 2px solid black;
  outline: grey solid 5px;
  margin-top: 20%;
  padding: 20px;
  text-align: left;
}
</style>
</head>
<body>
<div class="sidenav">
<img class="img" src="img/home2.jpg">
      </div>
<!-- ________________________________ -->
<?php
    if($signup==0)
    {
        ?>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <div>
            <a href="logout.php">
         <img src="img/close.jpg" style="position:absolute;margin-top:0.8%;margin-left:78%;width: 40px;height: 40px;">
         </a>
         </div>
         <div class="boxes">
               <form method="POST" action="logincheck.php">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" data-validate = "Valid email is required: ex@abc.xyz" class="form-control" name="Email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="Password" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-black btn-sm">LOGIN</button>
                  <a href="login.php?signup=1" class="btn btn-black btn-sm" role="button">SIGN UP</a>
                  <?php
                      if ($logincheck==0) {
                        ?>
                          <h5>Invalid Email or Password</h5>
                  <?php
                      }
                   ?>

               </form>
               </div>
            </div>
         </div>
      </div>
      <?php
    }
?>
<!-- ________________________________ -->
<?php
    if($signup==1)
    {
        ?>
      <div class="main">
         <div class="col-md-6 col-sm-12">
         <div>
            <a href="logout.php">
         <img src="img/close.jpg" style="position:absolute;margin-top:0.8%;margin-left:78%;width: 40px;height: 40px;">
         </a>
         </div>
         <div class="boxes1">
               <form method="POST" action="createaccount.php">
                  <div class="form-group">
                  <label>First Name</label>
                     <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                     <label>Last Name</label>
                     <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                    <label>Phone Number</label>
                     <input type="text" pattern="[123456789][0-9]{9}" class="form-control" name="phno" placeholder="Phone Number"required>
                    </div>
                    <div class="form-group">
                     <label>Email</label>
                     <input type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" class="form-control" name="email" placeholder="eg: abc@xyz.com" required>
                    </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>

                  <button type="submit" class="btn btn-black btn-sm">CREATE ACCOUNT</button>
                  <a href="login.php" class="btn btn-black btn-sm" role="button">LOGIN</a>
               </form>
               </div>
            </div>
         </div>
      </div>
    </div>
      <?php
    }
?>
</body>
</html>
<!-- ________________________________ -->