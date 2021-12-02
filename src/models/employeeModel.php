<?php
class EmployeeModel extends Model
{
    public function getAllEmployees()
    {
        return parent::get("SELECT * FROM employees;");
    }

    public function addEmployee($newEmployee)
    {
        return parent::get("INSERT INTO employees values (?,?,?,?,?,?,?,?,?);", $newEmployee);
    }


    function deleteEmployee($id)
    {
        try {
            $this->get("DELETE FROM employees WHERE id = ?", [$id], false);
        } catch (PDOException $e) {
            return null;
        }
    }


    function updateEmployee($updateEmployee)
    {
        // $employees = getAllEmployees(); //convierte a varible de php (array)
        // foreach ($employees as $index => $employee) {
        //     if ($employee['id'] == $updateEmployee['id']) {
        //         $employees[$index] = $updateEmployee;
        //     }
        // }
        // file_put_contents('../../resources/employees.json', json_encode($employees, JSON_PRETTY_PRINT));
        // return true;
    }



    function getNextIdentifier($employeesCollection)
    {
        // $object = array_reduce($employeesCollection, function ($a, $b) {
        //     return $a ? ($a["id"] > $b["id"] ? $a : $b) : $b;
        // });
        // return $object["id"];
    }
}
