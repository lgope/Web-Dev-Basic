<?php
include_once("Crud.php");
 
$crud = new Crud();
 
if (isset($_POST['addData'])) {
    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];
    $course_credit = $_POST['course_credit'];
    $student_id = $_POST['student_id'];
    $gpa = $_POST['gpa'];
 
    $query = "INSERT INTO subject_result(course_name, course_code, course_credit, student_id, gpa) VALUES('$course_name', '$course_code','$course_credit', '$student_id', '$gpa')";
    
    if ($crud->execute($query)) {
        echo "Insert Successfull!";
    } else {
        echo "Insert Problem!";
    }
}
?>
 
<form action="add.php" method="POST">
<label for="">course name : </label>
<input type="text" name="course_name"> <br>

<label for="">course code : </label>
<input type="text" name="course_code"> <br>

<label for="">course credit : </label>
<input type="text" name="course_credit"> <br>

<label for="">student ID : </label>
<input type="text" name="student_id"> <br>

<label for="">gpa : </label>
<input type="text" name="gpa"> <br>
<input type="submit" name="addData" value="Add Data To Server">
</form>