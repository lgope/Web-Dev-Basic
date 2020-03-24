<?php
include_once("../classes/Crud.php");
$crud = new Crud();
$sql = "SELECT * FROM persion ORDER BY id DESC";
$resul = $crud->getAllData($sql);
?>

<button id="AddData">Add new data</button> <br>

    <table border=1>
    <tr>
    <th>fName</th>
    <th>lName</th>
    <th>Email</th>
    <th>address</th>
    <th>shortBio</th>
    <th>degree</th>
    <th>institute</th>
    <th>result</th>
    <th>year</th>
    <th>skills</th>
    </tr>
    <?php
        foreach($resul as $res) {
            echo "<tr>";
            echo "<td>".$res['fname']."</td>";
            echo "<td>".$res['lname']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['shortBio']."</td>";
            echo "<td>".$res['degree']."</td>";
            echo "<td>".$res['institute']."</td>";
            echo "<td>".$res['result']."</td>";
            echo "<td>".$res['year']."</td>";
            echo "<td>".$res['skills']."</td>";
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

            $('.dataEdit').on('click', function(){
                var id = $(this).attr('id');
                $.ajax({
                    url:'functions/edit.php',
                    type:'POST',
                    data:{id:id},
                    success :function(response){
                        $('#DataEdit').html(response);
                    }
                });
            });

        });
    </script>