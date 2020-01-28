var c_title = [];
var c_code = [];
var c_credit = [];
var c_gpa = [];

var n = 1;
var m = 0;
var sum = 0;
var total_credit = 0;

function addData() {
  /*Get table element to create new row and column by using JavaScript DOM*/

  var table = document.getElementById('addData');
  /*Make visible*/
  table.style = 'display:block';
  /*Insert new Row to table*/
  var addRow = table.insertRow(n);

  /*Insert new Column under the created Row*/
  var c_title1 = addRow.insertCell(0);
  var c_code1 = addRow.insertCell(1);
  var c_credit1 = addRow.insertCell(2);
  var c_gpa1 = addRow.insertCell(3);

  /*Get value from user input to list*/
  c_title[m] = document.getElementById('c_title').value;
  c_code[m] = document.getElementById('c_code').value;
  c_credit[m] = document.getElementById('c_credit').value;
  c_gpa[m] = document.getElementById('c_gpa').value;

  /*Insert obtained values to created column using inneHTML (DOM)*/
  c_title1.innerHTML = c_title[m];
  c_code1.innerHTML = c_code[m];
  c_credit1.innerHTML = c_credit[m];
  c_gpa1.innerHTML = c_gpa[m];
  /* Increament of number of rows and columns to add data dynamically*/
  n++;
  m++;
}

function calculate_sgpa() {
  for (var i = 0; i < c_credit.length; i++) {
    sum += Number(c_credit[i]) * Number(c_gpa[i]);
    total_credit += Number(c_credit[i]);
  }
  var sgpa = sum / total_credit;
  var table = document.getElementById('addData');
  /*Make visible*/
  //table.style="display:block";
  /*Insert new Row to table*/
  var addRow = table.insertRow(n);
  /*Insert new Column under the created Row*/
  var c_message = addRow.insertCell(0);
  /*Insert ColSpan to merge columns*/
  c_message.colSpan = '3';
  var c_sgpa = addRow.insertCell(1);

  /*Insert obtained values to created column using inneHTML (DOM)*/
  c_message.innerHTML = 'SGPA:';
  c_sgpa.innerHTML = sgpa.toFixed(2);
}
