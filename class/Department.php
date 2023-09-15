<?php

namespace Class;

require_once 'ConnectData.php';

class Department
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new ConnectData();
    }

    public function getList()
    {
        $query = "SELECT departments.*, employees.name as manager 
            FROM departments LEFT JOIN employees 
            ON departments.manager_id = employees.id";
        $data = $this->conn->select($query);

        return $data;
    }
}
