<?php
session_start();
include_once '../classes/Crud.php';
$crud = new Crud();

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $ins_id = $_POST['var_id'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $type = 'student';

    $insert_query = "INSERT INTO user (name, ins_Id, email, password, type) VALUES('$name', '$ins_id', '$email', '$pass', '$type')";

    if ($crud->execute($insert_query)) {
        echo "<p>register done!</p>";

        $sql = "SELECT name,ins_Id,type FROM user WHERE email='$email' AND password='$pass'";

        $result = $crud->getAllData($sql);

        if ($result) {
            // code...
            foreach ($result as $res) {
                // code...
                $_SESSION["usertype"] = $res["type"];
                $_SESSION["student_id"] = $res["ins_Id"];
                $_SESSION["u_name"] = $res["name"];

                if ($_SESSION["usertype"] == 'student') {
                    header("location:student.php");
                } else if ($_SESSION["usertype"] == 'management') {
                    header("location:management.php");
                }
            }
        }
    } else {
        echo "<p>something wrong!</p>";
    }
}

?>

<h2>Register Page</h2> <br>

<form action="register.php" method="POST">
    Name : <input type="text" name="name"> <br>
    Varsity Id : <input type="text" name="var_id"> <br>
    Email: <input type="email" name="email" /></br>
    Password: <input type="password" name="password" /></br>
    <input type="submit" name="register" value="Register" />
</form>
<div class="register_res"></div>