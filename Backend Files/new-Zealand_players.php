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
$query = "SELECT * FROM playersstats WHERE JerseyColor = 'Black'";
$result = mysqli_query($conn,$query);

$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) FROM register"));
$x = $rows["COUNT(*)"];
?>
<!-- ____________________________________________________________________________________________ -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="vertical-menu.css">
	<link rel="icon" type="image/png" href="img/logo.jpeg" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<title>Cricpedia</title>
    <style>
	.back {
	/* background-color:#b088f9; */
	background-image: url('img/back1.jpg');
	padding-bottom:2%;
}
	.wrapper
	{
		background-color: white;
		display:table;
		width:100%;
		height:100%;
	}
	.navbar-brand{
		margin-top: 0.2px;
				margin-left: -2%;
	}
	table,th,td {
            border: 1px solid black;
            border-collapse: seperate;
    }
	th,td {
		padding: 5px;
	}

	th {
		text-align: center;
	}

	.table-wrapper {
		display: inline-block;
	}
	tr:nth-child(even){
		background-color: #E5E4E2;
		color:#151B8D;
	}
	tr:nth-child(odd){
		background-color:#D1D0CE;
		color:black;
	}
	th{
		background-color: gray;
		color:white;
	}
	table.center {
		margin-left: 16.5%;
		margin-right: 1.5%;
		margin-top: 0.1%;
		text-align: center;
		font-weight: bold;
		margin-bottom: 1.5%;
	}
	.logo{
		position: absolute;
		width:8%;
		height:90%;
		top: 1%;
		left: 1%;
	}
	</style>
</head>
<body>
<div class="back">
<!-- ____________________________________________________________________________________________ -->			 				
	<?php
		if($logincheck==0)
		{
		?>
		<nav class="navbar navbar-expand-md navbar-dark font-weight-bold sticky-top sansserif" style="font-size:20px;background-color:black;height:80px;">
		<?php
		if($logincheck==0){
		?>
			<a href="index.php" style="height:10%;width:10%;"><img class="logo" src="img/logo.jpeg"></a>
		<?php
		}
		else{
		?>
			<a href="index.php?logincheck=1" style="height:10%;width:10%;"><img class="logo" src="img/logo.jpeg"></a>
		<?php
		}
		?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="nav-toggler-icon"> </span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li vlass="nav-item">
				<a class="nav-link text-red" style = "color:orange;">Total Users:  <?php echo $x;?></a>
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
<!-- ____________________________________________________________________________________________ -->
	<?php
	}
	else{
		?>
		<nav class="navbar navbar-expand-md navbar-dark font-weight-bold sticky-top sansserif" style="font-size:20px;background-color:black;height:80px;">
			<?php
			if($logincheck==0){
		?>
			<a href="index.php" style="height:10%;width:10%;"><img class="logo" src="img/logo.jpeg"></a>
		<?php
		}
		else{
		?>
			<a href="index.php?logincheck=1" style="height:10%;width:10%;"><img class="logo" src="img/logo.jpeg"></a>
		<?php
		}
		?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="nav-toggler-icon"> </span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li vlass="nav-item">
				<a class="nav-link text-red" style = "color:orange;">Total Users:  <?php echo $x;?></a>
			</li>
			<li vlass="nav-item">
				<a class="nav-link text-white" href="matches.php?logincheck=1">Matches</a>
			</li>
			<li vlass="nav-item">
				<a class="nav-link text-white" href="players.php?logincheck=1">Players</a>
			</li>
		<li vlass="nav-item">
			<a class="nav-link text-white"  href="https://www.youtube.com/watch?v=Kwu1yIC-ssg&list=PLtWkiFWAD1czNxQYv-ehzMxvO1V_hoHwe" target="_blank" rel="noopener noreferrer">Live Stream</a>
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
		<a href="login.php?signup=0" class="btn btn-primary btn-lg" role="button" >LOGIN</a>
	<?php
	}
	else{
		?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $email ?>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="myprofile.php">My Profile</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="logout.php">LOG OUT</a>
			</div>
		</li>
		<?php
	}
	?>
	</ul>
</div>
</nav>
<!-- ____________________________________________________________________________________________ -->
<?php
	if($logincheck==0)
	{
?>
	<div class="vertical-menu" style="margin-top:-1.7%;">
		<a href="players.php" class="inactive">Teams</a>
		<a href="india_players.php">India</a>
		<a href="england_players.php">England</a>
		<a href="australia_players.php">Australia</a>
		<a href="new-Zealand_players.php"class="active">New Zealand</a>
		<a href="pakistan_players.php">Pakistan</a>
		<a href="south-africa_players.php">South Africa</a>
		<a href="bangladesh_players.php">Bangladesh</a>
		<a href="sri-lanka_players.php">Sri Lanka</a>
		<a href="west-indies_players.php">West Indies</a>
		<a href="afghanistan_players.php">Afghanistan</a>
	</div>
<?php
	}
	else{
		?>
		<div class="vertical-menu" style="margin-top:-1.7%;">
			<a href="players.php?logincheck=1" class="inactive">Teams</a>
			<a href="india_players.php?logincheck=1">India</a>
			<a href="england_players.php?logincheck=1">England</a>
			<a href="australia_players.php?logincheck=1">Australia</a>
			<a href="new-Zealand_players.php?logincheck=1"class="active">New Zealand</a>
			<a href="pakistan_players.php?logincheck=1">Pakistan</a>
			<a href="south-africa_players.php?logincheck=1">South Africa</a>
			<a href="bangladesh_players.php?logincheck=1">Bangladesh</a>
			<a href="sri-lanka_players.php?logincheck=1">Sri Lanka</a>
			<a href="west-indies_players.php?logincheck=1">West Indies</a>
			<a href="afghanistan_players.php?logincheck=1">Afghanistan</a>
		</div>
		<?php
	}
	 ?>
<!-- ____________________________________________________________________________________________ -->
     <img src="img/williamson.PNG" class = "i2center">

     <table class="center">
        <tr>
            <th>Player_Name</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Height</th>
            <th>Role</th>
            <th>Tot_Matches</th>
            <th>Tot_Runs</th>
            <th>Avg</th>
            <th>HS</th>
            <th>SR</th>
            <th>50's</th>
            <th>100's</th>
            <th>200's</th>
            <th>Tot_Wkts</th>
            <th>Best</th>
            <th>Eco</th>
        </tr>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <td> <?php echo $rows['Player_Name']; ?> </td>
            <td> <?php echo $rows['DOB']; ?> </td>
            <td> <?php echo $rows['Age']; ?> </td>
            <td> <?php echo $rows['Height']; ?> </td>
            <td> <?php echo $rows['Role']; ?> </td>
            <td> <?php echo $rows['TotalMatches']; ?> </td>
            <td> <?php echo $rows['TotalRuns']; ?> </td>
            <td> <?php echo $rows['BatAvg']; ?> </td>
            <td> <?php echo $rows['HighestScore']; ?> </td>
            <td> <?php echo $rows['StrikeRate']; ?> </td>
            <td> <?php echo $rows['50s']; ?> </td>
            <td> <?php echo $rows['100s']; ?> </td>
            <td> <?php echo $rows['200s']; ?> </td>
            <td> <?php echo $rows['TotalWkts']; ?> </td>
            <td> <?php echo $rows['Best']; ?> </td>
            <td> <?php echo $rows['Eco']; ?> </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
	</div>
</body>
</html>
<!-- ____________________________________________________________________________________________ -->
