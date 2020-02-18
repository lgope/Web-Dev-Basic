<?php
include_once("Crud.php");
 
$crud = new Crud();
 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
 
$query = "UPDATE student_info SET name = '$name', student_id = '$student_id', email = '$email' where id = '$id'";
 
if ($crud->execute($query)) {
    header('location:index.php');
} else {
    echo "Update Problem!";
}
}
?>