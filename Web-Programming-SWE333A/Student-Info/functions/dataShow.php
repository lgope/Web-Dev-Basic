<?php
include_once("../classes/Crud.php");
$sql = "SELECT * FROM student_info order by id DESC";
$crud = new Crud();

$result = $crud->getAllData($sql);

if (!empty($result)) {

    echo "<table border=1>";

    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>" . $res['name'] . "</td>";
        echo "<td>" . $res['student_id'] . "</td>";
        echo "<td>" . $res['email'] . "</td>";
        echo "<td><img src=" . $res['image'] . " height='300' width='300'/></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Not data found in Database! Please add new data.";
}
