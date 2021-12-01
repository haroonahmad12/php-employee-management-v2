<?php
class EmployeeModel extends Model
{
    public function getAllEmployees()
    {
        return parent::get("SELECT * FROM employees;");
    }
}
