<?php

$servername = "localhost:3306";
$username = "rahul";
$password = "Tiwari@2022";
$dbname = "reportcard";

/* $servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "reportcard"; */

$conn = mysqli_connect($servername, $username, $password, $dbname);

date_default_timezone_set("Asia/Kolkata");

if(!$conn){
  die('Could not Connect MySql Server:' .mysql_error());
}

// $my_date = date("Y-m-d H-i-s");
$my_date = date("Y-m-d");
$TeacherName = $_POST['tname'];
$ParentName = $_POST['pname'];
$ChildName = $_POST['sname'];
$grade = $_POST['grade'];
$q1input = $_POST['q1-input'];
$q2input = $_POST['q2-input'];
$q3input = $_POST['q3-input'];
$q4input = $_POST['q4-input'];
$q5input = $_POST['q5-input'];
$q6input = $_POST['q6-input'];
$q7input = $_POST['q7-input'];
$q8input = $_POST['q8-input'];

$checklist1 = $_POST['check_list'];
if (isset($checklist1)) {
  $checklist_string_1 = implode(",", $checklist1);
} else {
  $checklist_string_1 = '';
}

$checklist2 = $_POST['check_list1'];
if (isset($checklist2)) {
  $checklist_string_2 = implode(",", $checklist2);
} else {
  $checklist_string_2 = '';
}

if (mysqli_query($conn, "INSERT INTO `mathreportcard`(`date`, `tname`, `pname`, `sname`, `grade`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `check_list_1`, `check_list_2`) VALUES ('$my_date', '$TeacherName', '$ParentName', '$ChildName', $grade, '$q1input', '$q2input', '$q3input', '$q4input', '$q5input', '$q6input', '$q7input', '$q8input', '$checklist_string_1', '$checklist_string_2')")) {
} else {
    echo "Error:" . mysqli_error($conn);
}

mysqli_close($conn);

?>