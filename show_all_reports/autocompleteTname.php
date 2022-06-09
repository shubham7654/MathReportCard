<?php

/* $servername = "localhost:3306";
$username = "rahul";
$password = "Tiwari@2022";
$dbname = "reportcard"; */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "reportcard";

$conn = new mysqli($servername, $username, $password, $dbname);

//Query

$get = "SELECT DISTINCT `tname` FROM `mathreportcard` WHERE `tname` LIKE '".$_GET['term']."%'";

if (!$conn -> query($get)) {
  echo("Error description: " . $conn -> error);
}

$result = mysqli_query($conn, $get);

if ($result->num_rows > 0) {
  while ($user = $result->fetch_assoc()) {
    $res[] = $user['tname'];
  } 
} else {
  $res = array();
}

echo json_encode($res);

?>