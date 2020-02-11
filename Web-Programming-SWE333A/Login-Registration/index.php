<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}

include_once("Crud.php");
$crud = new Crud();
$sql = "SELECT * FROM user ORDER BY id DESC";
$result = $crud->getAllData($sql);
?>

<html>
<head>
<title></title>
</head>
<body>
    <table border=1>
    <tr>
    <th>Email</th>
    <th>Password</th>
    </tr>
    <?php
    foreach($result as $res) {
        echo "<tr> </tr><td>".$res['email']."</td>";
        echo "<td>".$res['password']."</td></tr>";

    }
    ?>


    </table>

</body>
</html>