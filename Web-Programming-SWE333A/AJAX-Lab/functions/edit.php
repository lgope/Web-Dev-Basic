<?php
    include_once("../classes/Crud.php");
    $crud = new Crud();
    $id = $_POST['id'];
    $sql = "SELECT * FROM student_info where id = $id";
    $result = $crud->getAllData($sql);

    foreach($result as $res) {
        $name = $res['name'];
        $student_id = $res['student_id'];
        $email = $res['email'];
    }
?>


<div id="updateForm">
<input name="id" id="uid" value="<?php echo $id;?>" hidden>
<label>Name:</label> <br>
<input type="text" id="uname" value="<?php echo $name; ?>"> <br>

<label>Student ID:</label> <br>
<input type="text" id="ustudent_id" value="<?php echo $student_id; ?>"> <br>

<label>Email:</label> <br>
<input type="email" id="uemail" value="<?php echo $email; ?>"> <br>

<input id="updateBtn" type="button" value="Update" name="update">
</div>


<script type="text/javascript">
        $('#updateBtn').on('click', function() {
            var id = $('#uid').val();
            var name = $('#uname').val();
            var student_id = $('#ustudent_id').val();
            var email = $('#uemail').val();
    
            $.ajax({
                url: 'functions/update.php',
                type: 'POST',
                data: { id: id, name: name, student_id: student_id, email: email },
                success: function(response) {
                    if (response == 'successfull') {
                        $('#updateForm').slideUp(700);
                        $.get('functions/index.php', function(response) {
                            $('#DataView').html(response);
                        });
                    }
                }
            });
        });
</script>