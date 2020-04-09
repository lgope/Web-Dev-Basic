<div id="input_form">
    <label for="student_name">Name : </label>
    <input type="text" id="student_name"> <br>

    <label for="student_id">Student Id : </label>
    <input type="text" id="student_id"> <br>

    <label for="project_title">project Title : </label>
    <input type="text" id="project_title"> <br>

    <label for="project_des">project Describtion : </label>
    <input type="text" id="project_des"> <br>

    <label for="project_title">project Lang : </label>
    <input type="text" id="project_lang"> <br>


    <input type="button" id="addData" value="Send To Management">
    <input type="button" onclick="$('#DataAdd').slideUp(700); $('#AddData').show();" value="Cancel">
</div>
<script type="text/javascript">
    $('#addData').on('click', function() {
        var student_name = $('#student_name').val();
        var student_id = $('#student_id').val();
        var project_title = $('#project_title').val();
        var project_des = $('#project_des').val();
        var project_lang = $('#project_lang').val();
        var is_approved = 'pending';

        $.ajax({
            url: './add.php',
            type: 'POST',
            data: {
                student_name: student_name,
                student_id: student_id,
                project_title: project_title,
                project_des: project_des,
                project_lang: project_lang,
                is_approved: is_approved
            },
            success: function(response) {
                location.reload();
                $('#student_name').val("");
                $('#student_id').val("");
                $('#Projet_title').val("");
                $('#project_des').val("");
                $('#Projet_lang').val("");
                $('#input_form').slideUp(700);
                if (response == 'Successfull') {
                    $.get('./student.php', function(response) {
                        $('#DataView').html(response);
                    });
                }
            }
        });
    });
</script>