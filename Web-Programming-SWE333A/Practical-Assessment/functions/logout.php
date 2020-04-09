<?php
session_start();
$_SESSION['usertype'] == "";
$_SESSION["student_id"] = "";
$_SESSION['u_name'] == "";
session_destroy();
header('location:login.php');
?>
