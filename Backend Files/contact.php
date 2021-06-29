<!-- ________________________________ -->
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
	require_once('mindex.php');
$query = "SELECT * from register where register.email='$email'";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc($result);
$fname = $rows["fname"];
$lname = $rows["lname"];
$phone = $rows["phno"];
}
?>
<html lang="en">
<!-- ________________________________ -->
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="img/logo.jpeg" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Cricpedia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<!-- ________________________________ -->
<body>
<?php
if($logincheck==1)
{
?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action = "insert.php" method = "POST">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
				<input id="first-name" class="input100" type="text" name="First_Name" value="<?php echo $fname;?>"required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
				<input class="input100" type="text" name="Last_Name" value="<?php echo $lname;?>"required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input id="email" class="input100" type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"  name="email" value="<?php echo $email;?>" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number *</label>
				<div class="wrap-input100 validate-input" data-validate = "Enter a valid 10 digits number">
				<input id="text" pattern="[123456789][0-9]{9}" class="input100" type="text" name="phone" value="<?php echo $phone;?>"required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<input id="message" class="input100" name="message" placeholder="Write us a message" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" input type="submit" name = "submit" value="Send Message">
					 Send Message
					</button>
                </div>
                <div class="container-contact100-form-btn">
					<a href="index.php" class="contact100-form-btn">
						Cancel
					</a>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/2.jpg');">
			</div>
		</div>
	</div>
<!-- ________________________________ -->
	<script src="js/main.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>
	<?php
	}
	else
	{
	?>
<!-- ________________________________ -->
		<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action = "insert.php" method = "POST">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
				<input id="first-name" class="input100" type="text" name="First_Name" placeholder="First Name" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name" >
				<input class="input100" type="text" name="Last_Name" placeholder="Last Name" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input id="email" class="input100" type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" name="email" placeholder="Eg. example@email.com" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
				<input id="text" pattern="[123456789][0-9]{9}" class="input100" type="text" name="phone" placeholder="Enter a valid 10 digits number">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<input id="message" class="input100" name="message" placeholder="Write us a message" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" input type="submit" name = "submit" value="Send Message" >
					 Send Message
					</button>
                </div>
                <div class="container-contact100-form-btn">
					<a href="index.php" class="contact100-form-btn">
						Cancel
					</a>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/2.jpg');">
			</div>
		</div>
	</div>
<!-- ________________________________ -->
	<script src="js/main.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<?php
	}
	?>
</body>
</html>
<!-- ________________________________ -->