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
}
require_once('mindex.php');
$query = "SELECT teams.Ranking,teams.CountryName,achievements.Champions_Trophy,achievements.T20Cups,achievements.WorldCups
FROM teams
INNER JOIN achievements ON teams.TeamId = achievements.TeamId
order by teams.ranking";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) FROM register"));
$x = $rows["COUNT(*)"];
?>
<!-- ________________________________ -->
<!DOCTYPE html>
<html>
<head>
  <title>Cricpedia</title>
   <link rel="stylesheet" href="vertical-menu.css"> 
  <link rel="icon" type="image/png" href="img/logo.jpeg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type = "text/css">
  #chart-container
  {
    width: 590px;
    height: auto;
  }
</style>  
  <style>
  .back {
	background-image: url('img/back12.jpg');
	padding-bottom:2%;
}
    .wrapper {
      background-color: white;
      display: table;
      width: 100%;
      height: 100%;
    }
    .carousel {
      margin-top: 2%;
      margin-left: 20%;
      margin-bottom: 2%;
      width: 75%;
      height: 70%;
    }
    table,th,td {
      border: 1px solid black;
      border-collapse: seperate;
    }
    th,td {
      padding: 3px;
    }
    th {
      text-align: center;
    }
    td {
      text-align: center;
    }
    table.center {
      position: relative;
      margin-left: 20%;
      margin-right: 45%;
      margin-top: 15%;
      margin-bottom: 3%;
      font-weight: bold;
    }
    tr:nth-child(even) {
      background-color: #FFF300;
      color: #800517;
    }
    tr:nth-child(odd) {
      background-color: #FFAA00;
      color: black;
    }
    th {
      background-color: #B22222;
      color: #F8F8FF;
    }
    .logo {
      position: absolute;
      width: 8%;
      height: 90%;
      top: 1%;
      left: 1%;
    }
    .graph{
      position: absolute;
      margin-left: 52%;
      margin-right: auto;
      margin-top: -25%;
      margin-bottom: auto;
      font-weight: bold;
      color: white;
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
  <nav class="navbar navbar-expand-md navbar-dark font-weight-bold sticky-top sansserif"
    style="font-size:20px;background-color:black;height:80px;">
    <?php
      if($logincheck==0)
      {
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
                <a class="nav-link text-red" style="color:orange;">Total Users: <?php echo $x;?></a>
              </li>
              <li vlass="nav-item">
                <a class="nav-link text-white" href="matches.php?logincheck=1">Matches</a>
              </li>
              <li vlass="nav-item">
                <a class="nav-link text-white" href="players.php?logincheck=1">Players</a>
              </li>
              <li vlass="nav-item">
                <a class="nav-link text-white"
                  href="https://www.youtube.com/watch?v=Kwu1yIC-ssg&list=PLtWkiFWAD1czNxQYv-ehzMxvO1V_hoHwe"
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
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
    <?php
			if($logincheck==0)
			{
		?>
        <div class="vertical-menu" style="margin-top:-1.7%;">
          <a href="players.php" class="inactive">Teams</a>
          <a href="india_players.php">India</a>
          <a href="england_players.php">England</a>
          <a href="australia_players.php">Australia</a>
          <a href="new-Zealand_players.php">New Zealand</a>
          <a href="pakistan_players.php">Pakistan</a>
          <a href="south-africa_players.php">South Africa</a>
          <a href="bangladesh_players.php">Bangladesh</a>
          <a href="sri-lanka_players.php">Sri Lanka</a>
          <a href="west-indies_players.php">West Indies</a>
          <a href="afghanistan_players.php">Afghanistan</a>
        </div>
    <?php
			}
      else
      {
		?>
        <div class="vertical-menu" style="margin-top:-1.7%;">
          <a href="players.php?logincheck=1" class="inactive">Teams</a>
          <a href="india_players.php?logincheck=1">India</a>
          <a href="england_players.php?logincheck=1">England</a>
          <a href="australia_players.php?logincheck=1">Australia</a>
          <a href="new-Zealand_players.php?logincheck=1">New Zealand</a>
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
<!-- ________________________________ -->
        <div class="col-lg-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/captains.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/eng.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/nz.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/ind.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/aus.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/pak.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/sl.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/wi.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/sa.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/afg.jpg" alt="Second slide">
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

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
<!-- ________________________________ -->
          <table class="center">
            <tr>
              <th>Ranking</th>
              <th>Team Name</th>
              <th style="width:100px;">Champions Trophy</th>
              <th style="width:60px;">T20 Cups</th>
              <th style="width:60px;">World Cups</th>
            </tr>
      <?php
        while($rows = mysqli_fetch_assoc($result))
        {
      ?>
            <tr>
              <td> <?php echo $rows['Ranking']; ?> </td>
              <td> <?php echo $rows['CountryName']; ?> </td>
              <td> <?php echo $rows['Champions_Trophy']; ?> </td>
              <td> <?php echo $rows['T20Cups']; ?> </td>
              <td> <?php echo $rows['WorldCups']; ?> </td>
            </tr>
      <?php
        }
      ?>
          </table>
    </div>
<!-- ________________________________ -->  
  <div class="graph">
  <div id = "chart-container">
    <canvas id="mycanvas"></canvas>
  </div>
        <!-- JAVASCRIPT-->
  <script type = "text/javascript" src = "js/jquery.min.js"></script>
  <script type = "text/javascript" src = "js/Chart.min.js"></script>
  <script type = "text/javascript" src = "js/app.js"></script>
  </div>
  </div>
</body>
</html>
<!-- ________________________________ -->