<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Report Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Poppins&family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../put_report_main/style.css">
</head>
<body>
  <div id="main-container">
    <div id="left-main-container">
      <div id="beyondskool-left-logo" class="p-3 clearfix">
        <img src="https://gobeyondskool.com/storage/2021/09/BeyondSkool-Logo.svg" width="150px;" class="p-2 float-start">
      </div>
      <div id="background-image-container">
        <img src="../images/report-icon.svg" alt="Report Card Icon">
      </div>
    </div>
    <div id="form-outer-container">
      <form action="generator/index.php" id="form-container" method="get">
        <div id="form-inner-container" class="">
          <div id="beyondskool-right-logo" class="p-3 clearfix">
            <img src="https://gobeyondskool.com/storage/2021/09/BeyondSkool-Logo.svg" width="150px;" class="p-2 float-end">
          </div>
          <div id="info-container" class="px-3 pt-0 medium-container">
            <p id="info-text-container" class="form-control-plaintext card bg-primary text-white my-3">INFO:</p>
            <div id="name-container">
              <div id="tname-input-container" class="name-container input-group my-3">
                <i class="fa-solid fa-chalkboard-teacher input-group-text"></i>
                <input type="text" name="tname" id="tname-input" class="inputfield form-control name-inputfield" placeholder="Enter Teacher&#39;s first Name..." required>
              </div>
              <div id="pname-input-container" class="name-container input-group my-3">
                <i class="fa-solid fa-person input-group-text"></i>
                <input type="text" name="pname" id="pname-input" class="inputfield form-control name-inputfield" placeholder="Enter Parent&#39;s first Name..." required>
              </div>
              <div id="sname-input-container" class="name-container input-group my-3">
                <i class="fa-solid fa-child input-group-text"></i>
                <input type="text" name="sname" id="sname-input" class="inputfield form-control name-inputfield" placeholder="Enter Student&#39;s first Name..." required>
              </div>
            </div>
            <div id="class-input-container">
              <label for="class-input" class="form-control-plaintext"><i class="fa-solid fa-chalkboard left-text"></i>Select Grade:</label>
              <select name="grade" id="class-input" class="inputfield form-control text-center">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>  
            <hr class="border-bottom"/>
          </div>
            <!-- <hr />
            <div id="total-container">
              <p id="total-text" class="form-control-plaintext">Total:<span id="total-mark" class="badge bg-success">0</span></p>
            </div>
            <hr /> -->
          </div>
          <div id="submit-container" class="text-center pb-3">
            <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-success">
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>