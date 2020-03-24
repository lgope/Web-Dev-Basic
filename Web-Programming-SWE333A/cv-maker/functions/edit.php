<?php
    include_once("../classes/Crud.php");
    $crud = new Crud();
    $id = $_POST['id'];
    $sql = "SELECT * FROM persion where id = $id";
    $result = $crud->getAllData($sql);

    foreach($result as $res) {
        $fname = $res['fname'];
        $lname = $res['lname'];
        $email = $res['email'];
        $address = $res['address'];
        $shortBio = $res['shortBio'];
        $degree = $res['degree'];
        $institute = $res['institute'];
        $result = $res['result'];
        $year = $res['year'];
        $skills = $res['skills'];
    }
?>


<div id="updateForm">
<input type="number" name="uid" id="uid" value="<?php echo $id; ?>" hidden>
<label>First Name:</label> <br>
<input type="text" id="ufname" value="<?php echo $fname; ?>"> <br>

<label>Last Name:</label> <br>
<input type="text" id="ulname" value="<?php echo $lname; ?>"> <br>

<label>Email:</label> <br>
<input type="email" id="uemail" value="<?php echo $email; ?>"> <br>

<label for="address">Address : </label>
<input type="text" id="uaddress" value="<?php echo $address; ?>"> <br>


<label for="short-bio">Short Bio : </label>
<input type="text" id="ushortBio" value="<?php echo $shortBio; ?>"> <br>

<label for="education">Education : </label>
<input type="text" id="udegree" placeholder="degree" value="<?php echo $degree; ?>"> <br>
<input type="text" id="uinstitute" placeholder="institute" value="<?php echo $institute; ?>"> <br>
<input type="number" id="uresult" placeholder="result" value="<?php echo $result; ?>"> <br>
<input type="number" id="uyear" placeholder="year" value="<?php echo $year; ?>"> <br> <br>

<label for="skills">Skills : </label>
<input type="text" name="uskills" id="uskills" value="<?php echo $skills; ?>"> <br>   

<input id="updateBtn" type="button" value="Update" name="update">
</div>


<script type="text/javascript">
        $('#updateBtn').on('click', function() {
        var id = $('#uid').val();
        var fname = $('#ufname').val();
        var lname = $('#ulname').val();
        var email = $('#uemail').val();
        var address = $('#uaddress').val();
        var shortBio = $('#ushortBio').val();
        var degree = $('#udegree').val();
        var institute = $('#uinstitute').val();
        var result = $('#uresult').val();
        var year = $('#uyear').val();
        var skills = $('#uskills').val();
    
            $.ajax({
                url: 'functions/update.php',
                type: 'POST',
                data: { id: id, fname: fname, lname: lname, email: email,  address: address, shortBio: shortBio, degree: degree, institute:institute, result:result, year:year, skills:skills },
                success: function(response) {
                    // if (response == 'successfull') {
                        $('#updateForm').slideUp(700);
                        $.get('functions/index.php', function(response) {
                            $('#DataView').html(response);
                        });
                    // }
                }
            });
        });
</script>