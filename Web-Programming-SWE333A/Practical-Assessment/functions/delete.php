<?php
include_once("../classes/Crud.php");
$crud = new Crud();
$id = $_POST['id'];
$sql = "DELETE FROM student_info where id = $id";

if ($crud->execute($sql)) {
    echo "Successfull";
} else {
    echo "Delete Problem!";
}
?>