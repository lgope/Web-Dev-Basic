<?php
include_once("Crud.php");
$crud = new Crud();
$sql = "SELECT * FROM student_info ORDER BY id DESC";
$resul = $crud->getAllData($sql);
?>

<html>
<head>
<title>Student Information</title>
</head>
<body>
    <table border=1>
    <tr>
    <th>Name</th>
    <th>Student ID</th>
    <th>Email</th>
    <th>Action</th>
    </tr>
    <?php
    foreach($resul as $res) {
    echo "<tr>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['student_id']."</td>";
    echo "<td>".$res['email']."</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\">Delete</a></td></tr>";
    }
    ?>
    </table>

</body>
</html>