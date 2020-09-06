<?php

require_once __DIR__ . "/../core/StudentDTO.php";

interface StudentRepo
{

    public function setConnection(mysqli $mysqliConnection): void;

    public function addStudent(StudentDTO $studentDTO): bool;

    public function deleteStudent(string $sid): bool;

    public function updateStudent(StudentDTO $studentDTO): bool;

    public function searchStudent(string $sid): iterable;

    public function getAllStudents(): array;

}