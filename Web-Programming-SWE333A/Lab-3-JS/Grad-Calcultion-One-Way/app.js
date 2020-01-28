var calculateGrad = function() {
  // Subject 1 all info getting from html input form
  var sub1_Code = document.getElementById('sub1_code').value;

  var sub1_Title = document.getElementById('sub1_title').value;

  var sub1_Credit = Number(document.getElementById('sub1_credit').value);

  var sub1_Gpa = Number(document.getElementById('sub1_gpa').value);

  // Subject 1 all info getting from html input form
  var sub2_Code = document.getElementById('sub2_code').value;
  var sub2_Title = document.getElementById('sub2_title').value;
  var sub2_Credit = Number(document.getElementById('sub2_credit').value);
  var sub2_Gpa = Number(document.getElementById('sub2_gpa').value);

  var sum = sub1_Credit * sub1_Gpa + sub2_Credit * sub2_Gpa;

  var totalCredit = sub1_Credit + sub2_Credit;

  var sgpa = sum / totalCredit;

  var sgpa_Fixed = sgpa.toFixed(2);

  document.getElementById('result_table').innerHTML = `<table  border="1">
      <tr>
          <th>Code</th>
          <th>Title</th>
          <th>Credit</th>
          <th>GPA</th>
      </tr>
      <tr>
          <td>${sub1_Code}</td>
          <td>${sub1_Title}</td>
          <td>${sub1_Credit}</td>
          <td>${sub1_Gpa}</td>
      </tr>
      <tr>
          <td>${sub2_Code}</td>
          <td>${sub2_Title}</td>
          <td>${sub2_Credit}</td>
          <td>${sub2_Gpa}</td>
      </tr>
      <tr>
              <td colspan="3"><center>SGPA</center></td>
              <td>${sgpa_Fixed}</td>
          </tr>
  </table>`;
};
