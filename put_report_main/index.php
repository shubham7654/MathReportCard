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
  <link rel="stylesheet" href="style.css">
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
                <input type="text" name="tname" id="tname-input" class="inputfield form-control name-inputfield " placeholder="Enter Teacher&#39;s first Name..." required>
              </div>
              <div id="pname-input-container" class="name-container input-group my-3">
                <i class="fa-solid fa-person input-group-text"></i>
                <input type="text" name="pname" id="pname-input" class="inputfield form-control name-inputfield " placeholder="Enter Parent&#39;s first Name..." required>
              </div>
              <div id="sname-input-container" class="name-container input-group my-3">
                <i class="fa-solid fa-child input-group-text"></i>
                <input type="text" name="sname" id="sname-input" class="inputfield form-control name-inputfield " placeholder="Enter Student&#39;s first Name..." required>
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
          <div id="skill-container" class="px-3 pt-3 medium-container">
            <p id="skill-text-container" class="form-control-plaintext card bg-primary text-white">Marks:</p>
            <div id="q1q8-container">
              <div id="q1-input-container" class="q1q8-input-container">
                <div class="q1q8-text-container">
                  <p class="q1q8-label-text"><span class="label-text-container">Q1:</span></p>
                </div>
                <div id="radio-1-container" class="radio-container">
                  <div class="form-check">
                    <input type="radio" name="q1-input" id="radio-b1" class="radio-input form-check-input" value="1" required>
                    <label for="radio-b1" id="label-t1" class="form-check-label">24</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="q1-input" id="radio-b2" class="radio-input form-check-input" value="off" required>
                    <label for="radio-b2" id="label-t2" class="form-check-label">Any Other Answer</label>
                  </div>
                </div>
              </div>
              <div id="q2-input-container" class="q1q8-input-container">
                <div class="q1q8-text-container">
                  <p class="q1q8-label-text"><span class="label-text-container">Q2:</span></p>
                </div>
                <div id="radio-2-container" class="radio-container">
                  <div class="form-check">
                    <input type="radio" name="q2-input" id="radio-b3" class="radio-input form-check-input" value="1" required>
                    <label for="radio-b3" id="label-t3" class="form-check-label">85</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="q2-input" id="radio-b4" class="radio-input form-check-input" value="off" required>
                    <label for="radio-b4" id="label-t4" class="form-check-label">Any Other Answer</label>
                  </div>
                </div>
              </div>
              <div id="q3-input-container" class="q1q8-input-container">
                <div class="q1q8-text-container">
                  <p class="q1q8-label-text"><span class="label-text-container">Q3:</span></p>
                </div>
                <div id="radio-3-container" class="radio-container">
                  <div class="form-check">
                    <input type="radio" name="q3-input" id="radio-b5" class="radio-input form-check-input" value="1" required>
                    <label for="radio-b5" id="label-t5" class="form-check-label">11</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="q3-input" id="radio-b6" class="radio-input form-check-input" value="off" required>
                    <label for="radio-b6" id="label-t6" class="form-check-label">Any Other Answer</label>
                  </div>
                </div>
              </div>
              <div id="q4-input-container" class="q1q8-input-container">
                <div class="q1q8-text-container">
                  <p class="q1q8-label-text"><span class="label-text-container">Q4:</span></p>
                </div>
                <div id="radio-4-container" class="radio-container">
                  <div class="form-check">
                    <input type="radio" name="q4-input" id="radio-b7" class="radio-input form-check-input" value="1" required>
                    <label for="radio-b7" id="label-t7" class="form-check-label">9</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="q4-input" id="radio-b8" class="radio-input form-check-input" value="off" required>
                    <label for="radio-b8" id="label-t8" class="form-check-label">Any Other Answer</label>
                  </div>
                </div>
              </div>
              <hr class="border-bottom"/>
              <div id="skills-main-container">
                <div id="q5-input-container" class="q1q8-input-container">
                  <div class="q1q8-text-container">
                    <p class="q1q8-label-text"><span class="label-text-container">Q5:</span></p>
                  </div>
                  <div id="check-5-container" class="check-container">
                    <div class="form-check">
                      <input type="radio" name="q5-input" id="check-b9" class="check-input form-check-input" value="a" required>
                      <label for="check-b9" id="label-t9" class="form-check-label">8</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q5-input" id="check-b10" class="check-input form-check-input" value="b" required>
                      <label for="check-b10" id="label-t10" class="form-check-label">7</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q5-input" id="check-b11" class="check-input form-check-input" value="c" required>
                      <label for="check-b11" id="label-t11" class="form-check-label">Random Answer</label>
                    </div>
                  </div>
                </div>
                <div id="q6-input-container" class="q1q8-input-container">
                  <div class="q1q8-text-container">
                    <p class="q1q8-label-text"><span class="label-text-container">Q6:</span></p>
                  </div>
                  <div id="check-6-container" class="check-container">
                    <div class="form-check">
                      <input type="radio" name="q6-input" id="check-b12" class="check-input form-check-input" value="a" required>
                      <label for="check-b12" id="label-t12" class="form-check-label">30</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q6-input" id="check-b13" class="check-input form-check-input" value="b" required>
                      <label for="check-b13" id="label-t13" class="form-check-label">Greater than 23 but not 30</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q6-input" id="check-b14" class="check-input form-check-input" value="c" required>
                      <label for="check-b14" id="label-t14" class="form-check-label">Less than 23</label>
                    </div>
                  </div>
                </div>
                <div id="q7-input-container" class="q1q8-input-container">
                  <div class="q1q8-text-container">
                    <p class="q1q8-label-text"><span class="label-text-container">Q7:</span></p>
                  </div>
                  <div id="check-7-container" class="check-container">
                    <div class="form-check">
                      <input type="radio" name="q7-input" id="check-b15" class="check-input form-check-input" value="a" required>
                      <label for="check-b15" id="label-t15" class="form-check-label">52</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q7-input" id="check-b16" class="check-input form-check-input" value="b" required>
                      <label for="check-b16" id="label-t16" class="form-check-label">Wrong Answer</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q7-input" id="check-b17" class="check-input form-check-input" value="c" required>
                      <label for="check-b17" id="label-t17" class="form-check-label">No Answer</label>
                    </div>
                  </div>
                </div>
                <div id="q8-input-container" class="q1q8-input-container">
                  <div class="q1q8-text-container">
                    <p class="q1q8-label-text"><span class="label-text-container">Q8:</span></p>
                  </div>
                  <div id="check-8-container" class="check-container">
                    <div class="form-check">
                      <input type="radio" name="q8-input" id="check-b18" class="check-input form-check-input" value="a" required>
                      <label for="check-b18" id="label-t18" class="form-check-label">50</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q8-input" id="check-b19" class="check-input form-check-input" value="b" required>
                      <label for="check-b19" id="label-t19" class="form-check-label">Wrong Answer (95, 59, 74 or 77)</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="q8-input" id="check-b20" class="check-input form-check-input" value="c" required>
                      <label for="check-b20" id="label-t20" class="form-check-label">No Answer or Random Answer</label>
                    </div>
                  </div>
                </div>
              </div>    
            </div>
            <hr class="border-bottom"/>
            <div id="strength-development-container">
              <div id="strength-container" class="strength-development-container">
                <div id="strength-para" class="">
                  <p id="strength-para-text" class="sd-para-text form-control-plaintext card bg-primary text-white">Your Child&#39;s Strengths:</p>
                </div>
                <div id="strengths-container" class="sds-container">
                  <div class="strengths-child-container"><input type="checkbox" name="check_list[]" id="uncheckone" class="form-check-input" value="Child answers questions in a short time frame." onchange="disablecheckone()"><label for="uncheckone" class="form-check-label text-white" >Child answers questions in a short time frame.</label></div>
                  <div class="strengths-child-container"><input type="checkbox" name="check_list[]" id="unchecktwo" class="form-check-input" value="Child is able to comprehend the question easily." onchange="disablechecktwo()"><label for="unchecktwo" class="form-check-label text-white" >Child is able to comprehend the question easily.</label></div>
                  <div class="strengths-child-container"><input type="checkbox" name="check_list[]" id="uncheckthree" class="form-check-input" value="Child is able to think out of the box." onchange="disablecheckthree()"><label for="uncheckthree" class="form-check-label text-white" >Child is able to think out of the box.</label></div>
                  <div class="strengths-child-container"><input type="checkbox" name="check_list[]" id="uncheckfour" class="form-check-input" value="Child displays strong grasp of mathematical concepts." onchange="disablecheckfour()"><label for="uncheckfour" class="form-check-label text-white">Child displays strong grasp of mathematical concepts.</label></div>
                </div>
              </div>
              <div id="develop-container" class="strength-development-container text-white">
                <div id="develop-para">
                  <p id="develop-para-text" class="sd-para-text form-control-plaintext card bg-primary text-white">Your Child&#39;s Areas of Development:</p>
                </div>
                <div id="develops-container" class="sds-container">
                  <div class="strengths-child-container"><input type="checkbox" name="check_list1[]" id="checkone" class="form-check-input" value="Child should work on improving speed." checked><label for="checkone" class="form-check-label">Child should work on improving speed.</label></div>
                  <div class="strengths-child-container"><input type="checkbox" name="check_list1[]" id="checktwo" class="form-check-input" value="Child should work on basic comprehension skills." checked><label for="checktwo" class="form-check-label">Child should work on basic comprehension skills.</label></div>
                  <div class="strengths-child-container"><input type="checkbox" name="check_list1[]" id="checkthree" class="form-check-input" value="Child should work on application of logical thinking." checked><label for="checkthree" class="form-check-label">Child should work on application of logical thinking.</label></div>
                  <div class="strengths-child-container"><input type="checkbox" name="check_list1[]" id="checkfour" class="form-check-input" value="Child should work on strengthening mathematical concepts." checked><label for="checkfour" class="form-check-label">Child should work on strengthening mathematical concepts.</label></div>
                </div>
              </div>
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