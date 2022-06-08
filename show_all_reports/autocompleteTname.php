<?php
if (isset($_GET['teacher-name'])) {
/*     $servername = "localhost:3306";
$username = "rahul";
$password = "Tiwari@2022";
$dbname = "reportcard"; */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "reportcard";

$conn = new mysqli($servername, $username, $password, $dbname);

//Inputs

$get = "SELECT * FROM `mathreportcard` WHERE `tname` LIKE '{$_GET['teacher-name']}%' LIMIT 25";
// $get = "SELECT * FROM `mathreportcard` WHERE `tname`='{$_GET['teacher-name']}'";

if (!$conn -> query($get)) {
  echo("Error description: " . $conn -> error);
}

$result = mysqli_query($conn, $get);

$res = array();

if ($result->num_rows > 0) {
  while ($rowr = mysqli_fetch_array($result)) {
    $res[] = $rowr['tname'];
  }
} else {
  $res = array();
}

echo json_encode($res);

$conn->close();

}
?>