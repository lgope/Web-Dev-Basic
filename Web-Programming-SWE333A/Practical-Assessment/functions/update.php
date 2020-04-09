<?php
    include_once("../classes/Crud.php");
    
    $crud = new Crud();
 
    $student_id = $_POST['student_id'];
    $is_approved = $_POST['is_approved'];
 
    $student_info_query = "UPDATE student_info SET is_approved = '$is_approved' where student_id = '$student_id'";

    $proposal_query = "UPDATE proposal SET is_approved = '$is_approved' where student_id = '$student_id'";
    
    if ($crud->execute($student_info_query) AND $crud->execute($proposal_query)) {
        echo "successfull";
    } else {
        echo "Update Problem!";
    }
?>