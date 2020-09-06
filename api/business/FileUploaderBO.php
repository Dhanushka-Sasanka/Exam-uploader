<?php

require_once __DIR__.'../core/StudentDTO.php';
interface FileUploaderBO
{

    public function uploadEvaluation(StudentDTO $studentDTO): bool;

}