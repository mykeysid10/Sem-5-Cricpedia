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
$query = "SELECT COUNT(matches.MatchId) from matches";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc($result);
$mcount = $rows['COUNT(matches.MatchId)'];
$query = "Select * from matches";
$mid="";

if (isset($_POST["MatchId"]))
    $mid=$_POST["MatchId"];
$result = mysqli_query($conn,$query);

$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) FROM register"));
$x = $rows["COUNT(*)"];
?>
<!-- ________________________________ -->
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cricpedia</title>
<link rel="icon" type="image/png" href="img/logo.jpeg" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<style>
	.back {
	/* background-color:#b088f9; */
	background-image: url('img/back1.jpg');
	padding-bottom:10%;
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
	.matchestable {
		text-align: center;
		position: relative;
		margin-top: -22%;
		margin-left: auto;
		margin-right: auto;
	}
	.t1 {
		text-align: center;
		position: relative;
		margin-top: -22%;
		margin-left: auto;
		margin-right: auto;
	}
	.t2 {
		text-align: center;
		position: relative;
		margin-top: -1%;
		margin-left: auto;
		margin-right: auto;
	}
	img {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 15%;
		height: 25%;
	}
	tr:nth-child(even) {
		background-color: #F0F8FF;
		color: black;
	}
	tr:nth-child(odd) {
		background-color: #F5DEB3;
		color: black;
	}
	th {
		background-color: #D2691E;
		color: white;
	}
	.mid {
		position: absolute;
		top: 15%;
		right: 40%;
	}
	.logo {
		position: absolute;
		width: 8%;
		height: 90%;
		top: 1%;
		left: 1%;
	}
	@import url(https://fonts.googleapis.com/css?family=Cabin:400);
	.webdesigntuts-workshop {
		/* background: white; */
		height: 100%;
		position: relative;
		text-align: center;
		width: 100%;
	}
	.webdesigntuts-workshop:before,
	.webdesigntuts-workshop:after {
		content: '';
		display: block;
		left: 50%;
		margin: 0 0 0 -400px;
		position: absolute;
		width: 800px;
	}
	.webdesigntuts-workshop:before {
		background: #444;
		background: linear-gradient(left, #151515, #444, #151515);
		top: 192px;
	}
	.webdesigntuts-workshop:after {
		background: #000;
		background: linear-gradient(left, #151515, #000, #151515);
		top: 191px;
	}
	.webdesigntuts-workshop form {
		background: #111;
		background: linear-gradient(#1b1b1b, #111);
		border: 1px solid #000;
		border-radius: 5px;
		box-shadow: inset 0 0 0 1px #272727;
		display: inline-block;
		font-size: 0px;
		margin: 150px auto 0;
		padding: 20px;
		position: relative;
		z-index: 1;
	}
	.webdesigntuts-workshop input {
		background: #222;
		background: linear-gradient(#333, #222);
		border: 1px solid #444;
		border-radius: 5px 0 0 5px;
		box-shadow: 0 2px 0 #000;
		color: #888;
		display: block;
		float: left;
		font-family: 'Cabin', helvetica, arial, sans-serif;
		font-size: 13px;
		font-weight: 400;
		height: 40px;
		margin: 0;
		padding: 0 10px;
		text-shadow: 0 -1px 0 #000;
		width: 200px;
	}
	.ie .webdesigntuts-workshop input {
		line-height: 40px;
	}
	.webdesigntuts-workshop input::-webkit-input-placeholder {
		color: #888;
	}
	.webdesigntuts-workshop input:-moz-placeholder {
		color: #888;
	}
	.webdesigntuts-workshop input:focus {
		animation: glow 800ms ease-out infinite alternate;
		background: #222922;
		background: linear-gradient(#333933, #222922);
		border-color: #393;
		box-shadow: 0 0 5px rgba(0, 255, 0, .2), inset 0 0 5px rgba(0, 255, 0, .1), 0 2px 0 #000;
		color: #efe;
		outline: none;
	}
	.webdesigntuts-workshop input:focus::-webkit-input-placeholder {
		color: #efe;
	}
	.webdesigntuts-workshop input:focus:-moz-placeholder {
		color: #efe;
	}
	.webdesigntuts-workshop button {
		background: #222;
		background: linear-gradient(#333, #222);
		box-sizing: border-box;
		border: 1px solid #444;
		border-left-color: #000;
		border-radius: 0 5px 5px 0;
		box-shadow: 0 2px 0 #000;
		color: #fff;
		display: block;
		float: left;
		font-family: 'Cabin', helvetica, arial, sans-serif;
		font-size: 13px;
		font-weight: 400;
		height: 40px;
		line-height: 40px;
		margin: 0;
		padding: 0;
		position: relative;
		text-shadow: 0 -1px 0 #000;
		width: 80px;
	}
	.webdesigntuts-workshop button:hover,
	.webdesigntuts-workshop button:focus {
		background: #292929;
		background: linear-gradient(#393939, #292929);
		color: #5f5;
		outline: none;
	}
	.webdesigntuts-workshop button:active {
		background: #292929;
		background: linear-gradient(#393939, #292929);
		box-shadow: 0 1px 0 #000, inset 1px 0 1px #222;
		top: 1px;
	}
	@keyframes glow {
		0% {
			border-color: red;
			box-shadow: 0 0 5px rgba(0, 255, 0, .2), inset 0 0 5px rgba(0, 255, 0, .1), 0 2px 0 #000;
		}
		100% {
			border-color: #6f6;
			box-shadow: 0 0 20px rgba(0, 255, 0, .6), inset 0 0 10px rgba(0, 255, 0, .4), 0 2px 0 #000;
		}
	}
</style>
</head>
<!-- ________________________________ -->
<body>
<div class="back">
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
				<li vlass="nav-item">
					<a class="nav-link text-red" style="color:orange;">Total Users: <?php echo $x;?></a>
				</li>
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
				<nav class="navbar navbar-expand-md navbar-dark font-weight-bold sticky-top sansserif"
					style="font-size:20px;background-color:black;height:80px;">
					<?php
			 	if($logincheck==0){
			 	?>
					<a href="index.php" style="height:10%;width:10%;"><img class="logo" src="img/logo.jpeg"></a>
			<?php
			 	}
			 	else{
			?>
<!-- ________________________________ -->
				<a href="index.php?logincheck=1" style="height:10%;width:10%;"><img class="logo"
					src="img/logo.jpeg"></a>
			<?php
			 	}
			?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="nav-toggler-icon"> </span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li vlass="nav-item">
							<a class="nav-link text-red" style="color:orange;">Total Users: <?php echo $x;?></a>
						</li>
						<li vlass="nav-item">
							<a class="nav-link text-white" href="matches.php?logincheck=1">Matches</a>
						</li>
						<li vlass="nav-item">
							<a class="nav-link text-white" href="players.php?logincheck=1">Players</a>
							</li>
						<li vlass="nav-item">
							<a class="nav-link text-white" href="https://www.youtube.com/watch?v=Kwu1yIC-ssg&list=PLtWkiFWAD1czNxQYv-ehzMxvO1V_hoHwe"
									target="_blank" rel="noopener noreferrer">Live Stream</a>
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
<!-- ________________________________ -->
				<section class="webdesigntuts-workshop" style="margin-top:-8.5%;">
					<form action="<?php $_PHP_SELF ?>" method="POST">
						<input type="search text" name="MatchId" placeholder="Enter The Match ID">
						<button type="Input">Search</button>
					</form>
				</section>
<!-- ________________________________ -->
<?php
 	if ($mid=="")
 	{
?>
<table class="matchestable">
	<tr>
		<th>MatchId</th>
		<th>Team1Name</th>
		<th>Team2Name</th>
		<th>TotRunsT1</th>
		<th>TotWktsT1</th>
		<th>TotRunsT2</th>
		<th>TotWktsT2</th>
		<th>Date</th>
		<th>Location</th>
		<th>TotAudience</th>
		<th>WinnerId</th>
		<th>MOTM</th>
	</tr>
	<?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
	<tr>
		<td> <?php echo $rows['MatchId']; ?> </td>
		<td> <?php echo $rows['Team1Name']; ?> </td>
		<td> <?php echo $rows['Team2Name']; ?> </td>
		<td> <?php echo $rows['TotRunsT1']; ?> </td>
		<td> <?php echo $rows['TotWktsT1']; ?> </td>
		<td> <?php echo $rows['TotRunsT2']; ?> </td>
		<td> <?php echo $rows['TotWktsT2']; ?> </td>
		<td> <?php echo $rows['Date']; ?> </td>
		<td> <?php echo $rows['Location']; ?> </td>
		<td> <?php echo $rows['TotAudience']; ?> </td>
		<td> <?php echo $rows['WinnerId']; ?> </td>
		<td> <?php echo $rows['MOTM']; ?> </td>
	</tr>
	<?php
        }
    ?>
</table>
<!-- ________________________________ -->
	<?php
        }
        else if ($mid<=$mcount && $mid>0) {
              $query = "SELECT teams.TeamId,teams.CountryName from teams JOIN matches ON teams.CountryName=matches.Team1Name WHERE matches.MatchId=$mid";
              $result = mysqli_query($conn,$query);
              $rows=mysqli_fetch_assoc($result);
              $pid1 = $rows['TeamId']*100;
							$t1name= $rows['CountryName'];
              $query = "SELECT teams.TeamId,teams.CountryName from teams JOIN matches ON teams.CountryName=matches.Team2Name WHERE matches.MatchId=$mid";
              $result = mysqli_query($conn,$query);
              $rows = mysqli_fetch_assoc($result);
              $pid2 = $rows['TeamId'] * 100;
							$t2name= $rows['CountryName'];
							$query = "SELECT coach.CoachName FROM teams JOIN coach on teams.TeamId=coach.TeamId WHERE teams.TeamId=$pid1/100";
              $result = mysqli_query($conn,$query);
              $rows = mysqli_fetch_assoc($result);
							$t1coach=$rows['CoachName'];
							$query = "SELECT coach.CoachName FROM teams JOIN coach on teams.TeamId=coach.TeamId WHERE teams.TeamId=$pid2/100";
              $result = mysqli_query($conn,$query);
              $rows = mysqli_fetch_assoc($result);
							$t2coach=$rows['CoachName'];
              $query = "SELECT players.PlayerName,playersstats.Role,players.RunsScored,players.Balls_Faced,players.4s,players.6s,players.SR,players.WktsTaken,players.Econ FROM players JOIN playersstats on players.PlayerName=playersstats.Player_Name WHERE players.MatchId=$mid and players.PlayerId BETWEEN $pid1 and ($pid1+99)";
              $result = mysqli_query($conn,$query);
?>
<!-- ________________________________ -->
<h2 style="color:white;position:absolute;top:36%;left:32%;"><?php echo 'Team - '.$t1name.' : Coach - '.$t1coach; ?></h2>
<table class="t1">
	<tr>
		<th>PlayerName</th>
		<th>Player Role</th>
		<th>Runs Scored</th>
		<th>Balls Faced</th>
		<th>4's</th>
		<th>6's</th>
		<th>Strike Rate</th>
		<th>Wickets Taken</th>
		<th>Economy</th>
	</tr>
	<?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
	<tr>
		<td> <?php echo $rows['PlayerName']; ?> </td>
		<td> <?php echo $rows['Role']; ?> </td>
		<?php
			if(is_null($rows['RunsScored'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['RunsScored']; ?> </td>
		<?php
			}
			if(is_null($rows['Balls_Faced'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['Balls_Faced']; ?> </td>
		<?php
			}
			if(is_null($rows['4s'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['4s']; ?> </td>
		<?php
			}
			if(is_null($rows['6s'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['6s']; ?> </td>
		<?php
			}
			if(is_null($rows['SR'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['SR']; ?> </td>
		<?php
			}
			if(is_null($rows['WktsTaken'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['WktsTaken']; ?> </td>
		<?php
			}
			if(is_null($rows['Econ'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['Econ']; ?> </td>
		<?php
			}
		?>
	</tr>
	<?php
    	}
    ?>
<!-- ________________________________ -->
</table>
<br> <br> <br>
<img src="img/vvs.png"> </img>
<br> <br> <br> <br>
<?php
    $query = "SELECT players.PlayerName,playersstats.Role,players.RunsScored,players.Balls_Faced,players.4s,players.6s,players.SR,players.WktsTaken,players.Econ FROM players JOIN playersstats on players.PlayerName=playersstats.Player_Name WHERE players.MatchId=$mid and players.PlayerId BETWEEN $pid2 and ($pid2+99)";
    $result = mysqli_query($conn,$query);
?>
<!-- ________________________________ -->
<h2 style="color:white;position:absolute;top:147%;left:35%;"><?php echo 'Team - '.$t2name.' : Coach - '.$t2coach; ?></h2>
<table class="t2">
	<tr>
		<th>PlayerName</th>
		<th>Player Role</th>
		<th>Runs Scored</th>
		<th>Balls Faced</th>
		<th>4's</th>
		<th>6's</th>
		<th>Strike Rate</th>
		<th>Wickets Taken</th>
		<th>Economy</th>
	</tr>
	<?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
	<tr>
		<td> <?php echo $rows['PlayerName']; ?> </td>
		<td> <?php echo $rows['Role']; ?> </td>
		<?php
			if(is_null($rows['RunsScored'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['RunsScored']; ?> </td>
		<?php
			}
			if(is_null($rows['Balls_Faced'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['Balls_Faced']; ?> </td>
		<?php
			}
			if(is_null($rows['4s'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['4s']; ?> </td>
		<?php
			}
			if(is_null($rows['6s'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['6s']; ?> </td>
		<?php
			}
			if(is_null($rows['SR'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['SR']; ?> </td>
		<?php
			}
		if(is_null($rows['WktsTaken'])){
			?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['WktsTaken']; ?> </td>
		<?php
			}
			if(is_null($rows['Econ'])){
		?>
		<td> <?php echo "-"; ?> </td>
		<?php
			}
			else{
		?>
		<td> <?php echo $rows['Econ']; ?> </td>
		<?php
			}
		?>
	</tr>
	<?php
        }
    ?>
</table>
<?php
    }
    else {
?>
<!-- ________________________________ -->
	<div class="alert alert-danger alert-dismissible fade show" style="position:absolute;text-align:center;margin-top:-27.3%;margin-left:40%;" role="alert">
		<strong>Invalid Match ID....!!!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<!-- ________________________________ -->
	<table class="matchestable">
		<tr>
			<th>MatchId</th>
			<th>Team1Name</th>
			<th>Team2Name</th>
			<th>TotRunsT1</th>
			<th>TotWktsT1</th>
			<th>TotRunsT2</th>
			<th>TotWktsT2</th>
			<th>Date</th>
			<th>Location</th>
			<th>TotAudience</th>
			<th>WinnerId</th>
			<th>MOTM</th>
		</tr>
		<?php
            while($rows=mysqli_fetch_assoc($result))
            {

        ?>
		<tr>
			<td> <?php echo $rows['MatchId']; ?> </td>
			<td> <?php echo $rows['Team1Name']; ?> </td>
			<td> <?php echo $rows['Team2Name']; ?> </td>
			<td> <?php echo $rows['TotRunsT1']; ?> </td>
			<td> <?php echo $rows['TotWktsT1']; ?> </td>
			<td> <?php echo $rows['TotRunsT2']; ?> </td>
			<td> <?php echo $rows['TotWktsT2']; ?> </td>
			<td> <?php echo $rows['Date']; ?> </td>
			<td> <?php echo $rows['Location']; ?> </td>
			<td> <?php echo $rows['TotAudience']; ?> </td>
			<td> <?php echo $rows['WinnerId']; ?> </td>
			<td> <?php echo $rows['MOTM']; ?> </td>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<footer>
		<hr>
	</footer>
	</div>
</body>
</html>