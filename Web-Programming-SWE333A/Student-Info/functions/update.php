<?php
    include_once("../classes/Crud.php");
    
    $crud = new Crud();
 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $image = $_POST['image'];
 
    $query = "UPDATE students SET name = '$name', student_id = '$student_id', email = '$email' image = '$image' where id = '$id'";
    
    if ($crud->execute($query)) {
        echo "successfull";
    } else {
        echo "Update Problem!";
    }
?>