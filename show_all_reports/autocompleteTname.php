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

//Inputs

$get = "SELECT * FROM `mathreportcard` WHERE `tname` LIKE '".$_GET['term']."%' LIMIT 25";

// $get = "SELECT * FROM `mathreportcard` WHERE `tname` LIKE '%s%' LIMIT 25";

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

// echo json_encode($_GET['tname']);

// echo json_encode(["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"]);

?>