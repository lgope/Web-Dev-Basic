<html>

<head>

</head>

<body>
    <input type="button" id="addForm" value="Add new Data" />
    <div id="dataAdd">
        <img src="" id="preview" hieght="300" width="300" /></br>
        Name: <input type="text" id="add_name" for="name" /></br>
        Email: <input type="text" id="add_email" for="email" /></br>
        Student ID: <input type="text" id="add_studentId" for="studentId" /></br>
        Image: <input type="file" onchange="showMyImage(this,'preview')" id="add_image" for="image" /></br>
        <input type="button" id="add_sendData" for="sendData" value="Send Data to Server" />
        <input type="button" id="cancel" onclick="$('#dataAdd').hide();" value="Cancel" />

    </div>
    <div id="dataEdit"></div>
    <div id="dataShow"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataAdd').hide();
            $.get('functions/dataShow.php', function(data) {
                $('#dataShow').html(data);

            })

            $('#addForm').click(function() {
                $('#dataAdd').show();
            })

            $("#add_sendData").on('click', function() {
                var js_name = $('#add_name').val();
                var js_email = $('#add_email').val();
                var js_studentId = $('#add_studentId').val();
                var js_image = $('#preview').attr('src');
                //console.log(js_image);
                $.ajax({
                    url: "functions/dataAdd.php",
                    type: "POST",
                    data: {
                        p_name: js_name,
                        p_email: js_email,
                        p_studentId: js_studentId,
                        p_image: js_image
                    },
                    success: function(data) {
                        console.log(data);
                        if (data == 'success') {
                            $('#add_name').val('');
                            $('#add_email').val('');
                            $('#add_studentId').val('');
                            //$('#preview').attr('src');
                            $('#dataAdd').hide();
                            $.get('functions/dataShow.php', function(data) {
                                $('#dataShow').html(data);

                            })
                        }
                    }
                })


            })
        })

        function showMyImage(fileInput, id) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("" + id);
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>