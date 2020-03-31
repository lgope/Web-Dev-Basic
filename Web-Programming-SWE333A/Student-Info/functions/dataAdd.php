<?php
include_once("../classes/Crud.php");
$php_name = $_POST['p_name'];
$php_email = $_POST['p_email'];
$php_studentId = $_POST['p_studentId'];
$php_image = $_POST['p_image'];

$sql = "INSERT INTO student_info(name,student_id,email,image) values('$php_name','$php_studentId','$php_email','$php_image')";
$crud = new Crud();
if ($crud->execute($sql)) {
    echo 'success';
} else {
    echo 'error';
}
