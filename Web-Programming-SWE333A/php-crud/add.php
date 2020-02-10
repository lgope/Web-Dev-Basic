<?php
include_once("Crud.php");
 
$crud = new Crud();
 
if (isset($_POST['addData'])) {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
 
    $query = "INSERT INTO student_info(name, student_id, email) VALUES('$name', '$student_id', '$email')";
 
    if ($crud->execute($query)) {
        echo "Insert Successfull!";
    } else {
        echo "Insert Problem!";
    }
}
?>

<form action="add.php" method="POST">
<input type="text" name="name">
<input type="text" name="student_id">
<input type="email" name="email">
<input type="submit" name="addData" value="Add Data To Server">
</form>