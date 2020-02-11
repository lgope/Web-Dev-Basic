<?php
session_start();
include_once("Crud.php");
$crud = new Crud();

if (isset($_POST['log'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $query = "SELECT * FROM user where email = '$email' and password = '$password'";

    $result = $crud->getAllData($query);
    
    if (!empty($result)) {
        foreach($result as $res) {
            $_SESSION['email'] = $res['email'];        
        }

        header("location:index.php");
    } else {
        echo "login Problem!";
    }
}

?>


<form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Your email"> <br>
    <input type="password" name="password" placeholder="Your password"> <br>
    <input type="submit" name="log" value="Sign In"> <br>
</form>