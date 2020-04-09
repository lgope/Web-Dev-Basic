<?php

session_start();
if ($_SESSION['usertype'] != 'student') {
  // code...
  echo "<script>window.history.back();</script>";
}

include_once("../classes/Crud.php");
$crud = new Crud();

$sql = "SELECT * FROM student_info where student_id = " . $_SESSION['student_id'];
$result = $crud->getAllData($sql);
?>


<div>
    <p>Welcome to Project fair..</p>

</div>

<?php
if (!empty($result)) {

    echo "<p>Your proposed project.</p> <br>";
    echo "<table border=1>
    <tr>
    <th>Name</th>
    <th>ID</th>
    <th>Project Title</th>
    <th>Project Des</th>
    <th>Project Lang</th>
    <th>Status</th>
    </tr>";
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>" . $res['student_name'] . "</td>";
        echo "<td>" . $res['student_id'] . "</td>";
        echo "<td>" . $res['project_title'] . "</td>";
        echo "<td>" . $res['project_des'] . "</td>";
        echo "<td>" . $res['project_lang'] . "</td>";
        echo "<td>" . $res['is_approved'] . "</td>";
        echo "<td><button id='$res[id]' class='dataEdit'>Edit</button> | <button id='$res[id]' class='dataDelete'>Delete</button></td></tr> </table>";
    }
} else {
    echo "<p>Submit your best project as proposal.</p> <br>
        <button id='AddData'>Add Proposal</button> <br>";
}
?>

<div id="DataView"></div>
<div id="DataAdd"></div><br> <br>
<a href="logout.php">Logout</a>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#AddData').click(function() {
            $('#AddData').hide();
            $.get('../layout/dataAdd.php', function(response) {
                $('#DataAdd').html(response);
            });
        });

        $('.dataDelete').on('click', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: './delete.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    if (response == "Successfull") {
                        location.reload();

                    }
                }
            });
        });

        $('.dataEdit').on('click', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: './edit.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    $('#DataEdit').html(response);
                }
            });
        });

    });
</script>