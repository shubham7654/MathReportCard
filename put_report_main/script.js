$("#form-container").on("submit", function(event) {
    // event.preventDefault();
    $.ajax({
      type: "POST",
      url: "save.php",
      data: $(this).serialize(),
      cache: false,
        success: function(data) {
        },
        error: function(xhr, status, error) {
        console.error(xhr);
        }
    });
  });

$("#class-input").on("change", function() {
  $.ajax({
    type: 'GET',
    url: "strength_development.php",
    data: {grade: $("#class-input").val()},
    success: function(result){
      $("#q1q8-container").html(result);
    }});
});

let uncheckone = document.querySelector("#uncheckone");
let unchecktwo = document.querySelector("#unchecktwo");
let uncheckthree = document.querySelector("#uncheckthree");
let uncheckfour = document.querySelector("#uncheckfour");
let checkone = document.querySelector("#checkone");
let checktwo = document.querySelector("#checktwo");
let checkthree = document.querySelector("#checkthree");
let checkfour = document.querySelector("#checkfour");

function disablecheckone() {
  if(uncheckone.checked==true){
    checkone.checked=false;
    checkone.disabled=true;
  } else if (uncheckone.checked==false) {
    checkone.checked=true;
    checkone.disabled=false;
  }else {
    return 0;
  }
}
function disablechecktwo() {
  if(unchecktwo.checked==true){
    checktwo.checked=false;
    checktwo.disabled=true;
  } else if (unchecktwo.checked==false) {
    checktwo.checked=true;
    checktwo.disabled=false;
  }else {
    return 0;
  }
}
function disablecheckthree() {
  if(uncheckthree.checked==true){
    checkthree.checked=false;
    checkthree.disabled=true;
  } else if (uncheckthree.checked==false) {
    checkthree.checked=true;
    checkthree.disabled=false;
  }else {
    return 0;
  }
}
function disablecheckfour() {
  if(uncheckfour.checked==true){
    checkfour.checked=false;
    checkfour.disabled=true;
  } else if (uncheckfour.checked==false) {
    checkfour.checked=true;
    checkfour.disabled=false;
  }else {
    return 0;
  }
}  
