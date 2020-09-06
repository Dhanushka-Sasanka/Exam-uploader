<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/bin/css/bootstrap.min.css">

    <style>
        body {
            padding: 0;
            margin: 0;
        }
    </style>

</head>
<!--<body>-->
<!---->
<!--<form action="../api/service/upload-detail-service.php" method="post" enctype="multipart/form-data">-->
<!--    Upload a File:-->
<!--    <input type="file" name="myfile" id="fileToUpload" class="a">-->
<!--    <input type="submit" name="submit" value="Upload File Now">-->
<!---->
<!--</form>-->
<!---->
<!---->
<!--</body>-->
<body>
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-8">-->
<!---->
<!--            <hr>-->
<!--            <form name="form-upload" id="form-upload" method="POST" enctype="multipart/form-data">-->
<!--                <input type="file" name="txtFile" class="txtFile"/>-->
<!--                <input type="submit" name="btnSubmit" value="Submit"/>-->
<!--            </form>-->
<!--            <hr>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="container">
    <div class="row">
        <form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm"
              action="../api/service/upload-detail-service.php">
<!--              action="../../../../ijse-exam-api/api/service/upload-detail-service.php">-->
            <div class="form-group">
                <label for="exampleInputFile">Select files to upload:</label>
                <input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
                <input type="text" id="" name="studentName">
                <input type="text" id="" name="studentCode">

                <select class="custom-select mr-sm-2 shadow-lg" name="batchSelector">
                    <option selected>Your batch</option>
                    <option value="GDSE54">GDSE 54</option>
                    <option value="GDSE55">GDSE 55</option>
                    <option value="GDSE56">GDSE 56</option>
                    <option value="GDSE57">GDSE 57</option>
                    <option value="GDSE58">GDSE 58</option>
                    <option value="GDSE59">GDSE 59</option>
                    <option value="GDSE60">GDSE 60</option>
                    <option value="other">Other</option>

                </select>
                <hr>
                <p class="help-block">
                    <span class="label label-info">
                        Note:</span> Please, Select the only(.txt, .docx, .pdf, .jpg, .jpeg, .png, .gif) to upload with the size of
                    100KB only.</p>
            </div>
            <div class="progress">
                <div id="divProgressBar" class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                     aria-valuemax="100"></div>
            </div>
            <div id="status"></div>
            <button type="submit" class="btn btn-success" name="btnSubmit" id="uploadbtn">Upload</button>
        </form>
    </div>
    <div class="row" id="output">

    </div>
</div>


<script src="../dist/bin/js/jquery-3.3.1.min.js"></script>
<script src="../dist/bin/js/jquery-form.js"></script>
<script src="../dist/bin/js/bootstrap.min.js"></script>
<!--<script src="../dist/controller/uploadFormController.js"></script>-->

<script>
    $(document).ready(function () {


            let divProgressBar = $("#divProgressBar");
            let status = $("#status");

            $("#uploadForm").ajaxForm({

                dataType: "json",

                beforeSend: function () {
                    divProgressBar.css({});
                    divProgressBar.width(0);
                },

                uploadProgress: function (event, position, total, percentComplete) {
                    let pVel = percentComplete + "%";
                    divProgressBar.width(pVel);
                },

                complete: function (data) {
                    status.html(data.responseText);
                    Swal.fire({
                        icon: 'success',
                        title: 'Upload success...',
                        text: 'Happy coding!'

                    })
                }
                error:function(data){
                    Swal.fire({
                        icon: 'error',
                        title: 'Upload failed...',
                        text: data
                    })
                }
            });

    });
</script>


</body>
</html>