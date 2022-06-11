<?php

  if(isset($_GET['submit'])) {

    //Inputs

    $tname = $_GET['tname'];
    $pname = $_GET['pname'];
    $sname = $_GET['sname'];
    $q1_input = $_GET['q1-input'];
    $q2_input = $_GET['q2-input'];
    $q3_input = $_GET['q3-input'];
    $q4_input = $_GET['q4-input'];
    $q5_input = $_GET['q5-input'];
    $q6_input = $_GET['q6-input'];
    $q7_input = $_GET['q7-input'];
    $q8_input = $_GET['q8-input'];

    //Skills Logic

    if ($q5_input=='a') {
      $logical = "Excellent";
    } else if ($q5_input=='b') {
      $logical = "Good";
    } else {
      $logical = "Average";
    }
    if ($q6_input=='a') {
      $analytical = "Excellent";
    } else if ($q6_input=='b') {
      $analytical = "Good";
    } else {
      $analytical = "Average";
    }
    if ($q7_input=='a') {
      $computation = "Excellent";
    } else if ($q7_input=='b') {
      $computation = "Good";
    } else {
      $computation = "Average";
    }
    if ($q8_input=='a') {
      $higher_order = "Excellent";
    } else if ($q8_input=='b') {
      $higher_order = "Good";
    } else {
      $higher_order = "Average";
    }

  }
  
?>  
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $sname ?>&#39;s Report Card</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Poppins:wght@400;500;600;700&family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="first-page" class="page-container">
    <div id="border-container-1" class="border-container">
      <div id="image-container-1" class="page-1-medium-container"><img src="../../images/Asset 32@4x.png" alt=""></div>
      <div id="discription-container">
        <p class="">Dear <?php echo $pname; ?>&#44;</p>
        <p>Thank you for attending the BeyondSkool Olympiad Champs Assessment for <?php echo $sname; ?>&#46;</p>
        <p>This assessment has been designed by our own Olympiad Expert&#44; Tejas Sir&#44; who is an alumnus of IIT Bombay&#46;</p>
        <p>Our test will show you where your child stands currently across four major parameters: Critical Thinking&#44; Analytical Reasoning&#44; Computational Skills and Higher Order Thinking Skills&#46; We believe that only once you know where your child is at can we truly take them higher&#46;</p>
        <p>Congratulations on beginning your journey with Olympiads and BeyondSkool&#33;</p>
      </div>
      <div id="image-container-2" class="page-1-medium-container">
        <img src="../../images/Asset 29@4x.png" alt="">
      </div>
    </div>  
  </div>
  <div id="second-page" class="page-container">
    <div id="border-container-2" class="border-container">
      <div id="medium-container-2" class="medium-container">
        <div class="top-label">
          <p class="label-text-container">A detailed analysis of your test score is below</p>
        </div>
        <div id="skills-container">
          <div class="skills-inner-container">
            <div class="legend">
              <span class="icon-span" id="icon-span-1"><img src="../../images/Asset 17@4x.png" alt=""></span>
            </div>
            <div class="skill-discription">
              <div class="discription-text-container">
                <p class="discription-text">Logical Thinking is the ability to approach situations and questions in a systematic manner in order to understand and infer the key underlying principles</p>
              </div>
              <div class="remarks-text-container">
                <span class="remarks-text-mini">
                  <p class="remarks-text"><?php echo $logical; ?></p>
                </span>
              </div>
            </div>
          </div>
          <div class="skills-inner-container">
            <div class="legend">
              <span class="icon-span" id="icon-span-2"><img src="../../images/Asset 23@4x.png" alt=""></span>
            </div>
            <div class="skill-discription">
              <div class="discription-text-container">
                <p class="discription-text">Analytical Reasoning is the skill that helps approach and tackle complex problems by dividing them into simpler parts via observation and identification of patterns and commonalities</p>
              </div>
              <div class="remarks-text-container">
                <span class="remarks-text-mini">
                  <p class="remarks-text"><?php echo $analytical; ?></p>
                </span>
              </div>
            </div>
          </div>
          <div class="skills-inner-container">
            <div class="legend">
              <span class="icon-span" id="icon-span-3"><img src="../../images/Asset 19@4x.png" alt=""></span>
            </div>
            <div class="skill-discription">
              <div class="discription-text-container">
                <p class="discription-text" id="discription-text-3">Computational Skills refer to the ability to use arithmetic operations speedily and accurately</p>
              </div>
              <div class="remarks-text-container">
                <span class="remarks-text-mini">
                  <p class="remarks-text"><?php echo $computation; ?></p>
                </span>
              </div>
            </div>
          </div>
          <div class="skills-inner-container">
            <div class="legend">
              <span class="icon-span" id="icon-span-4"><img src="../../images/Asset 20@4x.png" alt=""></span>
            </div>
            <div class="skill-discription">
              <div class="discription-text-container">
                <p class="discription-text">Higher Order Thinking is the capability to amalgamate, synthesize and employ problem solving methodologies to problems that are relatively challenging and non-trivial</p>
              </div>
              <div class="remarks-text-container">
                <span class="remarks-text-mini">
                  <p class="remarks-text"><?php echo $higher_order; ?></p>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="percentage-container">
          <div id="percent-inner-container">
            <p class="percent-text">Total &#45; <?php echo $percentage; ?>&#37;</p>
          </div>
        </div> -->
      </div>
      <div id="medium-container-2" class="medium-container">
        <div class="top-label">
          <p class="label-text-container">Your Child&#39;s Strengths:</p>
        </div>
        <div class="remarks-outer-container">
          <div class="remarks-inner-container">
            <ul class="ul-container">
              <?php
                if(!empty($_GET['check_list'])) {
                  foreach($_GET['check_list'] as $check) {
                    echo "<li>";
                    echo $check."<br />"; 
                    echo "</li>";
                  }
                }
              ?>            
            </ul>
          </div>
        </div>
      </div>
      <div id="medium-container-3" class="medium-container">
        <div class="top-label">
          <p class="label-text-container">Your Child&#39;s Areas of Development:</p>
        </div>
        <div class="remarks-outer-container">
          <div class="remarks-inner-container">
            <ul class="ul-container">
              <?php
                if(!empty($_GET['check_list1'])) {
                  foreach($_GET['check_list1'] as $check) {
                    echo "<li>";
                    echo $check."<br />"; 
                    echo "</li>";
                  }
                }
              ?>            
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="third-page" class="page-container">
    <div id="border-container-3" class="border-container">
      <div id="distription-text">
        <p>Secret <span>Formula</span> to become <br> an <span>Olympiad Champs</span></p>
        <p>With years of experience in training students for Global Olympiads, Tejas Sir has scientifically designed a programme spanning 23 weeks and 45 Sessions with a step up approach leading your child to crack Olympiads successfully.</p>
      </div>
      <div id="image-container-3">
        <img src="../../images/Asset 33@4x.png" alt="">
      </div>
    </div>  
    <div style="width: 100%; text-align: center; display: flex; justify-content: center;" class="--hide-from-pdf"><a id="saveAsPdfBtn" href="https://www.sejda.com/html-to-pdf" style="text-decoration: none; padding: 5px 10px; box-shadow: 0px 0px 2px #444; border-radius: 3px; z-index: 1; text-align: center; color: #666; margin: 10px;"><b> Save as PDF </b></a>
    </div>
    <script>
      document.getElementById('saveAsPdfBtn').addEventListener('click', function(e) {
        var pageUrl = encodeURIComponent(window.location.href);
        var opts = ['save-link=' + pageUrl, 'pageOrientation=auto'];
        window.open('https://www.sejda.com/html-to-pdf?' + opts.join('&'));
        e.preventDefault();
      });
    </script>
  </div>
</body>
</html>