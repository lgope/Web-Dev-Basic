<?php

include_once("Crud.php");
 
$crud = new Crud();

if (isset($_POST['findStudentInfo'])) {
    $student_id = $_POST['student_id'];
 
    $query = "SELECT * FROM subject_result where student_id=$student_id";
    
    if ($crud->execute($query)) {
        $resul = $crud->getAllData($query);
        echo "Find Successfull!";
       
    } else {
        echo "Find Problem!";
    }
}

?>

<form action="findStudent.php" method="POST">
<input type="text" name="student_id" placeholder="Student ID"> 

<input type="submit" name="findStudentInfo" value="Search">
</form>
<br>
<?php
if(!empty($resul)){


?>
    <table border=1>
    <tr>
    <th>course_name</th>
    <th>course_code</th>
    <th>course_credit</th>
    <th>Student ID</th>
    <th>gpa</th>
    </tr>

    <?php

    $total_credit = 0;
    $total_sum = 0;
    $sgpa_Fixed = 0;

    foreach($resul as $res) {
        $total_credit += number_format($res['course_credit'], 2);
        $total_sum += number_format($res['course_credit'], 2)*number_format($res['gpa'], 2);
        echo "<tr>";
        echo "<td>".$res['course_name']."</td>";
        echo "<td>".$res['course_code']."</td>";
        echo "<td>".$res['course_credit']."</td>";
        echo "<td>".$res['student_id']."</td>";
        echo "<td>".$res['gpa']."</td></tr>";

    }
    $sgpa =  $total_sum/ $total_credit;
    
    echo " <tr><td colspan='4'>SGPA</td><td>".number_format($sgpa,2)."</td></tr> </table>";
}
    ?>
  