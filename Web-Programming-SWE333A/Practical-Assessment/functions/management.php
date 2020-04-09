<?php
include_once("../classes/Crud.php");
$crud = new Crud();
$sql = "SELECT * FROM proposal ORDER BY id DESC";
$result = $crud->getAllData($sql);
?>


<div>
    <p>Welcome to Management Page..</p>

</div>
<?php
if (!empty($result)) {

    echo "<p>List of proposed projects.</p> <br>";
    echo "<table border=1>
    <tr>
    <th>Student ID</th>
    <th>Project Title</th>
    <th>Project Des</th>
    <th>Project Lang</th>
    <th>Status</th>
    </tr>";
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>" . $res['student_id'] . "</td>";
        echo "<td>" . $res['project_title'] . "</td>";
        echo "<td>" . $res['project_des'] . "</td>";
        echo "<td>" . $res['project_lang'] . "</td>";
        echo "<td>" . $res['is_approved'] . "</td>";

        echo "<td><button id='$res[student_id]' class='acceptProposal'>Accept</button> | <button id='$res[student_id]' class='rejectProposal'>Reject</button></td>";
    }
    echo "</table>";
} else {
    echo "<p>No project proposal submited yet!</p> <br>";
}
?>

<div id="DataView"></div>
<div id="DataAdd"></div><br> <br>
<a href="/project-fair">Exit</a>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.acceptProposal').click(function() {
            var student_id = $(this).attr('id');
            var Proposalstatus = 'Accepted';
            $.ajax({
                url: './update.php',
                type: 'POST',
                data: {
                    student_id: student_id,
                    is_approved: Proposalstatus
                },
                success: function(response) {
                    if (response == 'successfull') {
                        location.reload();
                        $('#DataView').html(response);
                    }
                }
            });
        });


        $('.rejectProposal').click(function() {
            var student_id = $(this).attr('id');
            var Proposalstatus = 'Rejected';
            $.ajax({
                url: './update.php',
                type: 'POST',
                data: {
                    student_id: student_id,
                    is_approved: Proposalstatus
                },
                success: function(response) {
                    if (response == 'successfull') {
                        location.reload();
                        $('#DataView').html(response);
                    }
                }
            });
        });

    });
</script>