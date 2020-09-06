<?php

require_once __DIR__ . "/../StudentRepo.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/StudentDTO.php";


class StudentRepoImpl implements StudentRepo
{
    private $connection;

    public function setConnection(mysqli $mysqliConnection): void
    {
        $this->connection = $mysqliConnection;
    }

    public function addStudent(StudentDTO $studentDTO): bool
    {
       $query = "INSERT INTO `ijse-exam`.student VALUES(0,'{$studentDTO->getSName()}','{$studentDTO->getSNIC()}')";
       return $this->connection->query($query);

    }

    public function deleteStudent(string $sid): bool
    {
        // TODO: Implement deleteStudent() method.
    }

    public function updateStudent(StudentDTO $studentDTO): bool
    {
        // TODO: Implement updateStudent() method.
    }

    public function searchStudent(string $sid): iterable
    {
        $result = $this->connection->query("Select * from `ijse-exam`.student where sid = '{$sid}'");
        return fetch_assoc($result);
    }

    public function getAllStudents(): array
    {
        $result = $this->connection->query("Select * from `ijse-exam`.student");
        return $result->fetch_all();
    }
}