<?php
    include_once("../classes/Crud.php");
 
    $crud = new Crud();

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
 
    $query = "INSERT INTO persion(fname, lname, email, address, shortBio, degree, institute, result, year, skills) VALUES('$fname', '$lname', '$email' , '$address', '$shortBio', '$degree', '$institute', '$result' , '$year', '$skills')";
 
    if ($crud->execute($query)) {
        echo "Successfull";
    } else {
        echo "Problem";
    }

?>