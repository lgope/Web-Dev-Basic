<?php
include_once("Crud.php");

$crud = new Crud();
 
if (isset($_POST['reg'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $query = "INSERT INTO user(email, password) VALUES('$email', '$password')";
    
    if ($crud->execute($query)) {
        header('location:login.php');
    } else {
        echo "Registration Problem!";
    }
}

?>


<form action="registration.php" method="POST">
    <input type="email" name="email" placeholder="Your email"> <br>
    <input type="password" name="password" placeholder="Your password"> <br>
    <input type="submit" name="reg" value="Sign Up"> <br>
</form>