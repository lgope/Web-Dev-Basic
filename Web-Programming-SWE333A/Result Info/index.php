<?php
include_once("Crud.php");
$crud = new Crud();
$sql = "SELECT * FROM subject_result ORDER BY id DESC";
$resul = $crud->getAllData($sql);
?>

<html>
<head>
<title>Student Information</title>
</head>
<body>
    <table border=1>
    <tr>
    <th>course_name</th>
    <th>course_code</th>
    <th>course_credit</th>
    <th>Student ID</th>
    <th>gpa</th>
    <th>Action</th>
    </tr>
    <?php
    foreach($resul as $res) {
        echo "<tr>";
        echo "<td>".$res['course_name']."</td>";
        echo "<td>".$res['course_code']."</td>";
        echo "<td>".$res['course_credit']."</td>";
        echo "<td>".$res['student_id']."</td>";
        echo "<td>".$res['gpa']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\">Delete</a></td></tr>";

    }
    ?>
    </table>

    <form action="add.php" method="POST" hidden>
<input type="text" name="course_name"> <br>
<input type="text" name="course_code"> <br>
<input type="text" name="course_credit"> <br>
<input type="text" name="student_id"> <br>
<input type="text" name="gpa"> <br>
<input type="submit" name="addData" value="Add Data To Server">
</form>

</body>
</html>