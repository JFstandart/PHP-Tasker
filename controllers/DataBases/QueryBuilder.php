<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function GetAllFor($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function Search($table, $column, $search)
    {
        $statement = $this->pdo->prepare("select * from {$table} where {$column} like '{$search}';");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function InsertUser($table, $username, $userpassword, $name)
    {
        $taskCode = $username.strval(rand(1,100));
        $statement = $this->pdo->prepare("insert into $table (Id, UserName, UserPassword, UserTaskCode, Name) VALUES ('','$username', '$userpassword', '$taskCode', '$name');");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function InsertTask($table, $taskName, $description, $UserTaskCode)
    {
        $statement = $this->pdo->prepare("iNSERT INTO $table (`Id`, `TaskName`, `Description`, `Complete`, `UserTaskCode`) VALUES ('$taskName', '$description', b'0', '$UserTaskCode');");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
