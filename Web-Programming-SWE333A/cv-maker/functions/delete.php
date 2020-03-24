<?php
include_once("../classes/Crud.php");
$crud = new Crud();
$id = $_POST['id'];
$sql = "DELETE FROM persion where id = $id";

if ($crud->execute($sql)) {
    echo "Successfull";
} else {
    echo "Delete Problem!";
}
?>