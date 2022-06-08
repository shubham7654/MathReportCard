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
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Poppins&family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <tr>
          <th scope="col" id="filter-date" data-bs-toggle="modal" data-bs-target="#dateModal">Date<span><i class="fa-solid fa-angle-down px-1"></i></span>
          </th>
          <th scope="col" id="filter-tname" data-bs-toggle="modal" data-bs-target="#teacherModal">Teacher Name
            <span><i class="fa-solid fa-angle-down px-1"></i></span>
          </th>
          <th scope="col">Parent Name</th>
          <th scope="col">Student Name</th>
          <th scope="col" id="filter-grade" data-bs-toggle="modal" data-bs-target="#gradeModal">Grade
            <span><i class="fa-solid fa-angle-down px-1"></i></span>
          </th>
          <th scope="col">Q1</th>
          <th scope="col">Q2</th>
          <th scope="col">Q3</th>
          <th scope="col">Q4</th>
          <th scope="col">Q5</th>
          <th scope="col">Q6</th>
          <th scope="col">Q7</th>
          <th scope="col">Q8</th>
          <th scope="col">Q1-Q4 Total</th>
          <th scope="col">Q5-Q8 Total</th>
          <th scope="col">Grand Total</th>
        </tr>
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
    <p id="master-filter-reports-button" class="text-primary shadow rounded p-2 font-weight-bold">Master filter reports...</p>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="dateModal" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dateModalLabel">Filter by Date</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="from-input" class="col-form-label">From:</label>
              <input type="date" id="from-input" class="form-control">
              <label for="to-input" class="col-form-label">To:</label>
              <input type="date" id="to-input" class="form-control">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" id="filterByDate" class="btn btn-primary" data-bs-dismiss="modal" value="Next">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="teacherModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="teacherModalLabel">Filter by Teacher Name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="teacher-name" class="col-form-label">Teacher Name:</label>
              <input type="text" class="form-control" id="teacher-name" name="teacher-name" list="tnames">
              <?php
              if ($result->num_rows > 0) {
                echo '<datalist id="names">';
                while ($rowr = $result->fetch_assoc()) {
              echo "<option value='". $rowr['tname']."'></option>";
              }
          echo '</datalist>';
            }
          ?>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" id="filterByTeacherName" class="btn btn-primary" data-bs-dismiss="modal" value="Next">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="gradeModal" tabindex="-1" aria-labelledby="gradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="gradeModalLabel">Filter by Grade</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="grade-name" class="col-form-label">Grade:</label>
              <select class="form-control" id="grade-name" name="filter-grade">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" 
          data-bs-dismiss="modal" id="filterByGrade" class="btn btn-primary" value="Next">
        </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>