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

    public function getEmp($id)
    {
        $employee = NULL;
        $data =  $this->getAllEmployees();
        foreach ($data as $e) {
            if ((int)$e["id"] === (int)$id) {
                $employee =  $e;
            }
        }
        return $employee;
    }


    function deleteEmployee($id)
    {
        try {
            $this->get("DELETE FROM employees WHERE id = ?", [$id]);
        } catch (PDOException $e) {
            return null;
        }
    }


    function update($update)
    {
        $id = $update["id"];
        $name = $update["name"];
        $email = $update["email"];
        $age = $update["age"];
        $street = $update["streetAddress"];
        $city = $update["city"];
        $state = $update["state"];
        $postalCode = $update["postalCode"];
        $phoneNumber = $update["phoneNumber"];
        $query = "UPDATE employees SET id = '$id', name = '$name', email = '$email', age = '$age', street_no = '$street', city = '$city', state = '$state', postal_code = '$postalCode', phone_number = '$phoneNumber' WHERE id = $id";

        return parent::get($query);
    }
}
