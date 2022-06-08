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

$("#show-more-reports-button").on("click", function() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    $("#table-body").html(this.responseText);
  }
  xhttp.open("GET", "getAllReports.php");
  xhttp.send();
});

$("#filterByDate").on("click", function(){
  $.ajax({
    type: 'POST',
    url: 'getDataByDate.php',
    data: {
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
    url: 'getDataByTeacherName.php',
    data: {
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
    url: 'getDataByGrade.php',
    data: {
      grade: $("#grade-name").val()
    },
    success: function(result){
      $("#table-body").html(result);
    }
  });
});