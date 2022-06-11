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

if($_GET['selector']==='tname') {
  $get = "SELECT DISTINCT `tname` FROM `mathreportcard` WHERE `tname` LIKE '%".$_GET['term']."%'";
} else if($_GET['selector']==='pname') {
  $get = "SELECT DISTINCT `pname` FROM `mathreportcard` WHERE `pname` LIKE '%".$_GET['term']."%'";
} else if($_GET['selector']==='sname') {
  $get = "SELECT DISTINCT `sname` FROM `mathreportcard` WHERE `sname` LIKE '%".$_GET['term']."%'";
}

if (!$conn -> query($get)) {
  echo("Error description: " . $conn -> error);
}

$result = mysqli_query($conn, $get);

if ($result->num_rows > 0) {
  while ($user = $result->fetch_assoc()) {
    if($_GET['selector']==='tname') {
      $res[] = $user['tname'];
    } else if($_GET['selector']==='pname') {
      $res[] = $user['pname'];
    } else if($_GET['selector']==='sname') {
      $res[] = $user['sname'];
    } else {
      return;
    }
  } 
} else {
  $res = array();
}

echo json_encode($res);

?>