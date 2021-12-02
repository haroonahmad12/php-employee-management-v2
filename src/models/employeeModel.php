<?php
class EmployeeModel extends Model
{

    public function getAllEmployees()
    {
        return parent::get("SELECT * FROM employees;");
    }

public function addEmployee($newEmployee)
{

    return parent::get("INSERT INTO employees values (?,?,?,?,?,?,?,?,?);" ,$newEmployee);
    // $employees = getAllEmployees();
    // $newId = 1 + getNextIdentifier($employees);
    // $newEmployee["id"] = $newId;
    // array_push($employees, $newEmployee);
    // file_put_contents("../../resources/employees.json", json_encode($employees));
}


function deleteEmployee($id)
{


    // $allEmployees = getAllEmployees();
    // foreach ($allEmployees as $key => $value) {
    //     if ($value['id'] == $id) {
    //         $employeeToDelete = $key;
    //     }
    // }
    // unset($allEmployees[$employeeToDelete]);
    // $allEmployees = array_values($allEmployees);
    // file_put_contents("../../resources/employees.json", json_encode($allEmployees));
    // // header("Location: ../dashboard.php?deletedItem");
    // return $employeeToDelete;
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