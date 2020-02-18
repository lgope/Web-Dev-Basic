<?php
include_once("../classes/Crud.php");
 
$crud = new Crud();

    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
 
    $query = "INSERT INTO student_info(name, student_id, email) VALUES('$name', '$student_id', '$email')";
 
if ($crud->execute($query)) {
    echo "Successfull";
} else {
    echo "Problem";
}

?>