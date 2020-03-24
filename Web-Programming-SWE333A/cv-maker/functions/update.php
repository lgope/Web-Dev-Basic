<?php
    include_once("../classes/Crud.php");
    
    $crud = new Crud();

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $shortBio = $_POST['shortBio'];
    $degree = $_POST['degree'];
    $institute = $_POST['institute'];
    $result = $_POST['result'];
    $year = $_POST['year'];
    $skills = $_POST['skills'];
 
    $query = "UPDATE persion SET fname = '$fname', lname = '$lname', email = '$email', address = '$address', shortBio = '$shortBio', 
    degree = '$degree', institute = '$institute', result = '$result', year = '$year' , skills = '$skills'  where id = '$id'";
    
    if ($crud->execute($query)) {
        echo "successfull";
    } else {
        echo "Update Problem!";
    }
?>