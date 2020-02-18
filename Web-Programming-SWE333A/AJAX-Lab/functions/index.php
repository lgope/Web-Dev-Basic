<?php
include_once("../classes/Crud.php");
$crud = new Crud();
$sql = "SELECT * FROM student_info ORDER BY id DESC";
$resul = $crud->getAllData($sql);
?>

<button id="AddData">Add new data</button> <br>

    <table border=1>
    <tr>
    <th>Name</th>
    <th>Student ID</th>
    <th>Email</th>
    <th>Action</th>
    </tr>
    <?php
    foreach($resul as $res) {
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['student_id']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td><button id='$res[id]' class='dataEdit'>Edit</button> | <button id='$res[id]' class='dataDelete'>Delete</button></td></tr>";

    }
    ?>


    </table>

    <script type="text/javascript">
            $(document).ready(function () {
                $('#AddData').click(function(){
                    $.get('layout/dataAdd.php', function(response) {
                        $('#DataAdd').html(response);
                    });
                });

                $('.dataDelete').on('click',function(){
                var id = $(this).attr('id');
                $.ajax({
                    url:'functions/delete.php',
                    type:'POST',
                    data:{id:id},
                    success :function(response){
                        if(response=="Successfull"){
                            $.get('functions/index.php',function(data){
                                $('#DataView').html(data);
                            });
                        }
                    }
                });
            });
        })
    </script>