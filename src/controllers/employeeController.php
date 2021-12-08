<?php
class EmployeeController extends Controller
{
  function request()
  {
    $data = $this->model->getAllEmployees();
    echo json_encode($data);
  }

  function show()
  {
    $this->view->loadLayout("Dashboard");
  }

  function getEmployee($id)
  {
    $employee = $this->model->getEmp($id);
    echo json_encode($employee);
  }


  function addNewEmployee()
  {
    $newEmployee = [$_POST["id"], $_POST["name"], $_POST["email"], $_POST["age"], $_POST["street_no"], $_POST["city"], $_POST["state"], $_POST["postal_code"], $_POST["phone_number"]];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $data = $this->model->addEmployee($newEmployee);
      echo json_encode($data);
    }
  }

  function delete()
  {
    $this->model->deleteEmployee($_POST['id']);
  }

  function editing()
  {
    $this->view->loadLayout("Editing");
  }


  function updateEmployee()
  {
  }
}
