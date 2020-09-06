<?php


class StudentBOImpl implements StudentBO
{
    private $connection;
    private $studentRepo;

    /**
     * StudentBOImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
        $this->studentRepo = new StudentRepoImpl();
    }

    public function addStudent(StudentDTO $studentDTO): bool
    {
        $this->studentRepo->setConnection($this->connection);
        return $this->studentRepo->addStudent($studentDTO);
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
        $this->studentRepo->setConnection($this->connection);
        return $this->studentRepo->searchStudent($sid);
    }

    public function getAllStudents(): array
    {
        $this->studentRepo->setConnection($this->connection);
        return $this->studentRepo->getAllStudents();
    }
}