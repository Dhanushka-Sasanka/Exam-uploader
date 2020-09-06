<? require_once "main-nav-bar.php" ?>
<section class="sign-in student-reg-form">
    <div class="containers">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="../dist/bin/template/images/signin-image.jpg" alt="sing up image"></figure>
                <!--                <a href="#" class="signup-image-link">Create an account</a>-->
            </div>

            <div class="signin-form">

                <form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm"
                      action="../api/service/upload-detail-service.php">

                    <!--action="../../../../ijse-exam-api/api/service/upload-detail-service.php">-->

                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" id="" class="zmdi zmdi-account material-icons-name"
                               name="studentName" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="studentCode"><i class="zmdi zmdi-code material-icons-name"></i></label>
                        <input type="text" name="studentCode" id="studentCode"
                               class="zmdi zmdi-code material-icons-name"
                               placeholder="Your Code"/>

                    </div>

                    <div class="form-group">
<!--                        <label for="exampleInputFile">Select files to upload:</label>-->
                        <input type="file" id="exampleInputFile" name="files[]" multiple="multiple" class="btn bg-info rounded">
                        <br>
                        <hr>
                        <p class="help-block">
                    <span class="label label-info">
                        Note:</span> Please, Select the only(.txt, .docx, .pdf, .jpg, .jpeg, .png, .gif) to
                            upload.</p>
                    </div>

                    <div class="form-group">

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

                    </div>


                    <br>

                    <div class="progress">
                        <div id="divProgressBar" class="progress-bar" role="progressbar"
                             aria-valuenow="25"
                             aria-valuemin="0">

                        </div>
                    </div>
                    <div id="status"></div>
                    <button type="submit" class="btn btn-success font-weight-bold w-100" name="btnSubmit"
                            id="uploadbtn">Start Upload
                    </button>

                </form>

                <div class="row" id="output">

                </div>

                <br>

            </div>


        </div>
    </div>

</section>

<script src="../dist/bin/js/jquery-3.3.1.min.js"></script>
<script src="../dist/bin/js/jquery-form.js"></script>
<script src="../dist/bin/js/bootstrap.min.js"></script>
<script src="../dist/bin/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../dist/controller/loaderController.js"></script>
<script src="../dist/controller/uploadFormController.js"></script>

<!--<script src="../dist/bin/template/vendor/jquery/jquery.min.js"></script>-->
<!--<script src="../../../../etc/php.ini"></script>-->
