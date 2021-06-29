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
$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) FROM register"));
$x = $rows["COUNT(*)"];
?>
<!-- ____________ -->
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cricpedia</title>
	<link rel="icon" type="image/png" href="img/logo.jpeg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="style.css">
	<style>
		table,th,td {
			border: 1px;
		}
		#table1 {
			border-collapse: separate;
			border-spacing: 15px;
			margin-left: auto;
			margin-right: auto;
		}
		#table2 {
			border-collapse: separate;
			border-spacing: 15px;
			margin-left: auto;
			margin-right: auto;
		}
		.disabled {
			pointer-events: none;
			cursor: default;
		}
		.temp {
			height: auto;
			width: auto;
			margin-top: 5%;
			margin-left: auto;
			margin-right: auto;
		}
		.temp1 {
			height: auto;
			width: auto;
			margin-top: 0%;
			margin-left: auto;
			margin-right: auto;
		}
		.logo {
			position: absolute;
			width: 8%;
			height: 90%;
			top: 1%;
			left: 1%;
		}
		.icons{
			margin-top:-2.1%;
			margin-bottom:3.5%;
		}
		@media screen and (max-width: 800px) {
			.icons {
				margin-top:-4.1%;
				margin-bottom:6.5%;
			}
		}
	</style>
</head>
<!-- ____________ -->
<body>
	<?php
		if($logincheck==0)
		{
	?>
	<nav class="navbar navbar-expand-md navbar-dark font-weight-bold sticky-top sansserif" style="font-size:20px;background-color:black;height:80px;">
		<?php
			if($logincheck==0)
			{
		?>
		<a href="index.php" style="height:auto;width:auto;"><img class="logo" src="img/logo.jpeg"></a>
		<?php
			}
			else{
		?>
		<a href="index.php?logincheck=1" style="height:auto;width:auto;"><img class="logo" src="img/logo.jpeg"></a>
		<?php
				}
		?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" style="background-color:black;text-align:center;" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li vlass="nav-item">
					<a class="nav-link text-red" style="color:orange;">Total Users: <?php echo $x;?></a>
				</li>
				<li vlass="nav-item">
					<a class="nav-link text-white" href="matches.php">Matches</a>
				</li>
				<li vlass="nav-item">
					<a class="nav-link text-white" href="players.php">Players</a>
				</li>
				<li vlass="nav-item">
					<a class="nav-link text-#FF0000  disabled" href="#">Live Stream</a>
				</li>
				<?php
					}
					else{
				?>
<!-- ____________ -->
		<nav class="navbar navbar-expand-md navbar-dark font-weight-bold sticky-top sansserif" style="font-size:20px;background-color:black;height:80px;">
			<?php
				if($logincheck==0){
			?>
			<a href="index.php" style="height:auto;width:auto;"><img class="logo" src="img/logo.jpeg"></a>
			<?php
				}
				else{
			?>
			<a href="index.php?logincheck=1" style="height:auto;width:auto;"><img class="logo" src="img/logo.jpeg"></a>
			<?php
				}
			?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" style="background-color:black;text-align:center;"
				id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li vlass="nav-item">
						<a class="nav-link text-red" style="color:orange;">Total Users: <?php echo $x;?></a>
					</li>
					<li vlass="nav-item">
						<a class="nav-link text-white" href="matches.php">Matches</a>
					</li>
					<li vlass="nav-item">
						<a class="nav-link text-white" href="players.php">Players</a>
					</li>
					<li vlass="nav-item">
						<a class="nav-link text-white" href="https://www.youtube.com/watch?v=Kwu1yIC-ssg&list=PLtWkiFWAD1czNxQYv-ehzMxvO1V_hoHwe" target="_blank" rel="noopener noreferrer">Live Stream</a>
					</li>
				<?php
					}
					if($logincheck==0)
	 				{
	 			?>
						<li vlass="nav-item">
							<a class="nav-link text-white" href="contact.php">Support</a>
						</li>
				<?php
					}
	 				else{
	 			?>
						<li vlass="nav-item">
							<a class="nav-link text-white" href="contact.php?logincheck=1">Support</a>
						</li>
				<?php
	 				}
					if($logincheck==0)
					{
				?>
						<a href="login.php?signup=0" class="btn btn-primary btn-lg" role="button">LOGIN</a>
						<?php
					}
					else{
						?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $email ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="myprofile.php">My Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">LOG OUT</a>
							</div>
						</li>
					</div>
				<?php
					}
				?>
			</ul>
		</div>
	</nav>
<!-- ____________ -->
	<div class="wrapper">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/home3.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/home.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/stadium.jpg" alt="Second slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<!-- ____________ -->
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-lg-4 ">
				<table id="table1" style="width:85%;text-align:center;">
					<tr>
						<th bgcolor=" #9999ff" style="font-size:25px">Key Series</th>
					</tr>
					<tr>
						<td bgcolor="lightblue" style="font-size:15px">IPL 2020</td>
					</tr>
					<tr>
						<td bgcolor=" #8cff66" style="font-size:15px">Women's T20 Challenge</td>
					</tr>
					<tr>
						<td bgcolor=" #ffff4d" style="font-size:15px">Australia Vs India</td>
					</tr>
					<tr>
						<td bgcolor=" #dd99ff" style="font-size:15px">South Africa Vs Zimbabwe</td>
					</tr>
					<tr>
						<td bgcolor="#ffff99" style="font-size:15px">ICC World Test C'Ship</td>
					</tr>
					<tr>
						<td bgcolor=" #99ffff" style="font-size:15px">World Cup Super League</td>
					</tr>
					<tr>
						<td bgcolor=" #ff8080" style="font-size:15px">ICC Womens Championship</td>
					</tr>
				</table>
		</div>
<!-- ____________ -->
	<div class="col-lg-4">
		<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner temp">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/news1.jpg" alt="First slide">
					<div class="carousel-caption1" style="margin-top:3%;color:solid blue;font-size:1rem;">
						<strong>Australia beat India in ODI series 2020</strong>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/News2.jpg" alt="Second slide">
					<div class="carousel-caption1" style="margin-top:3%;color:solid blue;font-size:1rem;">
						<strong>Looks like England have got the hang of this white-ball stuff.</strong>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/News3.jpg" alt="Third slide">
					<div class="carousel-caption1" style="margin-top:3%;color:solid blue;font-size:1rem;">
						<strong>Black Caps Beat the West Indies & Won The Series.</strong>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/news4.jpg" alt="Second slide">
					<div class="carousel-caption1" style="margin-top:3%;color:solid blue;font-size:1rem;">
						<strong>Mumbai Indians won their 5th IPL title.</strong>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/news5.jpg" alt="Second slide">
					<div class="carousel-caption1" style="margin-top:3%;color:solid blue;font-size:1rem;">
						<strong>Shane Watson has retired from all forms of cricket</strong>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button"
				data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators1" role="button"
				data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<!-- ____________ -->
		<div class="col-lg-4">
			<table id="table2" style="width:85%;text-align:center;">
				<tr>
					<th bgcolor=" #9999ff" style="font-size:25px">Cricket News</th>
				</tr>
				<tr>
					<td bgcolor="lightblue" style="font-size:15px">Australia beat India in ODI series 2020</td>
				</tr>
				<tr>
					<td bgcolor=" #8cff66" style="font-size:15px">Looks like England have got the hang of
						this white-ball stuff.</td>
				</tr>
				<tr>
					<td bgcolor=" #ffff4d" style="font-size:15px">Black Caps Beat the West Indies & Won The
						Series.</td>
				</tr>
				<tr>
					<td bgcolor=" #dd99ff" style="font-size:15px">Mumbai Indians won their 5th IPL title</td>
				</tr>
				<tr>
					<td bgcolor=" #99ffff" style="font-size:15px">Shane Watson has retired from all forms of
						cricket</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!-- ____________ -->
	<button class="fun" data-toggle="collapse" data-target="#emoji"> UPCOMING MATCHES</button>
	<div id="emoji" class="collapse">
		<div class="container-fluid padding">
			<div style="margin-bottom:2%;">
				<div class="row text-center">
					<div class="col-lg-3">
						<img class="img" src="img/IndAus.jpg">
					</div>
					<div class="col-lg-3">
						<img class="img1" src="img/AfgNZ.jpg">
					</div>
					<div class="col-lg-3">
						<img class="img2" src="img/PakNZ.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- ____________ -->
		<footer>
			<div class="container-fluid padding italic" style="background-color:#000000;">
				<div class="row text-center">
					<div class="col-md-6">
						<hr class="light">
						<h4 style="margin-top:5%;color:white;">Team Members</h4>
						<hr class="light" style="margin-top:5%;">
						<p style="color:green;font-size:18px;"><strong>Siddharth Kulkarni</strong></p>
						<p style="color:green;font-size:18px;"><strong>Mandar Supate</strong></p>
						<p style="color:green;font-size:18px;"><strong>Divit Shah</strong></p>
						<p style="color:green;font-size:18px;"><strong>Gaurav Lodha</strong></p>
						<p style="color:green;font-size:18px;"><strong>Atharv Chaudhari</strong></p>
					</div>
					<div class="col-md-6">
						<hr class="light">
						<h4 style="margin-top:5%;color:white;">Support</h4>
						<hr class="light" style="margin-top:5%;">
						<p style="color:green;font-size:18px;"><strong>mykeysid10@gmail.com</strong></p>
						<p style="color:green;font-size:18px;"><strong>mandar@gmail.com</strong></p>
						<p style="color:green;font-size:18px;"><strong>divit@gmail.com</strong></p>
						<p style="color:green;font-size:18px;"><strong>lodha@gmail.com</strong></p>
						<p style="color:green;font-size:18px;"><strong>ahc382000@gmail.com</strong></p>
					</div>
					<br>
					<div class="col-12">
						<hr class="light" style="margin-top:-2%;">
						<h5 style="color:#00abff;font-size:25px;">&copy Cricpedia.com</h3>
						<div class="icons">
							<a href="https://www.instagram.com/0_cricpedia_1/" target="_blank" rel="noopener noreferrer">
								<img src="img/insta.png"
									style="position:absolute;margin-left:20%;width:20px;height:20px;">
							</a>
							<a href="https://www.facebook.com/Cricpedia-109599744326931"target="_blank" rel="noopener noreferrer">
								<img src="img/fb.png"
									style="position:absolute;margin-left:24%;width:20px;height:20px;">
							</a>
							<a href="https://twitter.com/Cricpedia1"target="_blank" rel="noopener noreferrer">
								<img src="img/twitter.png"
									style="position:absolute;margin-left:28%;width:20px;height:20px;">
							</a>
							</div>
							<hr class="light" style="margin-top:1.3%;">
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>