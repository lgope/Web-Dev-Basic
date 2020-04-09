<?php
session_start();
    include_once("../classes/Crud.php");
 
    $crud = new Crud();

    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $project_title = $_POST['project_title'];
    $project_des = $_POST['project_des'];
    $project_lang = $_POST['project_lang'];
    $is_approved = $_POST['is_approved'];
 
    $student_info_query = "INSERT INTO student_info(student_name, student_id, project_title, project_des, project_lang, is_approved) VALUES('$student_name', '$student_id', '$project_title', '$project_des', '$project_lang', '$is_approved')";

    $proposal_info_query = "INSERT INTO proposal(student_id, project_title, project_des, project_lang, is_approved) VALUES('$student_id', '$project_title', '$project_des', '$project_lang', '$is_approved')";
 
    if ($crud->execute($student_info_query) AND $crud->execute($proposal_info_query)) {
        echo "Successfull";
    } else {
        echo "Problem";
    }
