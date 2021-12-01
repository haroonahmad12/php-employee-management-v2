<?php
class EmployeeModel extends Model
{
    function dumpStuff()
    {
        return parent::get("SELECT * FROM employees;");
    }
}
