<?php

/*   $servername = "localhost:3306";
  $username = "rahul";
  $password = "Tiwari@2022";
  $dbname = "reportcard"; */

  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $dbname = "reportcard";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($_POST['selector']!=='tname') {
    
    $selector = $_POST['selector'];
    
    if($selector==='allReports') {
      $get = "SELECT * FROM `mathreportcard`";
    } else if($selector==='masterReport') {
      $fromDate = $_POST['fromDate'];
      if ($fromDate === "") {
        $fromDate = null;
      }
      $toDate = $_POST['toDate'];
      if ($toDate === "") {
        $toDate = null;
      }
      $tname = $_POST['tname'];
      $grade = $_POST['grade'];
      if ($grade === '') {
        $grade = null;
      }
      if(isset($fromDate)&&isset($toDate)&&isset($tname)&&isset($grade)) {
        $get = "SELECT * FROM `mathreportcard` WHERE (`date` BETWEEN '$fromDate' AND '$toDate') AND `tname` = '$tname' AND `grade` = '$grade'";
      } else if(is_null($fromDate)&&is_null($toDate)&&isset($tname)&&isset($grade)) {
        $get = "SELECT * FROM `mathreportcard` WHERE `tname` = '$tname' AND `grade` = '$grade'";
      } else if(isset($fromDate)&&isset($toDate)&&isset($tname)&&is_null($grade)) {
        $get = "SELECT * FROM `mathreportcard` WHERE (`date` BETWEEN '$fromDate' AND '$toDate') AND `tname` = '$tname'";
      } else {
        return;
      }
    } else if($selector==='dateWise') {
      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];
      $get = "SELECT * FROM `mathreportcard` WHERE `date` BETWEEN '$fromDate' AND '$toDate'";
    } else if($selector==='TNWise') {
      $tname = $_POST['tname'];
      $get = "SELECT * FROM `mathreportcard` WHERE `tname` = '$tname'";
    } else if($selector==='gradeWise') {
      $grade = $_POST['grade'];
      $get = "SELECT * FROM `mathreportcard` WHERE `grade` = '$grade'";
    } else {
      return;
    }

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

        if($outOf12<10) {
          echo "<td>0".$outOf12."&#47;12</td>";
        } else {
          echo "<td>".$outOf12."&#47;12</td>";
        }

        echo "<td class=\"get-report-card text-center\"><i class=\"fa-solid fa-file-pdf\"></i></td>";

        echo "</tr>";

      }
    } else {
      echo "<h4 style=\"color: #EF661Fff;margin-top: 40px;\">No records found!</h4>";
    }      
    $conn->close();

?>
<script>
  $get_report_card = [];
  $( document ).ready(function() {
    $('.get-report-card').click(function() {
        $row = $(this).closest('tr');
        $columns = $row.find('td').slice(1, 5);
    
        $columns.addClass('row-highlight');
    
        $.each($columns, function(i, item) {
          $get_report_card.push(item.innerHTML);
          // alert(item.innerHTML);
        });

        $pdf_str = "../get_report_main/generator/index.php?tname="+$get_report_card[0]+"&pname="+$get_report_card[1]+"&sname="+$get_report_card[2]+"&grade="+$get_report_card[3];

        $.ajax({
          url: '../get_report_main/generator/index.php',
          type: 'GET',
          success: function(html) {
            window.location.replace($pdf_str);
          }
        })
    });
  });
</script>
<?php
  } else {

    $auto_get = "SELECT DISTINCT `tname` FROM `mathreportcard` WHERE `tname` LIKE '".$_POST['term']."%'";
    
    if (!$conn -> query($auto_get)) {
      echo("Error description: " . $conn -> error);
    }
  
    $auto_result = mysqli_query($conn, $auto_get);
  
    if ($auto_result->num_rows > 0) {
      while ($user = $auto_result->fetch_assoc()) {
        $res[] = $user['tname'];
      } 
    } else {
      $res = array();
    }
  
    echo json_encode($res);
    
  }
?>