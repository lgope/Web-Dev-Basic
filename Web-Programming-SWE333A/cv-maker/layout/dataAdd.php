<div id="cv_input_form">
    <label for="first-name">First Name : </label>
    <input type="text" id="first-name"> <br>

    <label for="last-name">Last Name : </label>
    <input type="text" id="last-name"> <br>
    <label for="email">Email : </label>
    <input type="email" id="email"> <br>

    <label for="address">Address : </label>
    <input type="text" id="address"> <br>


    <label for="short-bio">Short Bio : </label>
    <input type="text" id="short-bio"> <br>

    <label for="education">Education : </label>
    <input type="text" id="degree" placeholder="degree"> <br>
    <input type="text" id="institute" placeholder="institute"> <br>
    <input type="text" id="result" placeholder="result"> <br>
    <input type="text" id="year" placeholder="year"> <br> <br>

    <label for="skills">Skills : </label>
    <input type="text" name="skills" id="skills"> <br>   
    
    <input type="button" id="addData" value="Add Data To Server">
    <input type="button" onclick="$('#DataAdd').slideUp(700);" value="Cancel">
    
</div>
<script type="text/javascript">
$(document).ready(function () {
    $('#addData').on('click', function() {
        var fname = $('#first-name').val();
        var lname = $('#last-name').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var shortBio = $('#short-bio').val();
        var degree = $('#degree').val();
        var institute = $('#institute').val();
        var result = $('#result').val();
        var year = $('#year').val();
        var skills = $('#skills').val();

        $.ajax({
            url: 'functions/add.php',
            type: 'POST',
            data: { fname: fname, lname: lname, email: email,  address: address, shortBio: shortBio, degree: degree, institute:institute, result:result, year:year, skills:skills},
            success: function(response) {                
                $('#cv_input_form').slideUp(700);
                if (response == 'Successfull') {
                // $.get('functions/index.php', function(response) {
                // });
                    $('#DataView').html(response);
                }
            }
        });
    });
})
</script>