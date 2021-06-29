<!-- ____________________________________________________________________________________________ -->
<?php
session_start();
?>
<html lang="en">
<?php
$logincheck=0;
if(isset($_SESSION['email']))
{
		$email=$_SESSION['email'];
		$logincheck=$_SESSION['logincheck'];
}
require_once('mindex.php');
$query = "SELECT register.fname,register.lname from register where register.email='$email'";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc($result);
$fname = $rows["fname"];
$lname = $rows["lname"];
$l1name = $rows["lname"]."'s";

$query1 = "SELECT register.phno,register.pass from register where register.fname='$fname'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_fetch_assoc($result1);
$phno = $rows1["phno"];
$pass = $rows1["pass"];
?>
<!-- ____________________________________________________________________________________________ -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="img/logo.jpeg" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Cricpedia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> 

<style>
.mikey1
{
    margin-top:-30%;
    margin-left:25%;
    width:55%;
    height:40%;
}
.mikey2
{
    margin-top:25%;
    margin-left:25%;
    width:55%;
    height:55%;
}
.txt3 
{
  font-family: Poppins-Regular;
  font-size: 15px;
  margin-top:60%;
  line-height: 1.6;
  color: #00ad5f;
}
.div{
    margin-top:0.5%;
    margin-left:20%;
}
</style>
</head>
<!-- ____________________________________________________________________________________________ -->
<body>
	<div class="container-contact100">
	<a href="index.php">
         <img src="img/close.jpg" style="position:absolute;margin-top:-26%;margin-left:80%;width:40px;height: 40px;">
         </a>
		<div class="wrap-contact100">
		
			<form class="contact100-form validate-form" action = "update.php" method = "POST">
            <div class = "div">
        <h3> Edit Your Detail's Here</h3>
</div>
				<span class="contact100-form-title">
				</span>

				<label class="label-input100" for="first-name">Name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
				<input id="first-name" class="input100" type="text" name="fname" value="<?php echo $fname;?>"required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
				<input class="input100" type="text" name="lname" value="<?php echo $lname;?>"required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Phone number *</label>
				<div class="wrap-input100 validate-input" data-validate = "Enter Valid Phone Number">
				<input id="text" pattern="[123456789][0-9]{9}" class="input100" type="text" name="phno" value="<?php echo $phno;?>"required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Password *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
                <input id="myInput" class="input100" type="password" name="pass" value="<?php echo $pass;?>"required >
                <span class="focus-input100"></span>
                </div>
                <input type="checkbox" onclick="myFunction()" style="margin-top:3.7%;"><p style="margin-top:3%;margin-left:2%;"><em><strong>Show Password</strong></em></p>
                        <script>
                            function myFunction() 
                            {
                                var x = document.getElementById("myInput");
                                if (x.type === "password") 
                                    x.type = "text";
                                else 
                                    x.type = "password";
                            }
                        </script> 

				<div class="container-contact100-form-btn" style="margin-top:5%;">
					<button class="contact100-form-btn" input type="submit" name = "submit" value="Submit">
					 Submit
					</button>
                </div>
                <!-- <div class="container-contact100-form-btn">
					<a href="index.php" class="contact100-form-btn">
						Cancel
					</a>
				</div> -->
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/3.jpg');">

				<div class="dis-flex size1 p-b-47">

					<div class="flex-col size2">
                            <img src="img/logo.jpeg" class="mikey1">
							<img src="img/profile.png" class="mikey2">
						<span class="txt3" style="margin-top:15%;" >
                        <h4 style = "margin-left:19%;"><?php echo $fname." ".$l1name; ?> Profile</h4>
						</span>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
    </script>
    <?php
            if ($logincheck==0) {
    ?>
            <h5>Invalid Email or Password</h5>
    <?php
            }
    ?>
</body>
</html>
<!-- ____________________________________________________________________________________________ -->