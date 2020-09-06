<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IJSE Exam Paper Uploader</title>
    <link rel="icon" href="../dist/bin/img/ijsefavicon.ico">
    <link rel="stylesheet" href="../dist/bin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/bin/template/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../dist/bin/template/css/style.css">
    <script src="../dist/bin/js/jquery-3.3.1.min.js"></script>
    <script src="../dist/bin/js/bootstrap.min.js"></script>
    <script src="../dist/controller/mainController.js"></script>

    <style>
        #loader-text {
            animation-name: loader;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        #logo {
            /*set-center*/
            position: absolute;
            margin: auto;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 200px;
            height: 100px;
            /*background-color: green;*/
        }

        @keyframes loader {
            0% {
                opacity: 1.0;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1.0;
            }


        }

        body {
            margin: 0;
            padding: 0;
        }

        .large-header {
            position: relative;
            width: 100%;
            overflow: hidden;
            background-size: cover;
            background: #111 center center;
            z-index: 1;
        }

        .demo .large-header {
            background-image: url("../dist/bin/img/demo-bg.jpg");
        }

        .main-title {
            position: absolute;
            margin: 0;
            padding: 0;
            color: #F9F1E9;
            text-align: center;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        .demo .main-title {
            text-transform: uppercase;
            font-size: 4.2em;
            letter-spacing: 0.1em;
        }

        .main-title .thin {
            font-weight: 200;
        }

        @media only screen and (max-width: 768px) {
            .demo .main-title {
                font-size: 3em;
            }
        }


        /*.main-title {*/
        /*    position: absolute;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*    color: #F9F1E9;*/
        /*    text-align: center;*/
        /*    top: 50%;*/
        /*    left: 50%;*/
        /*    -webkit-transform: translate3d(-50%, -50%, 0);*/
        /*    transform: translate3d(-50%, -50%, 0);*/
        /*}*/

        /*.demo .main-title {*/
        /*    text-transform: uppercase;*/
        /*    font-size: 4.2em;*/
        /*    letter-spacing: 0.1em;*/
        /*}*/

        /*.main-title .thin {*/
        /*    font-weight: 200;*/
        /*}*/

        @media only screen and (max-width: 768px) {
            .demo .main-title {
                font-size: 3em;
            }
        }

    </style>
</head>
<body>
<div class=" demo">

    <div class="content">

        <div id="large-header" class="large-header">
            <canvas id="demo-canvas">

            </canvas>

<!--            <h1 class="main-title"><span class="thin">Explore</span> Space</h1>-->
            <div id="main-content">

                <? require_once "loader.php" ?>
            </div>

        </div>
    </div>

</div>


<script src="../dist/bin/js/main-form-js/EasePack.min.js"></script>
<script src="../dist/bin/js/main-form-js/TweenLite.min.js"></script>
<script src="../dist/bin/js/main-form-js/demo.js"></script>
</body>
</html>


