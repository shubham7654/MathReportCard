<?php
  
/*     $servername = "localhost:3306";
  $username = "rahul";
  $password = "Tiwari@2022";
  $dbname = "reportcard"; */

  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $dbname = "reportcard";

  $conn = new mysqli($servername, $username, $password, $dbname);

/*     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } */

  //Inputs

/*     $tname = $_GET['tname'];
  $pname = $_GET['pname'];
  $sname = $_GET['sname'];
  $grade = $_GET['grade']; */

  $get = "SELECT * FROM `mathreportcard`";

  if (!$conn -> query($get)) {
    echo("Error description: " . $conn -> error);
  }

  $result = mysqli_query($conn, $get);

  if ($result->num_rows > 0) {

    while ($rowr = $result->fetch_assoc()) {
      $date = new DateTime($rowr['date']);
      echo "<tr>";
      echo "<td>".$date->format('d-m-Y')."</td>";
      echo "<td>".$rowr['tname']."</td>";
      echo "<td>".$rowr['pname']."</td>";
      echo "<td>".$rowr['sname']."</td>";
      echo "<td>".$rowr['grade']."</td>";
      if ($rowr['q1']=='off') {
        echo "<td>0</td>";
        $q1_marks = 0;
      } else { 
        echo "<td>1</td>";
        $q1_marks = 1;
      }
      if ($rowr['q2']=='off') {
        echo "<td>0</td>";
        $q2_marks = 0;
      } else { 
        echo "<td>1</td>";
        $q2_marks = 1;
      }
      if ($rowr['q3']=='off') {
        echo "<td>0</td>";
        $q3_marks = 0;
      } else { 
        echo "<td>1</td>";
        $q3_marks = 1;
      }
      if ($rowr['q4']=='off') {
        echo "<td>0</td>";
        $q4_marks = 0;
      } else { 
        echo "<td>1</td>";
        $q4_marks = 1;
      }
      if ($rowr['q5']=='a') {
        echo "<td>2</td>";
        $q5_marks = 2;
      } else if ($rowr['q5']=='b') {
        echo "<td>1</td>";
        $q5_marks = 1;
      } else {
        echo "<td>0</td>";
        $q5_marks = 0;
      }
      if ($rowr['q6']=='a') {
        echo "<td>2</td>";
        $q6_marks = 2;
      } else if ($rowr['q6']=='b') {
        echo "<td>1</td>";
        $q6_marks = 1;
      } else {
        echo "<td>0</td>";
        $q6_marks = 0;
      }
      if ($rowr['q7']=='a') {
        echo "<td>2</td>";
        $q7_marks = 2;
      } else if ($rowr['q7']=='b') {
        echo "<td>1</td>";
        $q7_marks = 1;
      } else {
        echo "<td>0</td>";
        $q7_marks = 0;
      }
      if ($rowr['q8']=='a') {
        echo "<td>2</td>";
        $q8_marks = 2;
      } else if ($rowr['q8']=='b') {
        echo "<td>1</td>";
        $q8_marks = 1;
      } else {
        echo "<td>0</td>";
        $q8_marks = 0;
      }
      $outOf4 = $q1_marks+$q2_marks+$q3_marks+$q4_marks;

      echo "<td>".$outOf4."&#47;4</td>";

      $outOf8 = $q5_marks+$q6_marks+$q7_marks+$q8_marks;

      echo "<td>".$outOf8."&#47;8</td>";

      $outOf12 = $q1_marks+$q2_marks+$q3_marks+$q4_marks+$q5_marks+$q6_marks+$q7_marks+$q8_marks;

      echo "<td>".$outOf12."&#47;12</td>";
      
      echo "</tr>";
    }
  }      

  $conn->close();

?>