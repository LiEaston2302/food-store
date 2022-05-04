<?php
class About
{
    public function __construct()
    {
        //build the database
        $this->db = new Database;
    }

    // EMPLOYEES MODEL

    public function showEmployees()
    {
        //create the query
        $this->db->query("
            SELECT *
            FROM employees
            ORDER BY first_name;
        ");
        //return the query to the controller
        return $this->db->resultSet();
    }

    public function getEmployeeNumber()
    {
        //create the query
        $this->db->query("
        SELECT COUNT(*) 
        FROM employees
        ORDER BY first_name;
        ");
        //return the query to the controller
        return $this->db->resultSet();
    }

    public function getProductNumber()
    {
        //create the query
        $this->db->query("
        SELECT COUNT(*) 
        FROM products
        ORDER BY first_name;
        ");
        //return the query to the controller
        return $this->db->resultSet();
    }
}
