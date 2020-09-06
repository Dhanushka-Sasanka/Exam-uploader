<?php

require_once __DIR__ . '../business/imple/StudentBOImpl.php';
require_once __DIR__ . '../core/StudentDTO.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {

    case "GET":
        break;

    case "POST" :

        $sName = $_POST['sname'];
        $sNIC = $_POST['sNIC'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case "add":
                $studentDetailObj = new StudentDTO($sName, $sNIC);
                $studentBO = new StudentBOImpl();
                echo $studentBO->addStudent($studentDetailObj);
                break;
        }
        break;
}