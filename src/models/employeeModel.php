<?php
class EmployeeModel extends Model
{
    public function dumpStuff()
    {
        return parent::get("SELECT * FROM employees;");
    }
}

$emp = new EmployeeModel();


var_dump($emp);
