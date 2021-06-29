<?php
header('Content-Type: application/json');
require_once('mindex.php');
$query1 = sprintf("Select teams.CountryName,teams.Ratings from teams");
$result = mysqli_query($conn,$query1);
$data = array();
foreach ($result as $row)
  $data[] = $row;
print json_encode($data);
?>