<?php

//require_once __DIR__ . '../business/imple/FileUploaderBOImpl.php';
//require_once __DIR__ . '../core/StudentDTO.php';
//
//$requestMethod = $_SERVER['REQUEST_METHOD'];
//
//switch ($requestMethod) {
//
//    case "GET":
//        break;
//
//    case "POST" :
//
//        $sName = $_POST['sname'];
//        $sBatch = $_POST['sBatch'];
//        $sNIC = $_POST['sNIC'];
//        $evaluationNo = $_POST['evaluationNo'];
//        $language = $_POST['language'];
//        $operation = $_POST['operation'];
//
//        switch ($operation) {
//            case "add":
//                $studentDetailObj = new StudentDTO($sName, $sBatch, $sNIC, $evaluationNo, $language);
//                $fileUploader = new FileUploaderBOImpl();
//                echo $fileUploader->uploadEvaluation($studentDetailObj);
//                break;
//        }
//        break;
//}
//step 1
//            var_dump($_FILES);    //Check all $_FILES variables
//            $files = $_FILES['fileupload'];
//            $tmp_name = $files['tmp_name'];
//            $name = $files['name'];
//            $destination = "../files/";
//            var_dump($destination.$name);
//            $res = move_uploaded_file($tmp_name, $destination.$name);
//
//
//
//                if ($res) {
//                    $msg = 'Uploaded successfully';
//                } else {
//                    $msg = 'Error';
//                }
//                echo $msg;

//with progress bar

if (isset($_POST["btnSubmit"])) {
    print_r($_POST);
    $errors = array();
    $uploadedFiles = array();
    $extension = array("txt", "docx", "doc", "jpeg", "jpg", "png", "gif", "pdf");
    $bytes = 1024;
    $KB = 1024;
    $MB = 1024;
    $totalBytes = $bytes * $KB * $MB * 100;

//    $batch = array("GDSE 54","GDSE 55","GDSE 56","GDSE 57","GDSE 58");


    $UploadFolder = "../../../../../IJSE_EXAMS";

    $counter = 0;

    $studentName = $_POST['studentName'];

    $studentCode = $_POST['studentCode'];

    $batch = $_POST['batchSelector'];

    foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
        $temp = $_FILES["files"]["tmp_name"][$key];
        $name = $_FILES["files"]["name"][$key];

        if (empty($temp)) {
            break;
        }

        $counter++;
        $UploadOk = true;

        if ($_FILES["files"]["size"][$key] > $totalBytes) {
            $UploadOk = false;
            array_push($errors, $name . " file size is larger than the 100 MB.");
        }
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if (in_array($ext, $extension) == false) {
            $UploadOk = false;
            array_push($errors, $name . " is invalid file type.");
        }

        if (file_exists($UploadFolder . "/" . $batch ."/". $studentName . "[" . $studentCode . "] part". (intval($key)+1)) == true) {
            $UploadOk = false;
            array_push($errors, $name . " file is already exist.");
        }

        if ($UploadOk == true) {

            move_uploaded_file($temp, $UploadFolder . "/" . $batch ."/". $studentName . "[" . $studentCode . "] part". (intval($key)+1));
            array_push($uploadedFiles, $name);
        }
    }


    if ($counter > 0) {
        if (count($errors) > 0) {
//            echo "<b>Errors:</b>";
//            echo "<br/><ul>";
            foreach ($errors as $key => $error) {
//                echo "<li>" . $error . "</li>";
                array_push($errorOfPages, $error);

            }
            echo $errorOfPages;
//            echo "</ul><br/>";
        }

        if (count($uploadedFiles) > 0) {
//            echo "<b>Uploaded Files:</b>";
//            echo "<br/><ul>";
            foreach ($uploadedFiles as $fileName) {
//                echo "<li>" . $fileName . "</li>";
                array_push($successOfPages,$fileName);
            }
            echo $successOfPages;
//            echo "</ul><br/>";

            echo count($uploadedFiles) . " file(s) are successfully uploaded.";
        }
    } else {
        echo "Please, Select file(s) to upload.";
    }
}