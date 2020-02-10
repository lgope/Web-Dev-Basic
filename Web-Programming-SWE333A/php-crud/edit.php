<?php
include_once("Crud.php");
$crud = new Crud();
$id = $_GET['id'];
$sql = "SELECT * FROM student_info where id = $id";
$result = $crud->getAllData($sql);

foreach($result as $res) {
    $name = $res['name'];
    $student_id = $res['student_id'];
    $email = $res['email'];
}
?>

<html>
<head>
<title>Student Information Edit</title>
</head>
<body>

<form action="update.php" method="POST">

<input name="id" value="<?php echo $id;?>" hidden>
<label>Name:</label> <br>
<input type="text" name="name" value="<?php echo $name; ?>"> <br>

<label>Student ID:</label> <br>
<input type="text" name="student_id" value="<?php echo $student_id; ?>"> <br>

<label>Email:</label> <br>
<input type="email" name="email" value="<?php echo $email; ?>"> <br>

<input type="submit" value="Update" name="update">
</form>

</body>
</html>