<?php
include_once("../classes/Crud.php");
$sql = "SELECT * FROM students order by id DESC";
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
        echo "<td><button id='$res[id]' class='dataEdit'>Edit</button> | <button id='$res[id]' class='dataDelete'>Delete</button></td></tr>";
    }

    echo "</table>";
} else {
    echo "Not data found in Database! Please add new data.";
}
?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.dataDelete').on('click', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: 'functions/delete.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    if (response == "Successfull") {
                        location.reload();
                        $.get('functions/index.php', function(data) {
                            $('#DataView').html(data);
                        });
                    }
                }
            });
        });

        $('.dataEdit').on('click', function() {
            var id = $(this).attr('id');
            console.log('Goging to edit page with id : ' + id);
            
            $.ajax({
                url: 'functions/edit.php',
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