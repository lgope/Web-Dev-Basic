<div id="input_form">
    <label for="name">Name : </label>
    <input type="text" id="name"> <br>

    <label for="student_id">Student Id : </label>
    <input type="text" id="student_id"> <br>

    <label for="email">Email : </label>
    <input type="email" id="email"> <br>
    <input type="button" id="addData" value="Add Data To Server">
    <input type="button" onclick="$('#DataAdd').slideUp(700);" value="Cancel">
</div>
<script type="text/javascript">
    $('#addData').on('click', function() {
        var name = $('#name').val();
        var student_id = $('#student_id').val();
        var email = $('#email').val();

        $.ajax({
            url: 'functions/add.php',
            type: 'POST',
            data: { name: name, student_id: student_id, email: email },
            success: function(response) {
                $('#name').val("");
                $('#student_id').val("");
                $('#email').val("");
                $('#input_form').slideUp(700);
                if (response == 'Successfull') {
                $.get('functions/index.php', function(response) {
                    $('#DataView').html(response);
                });
                }
            }
        });
    });
</script>