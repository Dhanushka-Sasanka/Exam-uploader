<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>

        .stage {
            width: 100%;
            height: 100%;

        }

        .pos-center {
            position: absolute;
            width: 40rem;
            height: fit-content;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            padding: 7%;
            /*background-color: #161E5B;!important;*/

        }

        .card-image-full-width {
            height: 100%;
            align-content: center;
        }

        /*@keyframes spin-logo {*/
        /*    from {*/
        /*        transform: rotateY(0deg);*/
        /*    }*/
        /*    to {*/
        /*        transform: rotateY(360deg);*/
        /*    }*/
        /*}*/

        /*#ijse-logo {*/
        /*    animation: spin-logo 3s;*/
        /*    animation-duration: 5s;*/
        /*    !*animation-delay: 3s;*!*/
        /*    animation-iteration-count: infinite;*/
        /*    animation-timing-function: linear;*/
        /*}*/

        footer {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            top: 88%;
            margin: auto;
        }

        footer p {
            font-family: monospace;
        }

        #ijse-footer-logo {
            /*left: 0;*/
            max-width: 150px;
            max-height: 40px;
            min-height: 40px;
            /*-webkit-box-reflect: below 2px -webkit-gradient(linear, right top, right bottom,*/
            /*from(transparent), to(rgba(255, 255, 255, 0.4)));*/
        }

        /*#main-img {*/
        /*    max-height:100% ;*/
        /*    width: 100%;*/
        /*    opacity: 0.5;*/
        /*}*/

    </style>
</head>
<body>
<!--<h1>Institute Of Java Software Engineering in GALLE</h1>-->
<!---->
<!--<button type="button" class="btn btn-danger">CLICK HERE</button>-->
<!--<img src="../dist/bin/img/logo.png" alt="" id="ijse-logo">-->

<? require_once "main-nav-bar.php" ?>
<div class="stage">
    <div class="card pos-center shadow-lg col-auto ">
        <div class="row no-gutters">

            <div class="col-md-6 text-center col-">
                <img id="main-img" src="../dist/bin/img/images.jpeg" class="card-image-full-width" alt="...">
            </div>
            <div class="col-md-6 col- text-center">
                <h3 class="card-title">Examination <h3 style="color: #28a745;padding-left:0 ">Uploader</h3></h3>
                <div class="card-body ">

                    <p class="card-text text-secondary">Please click below to upload your answer sheets.</p>
                    <div class="text-center">
                        <br>
                        <button class="btn btn-outline-info" id="upload-form-btn">click here</button>
                    </div>

                    <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>

        </div>
    </div>
</div>
<? require_once 'footer.php' ?>

<script src="../dist/controller/rootController.js"></script>
<script src="../dist/controller/loaderController.js"></script>

</body>


</html>