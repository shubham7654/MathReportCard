<?php
  $grade = $_GET['grade'];
  if ($grade=='2') {
    echo '<div id="q1-input-container" class="q1q8-input-container">
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
  </div>';
  } else if ($grade=='3') {
    echo '<div id="q1-input-container" class="q1q8-input-container">
    <div class="q1q8-text-container">
      <p class="q1q8-label-text"><span class="label-text-container">Q1:</span></p>
    </div>
    <div id="radio-1-container" class="radio-container">
      <div class="form-check">
        <input type="radio" name="q1-input" id="radio-b1" class="radio-input form-check-input" value="1" required>
        <label for="radio-b1" class="form-check-label">4</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q1-input" id="radio-b2" class="radio-input form-check-input" value="off" required>
        <label for="radio-b2" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b3" class="form-check-label">665</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q2-input" id="radio-b4" class="radio-input form-check-input" value="off" required>
        <label for="radio-b4" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b5" class="form-check-label">80</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q3-input" id="radio-b6" class="radio-input form-check-input" value="off" required>
        <label for="radio-b6" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b7" class="form-check-label">grams</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q4-input" id="radio-b8" class="radio-input form-check-input" value="off" required>
        <label for="radio-b8" class="form-check-label">Any Other Answer</label>
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
          <label for="check-b9" class="form-check-label">4</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q5-input" id="check-b10" class="check-input form-check-input" value="b" required>
          <label for="check-b10" class="form-check-label">5</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q5-input" id="check-b11" class="check-input form-check-input" value="c" required>
          <label for="check-b11" class="form-check-label">Random Answer</label>
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
          <label for="check-b12" class="form-check-label">37</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q6-input" id="check-b13" class="check-input form-check-input" value="b" required>
          <label for="check-b13" class="form-check-label">Greater than 28 but not 37</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q6-input" id="check-b14" class="check-input form-check-input" value="c" required>
          <label for="check-b14" class="form-check-label">Less than 28</label>
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
          <label for="check-b15" class="form-check-label">116</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q7-input" id="check-b16" class="check-input form-check-input" value="b" required>
          <label for="check-b16" class="form-check-label">Wrong Answer</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q7-input" id="check-b17" class="check-input form-check-input" value="c" required>
          <label for="check-b17" class="form-check-label">No Answer</label>
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
          <label for="check-b18" class="form-check-label">13</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q8-input" id="check-b19" class="check-input form-check-input" value="b" required>
          <label for="check-b19" class="form-check-label">Wrong Answer</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q8-input" id="check-b20" class="check-input form-check-input" value="c" required>
          <label for="check-b20" class="form-check-label">No Answer or Random Answer</label>
        </div>
      </div>
    </div>
  </div>';
  } else if ($grade=='4') {
    echo '<div id="q1-input-container" class="q1q8-input-container">
    <div class="q1q8-text-container">
      <p class="q1q8-label-text"><span class="label-text-container">Q1:</span></p>
    </div>
    <div id="radio-1-container" class="radio-container">
      <div class="form-check">
        <input type="radio" name="q1-input" id="radio-b1" class="radio-input form-check-input" value="1" required>
        <label for="radio-b1" class="form-check-label">8</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q1-input" id="radio-b2" class="radio-input form-check-input" value="off" required>
        <label for="radio-b2" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b3" class="form-check-label">235</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q2-input" id="radio-b4" class="radio-input form-check-input" value="off" required>
        <label for="radio-b4" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b5" class="form-check-label">500</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q3-input" id="radio-b6" class="radio-input form-check-input" value="off" required>
        <label for="radio-b6" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b7" class="form-check-label">Kilometers</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q4-input" id="radio-b8" class="radio-input form-check-input" value="off" required>
        <label for="radio-b8" class="form-check-label">Any Other Answer</label>
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
          <label for="check-b9" class="form-check-label">Wednesday</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q5-input" id="check-b10" class="check-input form-check-input" value="b" required>
          <label for="check-b10" class="form-check-label">Tuesday or Thursday</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q5-input" id="check-b11" class="check-input form-check-input" value="c" required>
          <label for="check-b11" class="form-check-label">Random Answer</label>
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
          <label for="check-b12" class="form-check-label">24</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q6-input" id="check-b13" class="check-input form-check-input" value="b" required>
          <label for="check-b13" class="form-check-label">12, 10</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q6-input" id="check-b14" class="check-input form-check-input" value="c" required>
          <label for="check-b14" class="form-check-label">Less than 23</label>
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
          <label for="check-b15" class="form-check-label">155</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q7-input" id="check-b16" class="check-input form-check-input" value="b" required>
          <label for="check-b16" class="form-check-label">Wrong Answer</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q7-input" id="check-b17" class="check-input form-check-input" value="c" required>
          <label for="check-b17" class="form-check-label">No Answer</label>
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
          <label for="check-b18" class="form-check-label">32</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q8-input" id="check-b19" class="check-input form-check-input" value="b" required>
          <label for="check-b19" class="form-check-label">Wrong Answer (24, 13, or 10)</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q8-input" id="check-b20" class="check-input form-check-input" value="c" required>
          <label for="check-b20" class="form-check-label">No Answer or Random Answer</label>
        </div>
      </div>
    </div>
  </div>';
  } else if ($grade=='5') {
    echo '<div id="q1-input-container" class="q1q8-input-container">
    <div class="q1q8-text-container">
      <p class="q1q8-label-text"><span class="label-text-container">Q1:</span></p>
    </div>
    <div id="radio-1-container" class="radio-container">
      <div class="form-check">
        <input type="radio" name="q1-input" id="radio-b1" class="radio-input form-check-input" value="1" required>
        <label for="radio-b1" class="form-check-label">99999</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q1-input" id="radio-b2" class="radio-input form-check-input" value="off" required>
        <label for="radio-b2" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b3" class="form-check-label">63</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q2-input" id="radio-b4" class="radio-input form-check-input" value="off" required>
        <label for="radio-b4" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b5" class="form-check-label">11</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q3-input" id="radio-b6" class="radio-input form-check-input" value="off" required>
        <label for="radio-b6" class="form-check-label">Any Other Answer</label>
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
        <label for="radio-b7" class="form-check-label">XXIII</label>
      </div>
      <div class="form-check">
        <input type="radio" name="q4-input" id="radio-b8" class="radio-input form-check-input" value="off" required>
        <label for="radio-b8" class="form-check-label">Any Other Answer</label>
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
          <label for="check-b9" class="form-check-label">Saturday</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q5-input" id="check-b10" class="check-input form-check-input" value="b" required>
          <label for="check-b10" class="form-check-label">Friday or Sunday</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q5-input" id="check-b11" class="check-input form-check-input" value="c" required>
          <label for="check-b11" class="form-check-label">Random Answer</label>
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
          <label for="check-b12" class="form-check-label">27</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q6-input" id="check-b13" class="check-input form-check-input" value="b" required>
          <label for="check-b13" class="form-check-label">9 or 3</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q6-input" id="check-b14" class="check-input form-check-input" value="c" required>
          <label for="check-b14" class="form-check-label">Random Answer or Wrong Answer</label>
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
          <label for="check-b15" class="form-check-label">100</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q7-input" id="check-b16" class="check-input form-check-input" value="b" required>
          <label for="check-b16" class="form-check-label">Wrong Answer</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q7-input" id="check-b17" class="check-input form-check-input" value="c" required>
          <label for="check-b17" class="form-check-label">No Answer</label>
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
          <label for="check-b18" class="form-check-label">2</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q8-input" id="check-b19" class="check-input form-check-input" value="b" required>
          <label for="check-b19" class="form-check-label">Wrong Answer (0, 4, 6 or 8)</label>
        </div>
        <div class="form-check">
          <input type="radio" name="q8-input" id="check-b20" class="check-input form-check-input" value="c" required>
          <label for="check-b20" class="form-check-label">No Answer or Random Answer</label>
        </div>
      </div>
    </div>
  </div>';
  } else {
    return;
  }
?>