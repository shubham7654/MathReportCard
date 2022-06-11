function download_table_as_csv(table_id, separator = ',') {
  // Select rows from table_id
  var rows = document.querySelectorAll('table#' + table_id + ' tr');
  // Construct csv
  var csv = [];
  for (var i = 0; i < rows.length; i++) {
      var row = [], cols = rows[i].querySelectorAll('td, th');
      for (var j = 0; j < cols.length; j++) {
          // Clean innertext to remove multiple spaces and jumpline (break csv)
          var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
          // Escape double-quote with double-double-quote (see https://stackoverflow.com/questions/17808511/properly-escape-a-double-quote-in-csv)
          data = data.replace(/"/g, '""');
          // Push escaped string
          row.push('"' + data + '"');
      }
      csv.push(row.join(separator));
  }
  var csv_string = csv.join('\n');
  // Download it
  let month = new Date().getMonth() + 1;
  var filename = 'Reports Data ' + new Date().getDate() + '-' + month + '-' + new Date().getFullYear()+ '.csv';
  var link = document.createElement('a');
  link.style.display = 'none';
  link.setAttribute('target', '_blank');
  link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
  link.setAttribute('download', filename);
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}

// Marks Filter Code

// Marks filter out of 4

$(document).ready(function($) {
  $('#OutOf4-name').one("click", function() {
    $('#show-more-reports-button').click();
  });
  $('#OutOf4-name').change(function() {
      var value = $(this).val().toLowerCase();
      $("#table-body tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
});

// Marks filter out of 8

$(document).ready(function($) {
  $('#OutOf8-name').one("click", function() {
    $('#show-more-reports-button').click();
  });
  $('#OutOf8-name').change(function() {
      var value = $(this).val().toLowerCase();
      $("#table-body tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
});

// Marks filter out of 12

$(document).ready(function($) {
  $('#OutOf12-name').one("click", function() {
    $('#show-more-reports-button').click();
  });
  $('#OutOf12-name').change(function() {
      var value = $(this).val().toLowerCase();
      $("#table-body tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
});

//Show All Reports

$("#show-more-reports-button").on("click", function() {
  $.ajax({
    type: 'POST',
    url: 'extractor.php',
    data: {
      selector: 'allReports'
    },
    success: function(result){
      $("#table-body").html(result);
    }
  });
});

$("#masterFilter").on("click", function() {
  $.ajax({
    type: 'POST',
    url: 'extractor.php',
    data: {
      selector: 'masterReport',
      fromDate: $("#master-from-input").val(),
      toDate: $("#master-to-input").val(),
      tname: $("#master-tname").val(),
      grade: $("#master-grade-name").val()
    },
    success: function(result){
      $("#table-body").html(result);
    }
  });
});

$("#filterByDate").on("click", function(){
  $.ajax({
    type: 'POST',
    url: 'extractor.php',
    data: {
      selector: 'dateWise',
      fromDate: $("#from-input").val(),
      toDate: $("#to-input").val()
    },
    success: function(result){
      $("#table-body").html(result);
    }
  });
});

$("#filterByTeacherName").on("click", function(){
  $.ajax({
    type: 'POST',
    url: 'extractor.php',
    data: {
      selector: 'TNWise',
      tname: $("#tname").val()
    },
    success: function(result){
      $("#table-body").html(result);
    }
  });
});

$("#filterByGrade").on("click", function(){
  $.ajax({
    type: 'POST',
    url: 'extractor.php',
    data: {
      selector: 'gradeWise',
      grade: $("#grade-name").val()
    },
    success: function(result){
      $("#table-body").html(result);
    }
  });
});

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

      $pdf_str = "/MathReportCard/get_report_main/generator/index.php?tname="+$get_report_card[0]+"&pname="+$get_report_card[1]+"&sname="+$get_report_card[2]+"&grade="+$get_report_card[3];

      // For Live

      // $pdf_str = "https://club-beyond.gobeyondskool.com/MathReportCard/get_report_main/generator/index.php?tname="+$get_report_card[0]+"&pname="+$get_report_card[1]+"&sname="+$get_report_card[2]+"&grade="+$get_report_card[3];

      $.ajax({
        url: '/MathReportCard/get_report_main/generator/index.php',
        type: 'GET',
        success: function(html) {
          window.location.replace($pdf_str);
        }
      })
  });
});