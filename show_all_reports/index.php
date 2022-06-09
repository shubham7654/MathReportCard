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

  $get = "SELECT * FROM `mathreportcard` LIMIT 10";

  if (!$conn -> query($get)) {
    echo("Error description: " . $conn -> error);
  }

  $result = mysqli_query($conn, $get);

  $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Reports</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Poppins&family=Source+Code+Pro&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- JQuery UI -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="header-container">
    <div id="image-container">
      <img src="https://gobeyondskool.com/storage/2021/09/BeyondSkool-Logo.svg" alt="BeyondSkool Logo">
    </div>
    <div id="export-button-container">
      <div id="export-container-main">
        <button class="btn btn-success" onclick="download_table_as_csv('report-table');">Export to CSV</button>
      </div>
    </div>
  </div>
  <div id="table-outer-container">
    <div id="table-container" class="shadow p-3">
      <table id="report-table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col" id="filter-date" data-bs-toggle="modal" data-bs-target="#dateModal" title="Click to filter by date">Date</th>
            <th scope="col" id="filter-tname" data-bs-toggle="modal" data-bs-target="#teacherModal" title="Click to filter by teacher name">Teacher Name</th>
            <th scope="col">Parent Name</th>
            <th scope="col">Student Name</th>
            <th scope="col" id="filter-grade" data-bs-toggle="modal" data-bs-target="#gradeModal" title="Click to filter by grade">Grade</th>
            <th scope="col">Q1</th>
            <th scope="col">Q2</th>
            <th scope="col">Q3</th>
            <th scope="col">Q4</th>
            <th scope="col">Q5</th>
            <th scope="col">Q6</th>
            <th scope="col">Q7</th>
            <th scope="col">Q8</th>
            <th scope="col"
            id="filter-marks-out-of-4" data-bs-toggle="modal" data-bs-target="#marksOutOf4Modal" title="Click to filter by marks out of 4">Q1-Q4 Total</th>
            <th scope="col" id="filter-marks-out-of-8" data-bs-toggle="modal" data-bs-target="#marksOutOf8Modal" title="Click to filter by marks out of 8">Q5-Q8 Total</th>
            <th scope="col" id="filter-marks-out-of-12" data-bs-toggle="modal" data-bs-target="#marksOutOf12Modal" title="Click to filter by marks out of 12">Grand Total</th>
          </tr>
        </thead>
        <tbody id="table-body">
        <?php
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
        ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="show-more-reports-container" class="mx-3">
    <p id="show-more-reports-button" class="text-primary shadow rounded p-2 font-weight-bold">Show more reports...</p>
    <p id="master-filter-reports-button" class="text-primary shadow rounded p-2 font-weight-bold" data-bs-toggle="modal" data-bs-target="#masterModal">Master filter reports...</p>
  </div>
  <!-- Master Filter -->
  <div class="modal fade" id="masterModal" tabindex="-1" aria-labelledby="masterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content container-fluid">
        <div class="modal-header">
          <h5 class="modal-title" id="masterModalLabel">Master Filter Reports</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
          <div class="mb-3 col">
            <h5>Select Date Range</h5>
            <label for="master-from-input" class="col-form-label">From:</label>
            <input type="date" id="master-from-input" class="form-control" value="">
            <label for="master-to-input" class="col-form-label">To:</label>
            <input type="date" id="master-to-input" class="form-control"  value="">
          </div>
          <div class="mb-3 col">
            <div class="mb-3 col">
              <h5>Select Teacher Name</h5>
              <label for="master-tname" class="col-form-label">Teacher Name:</label>
              <input type="text" class="form-control" id="master-tname" name="master-tname">
              <ul class="autocomplete-items"></ul>
            </div>
            <hr>
            <div class="mb-3 col">
            <h5>Select Grade</h5>
            <label for="master-grade-name" class="col-form-label">Grade:</label>
            <select class="form-control" id="master-grade-name" value="null">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="" selected="selected" style="display: none;"></option>
            </select>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" id="masterFilter" class="btn btn-primary" data-bs-dismiss="modal" value="Next">
        </div>
      </div>
    </div>
  </div>

  <!-- Date Filter -->

  <div class="modal fade" id="dateModal" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dateModalLabel">Filter by Date</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="from-input" class="col-form-label">From:</label>
            <input type="date" id="from-input" class="form-control">
            <label for="to-input" class="col-form-label">To:</label>
            <input type="date" id="to-input" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" id="filterByDate" class="btn btn-primary" data-bs-dismiss="modal" value="Next">
        </div>
      </div>
    </div>
  </div>

  <!-- Teacher Name Filter -->

  <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="teacherModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="teacherModalLabel">Filter by Teacher Name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="tname" class="col-form-label">Teacher Name:</label>
            <input type="text" class="form-control" id="tname" name="tname">
            <ul id="autocomplete-items"></ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" id="filterByTeacherName" class="btn btn-primary" data-bs-dismiss="modal" value="Next">
        </div>
      </div>
    </div>
  </div>

  <!-- Grade Filter -->

  <div class="modal fade" id="gradeModal" tabindex="-1" aria-labelledby="gradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="gradeModalLabel">Filter by Grade</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="grade-name" class="col-form-label">Grade:</label>
            <select class="form-control" id="grade-name" name="filter-grade">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" data-bs-dismiss="modal" id="filterByGrade" class="btn btn-primary" value="Next">
        </div>  
      </div>
    </div>
  </div>
  
  <!-- Marks Filter -->

  <div class="modal fade" id="marksOutOf4Modal" tabindex="-1" aria-labelledby="marksOutOf4ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="marksOutOf4ModalLabel">Filter by Marks Out of 4</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="OutOf4-name" class="col-form-label">Marks Out of 4:</label>
            <select class="form-control" id="OutOf4-name" name="filter-marks-out-of-4">
              <option value="0/4">0</option>
              <option value="1/4">1</option>
              <option value="2/4">2</option>
              <option value="3/4">3</option>
              <option value="4/4">4</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" data-bs-dismiss="modal" id="filterBymarksOutOf4" class="btn btn-primary" value="Next">
        </div>  
      </div>
    </div>
  </div>

  <!-- Marks Filter Out of 8 -->

  <div class="modal fade" id="marksOutOf8Modal" tabindex="-1" aria-labelledby="marksOutOf8ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="marksOutOf8ModalLabel">Filter by Marks Out of 8</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="OutOf8-name" class="col-form-label">Marks Out of 8:</label>
            <select class="form-control" id="OutOf8-name" name="filter-marks-out-of-8">
              <option value="0/8">0</option>
              <option value="1/8">1</option>
              <option value="2/8">2</option>
              <option value="3/8">3</option>
              <option value="4/8">4</option>
              <option value="5/8">5</option>
              <option value="6/8">6</option>
              <option value="7/8">7</option>
              <option value="8/8">8</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" data-bs-dismiss="modal" id="filterBymarksOutOf8" class="btn btn-primary" value="Next">
        </div>  
      </div>
    </div>
  </div>

  <!-- Marks Filter Out of 12 -->

  <div class="modal fade" id="marksOutOf12Modal" tabindex="-1" aria-labelledby="marksOutOf12ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="marksOutOf12ModalLabel">Filter by Marks Out of 12</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="OutOf12-name" class="col-form-label">Marks Out of 12:</label>
            <select class="form-control" id="OutOf12-name" name="filter-marks-out-of-12">
              <option value="0/12">0</option>
              <option value="1/12">1</option>
              <option value="2/12">2</option>
              <option value="3/12">3</option>
              <option value="4/12">4</option>
              <option value="5/12">5</option>
              <option value="6/12">6</option>
              <option value="7/12">7</option>
              <option value="8/12">8</option>
              <option value="9/12">9</option>
              <option value="10/12">10</option>
              <option value="11/12">11</option>
              <option value="12/12">12</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" data-bs-dismiss="modal" id="filterBymarksOutOf12" class="btn btn-primary" value="Next">
        </div>  
      </div>
    </div>
  </div>
  <script>
    $( function() {
      $( "#tname" ).autocomplete({
        source: 'autocompleteTname.php',
        minLength: 1,
        autoFocus:true,
        delay: 0,
        appendTo: "#autocomplete-items"
      });
    });
    $( function() {
      $( "#master-tname" ).autocomplete({
        source: 'autocompleteTname.php',
        minLength: 1,
        autoFocus:true,
        delay: 0,
        appendTo: ".autocomplete-items"
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="script.js"></script>
</body>
</html>