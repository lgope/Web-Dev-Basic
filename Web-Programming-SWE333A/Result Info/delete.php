<?php
include_once("Crud.php");
$crud = new Crud();
$id = $_GET['id'];
$sql = "DELETE FROM student_info where id = $id";

if ($crud->execute($sql)) {
    echo "Delete Successfull!";
} else {
    echo "Delete Problem!";
}
?>