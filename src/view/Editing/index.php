<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/bootstrap/dist/css/bootstrap.css">   
    <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid-theme.css">   
    <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.css">
    <script src="<?= BASE_URL ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.js"></script>
    <script src="<?= BASE_URL ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script type="module" src="<?= BASE_URL ?>/assets/js/employee.js"></script>

<body>
    <header>
        <?php
        require_once(ASSETS . "header.html")
        ?>
    </header>
    <main class="container p-5">
        <form id="employeeDetailForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="<?php echo $name ?>" name="name" value="<?php echo $name ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="<?php echo $lastName ?>" name="lastName" value="<?php echo $lastName ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo $email ?>" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputGender">Gender</label>
                    <select id="inputGender" class="form-control" name="gender">
                        <option selected><?php echo $gender ?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="number" class="form-control" id="inputAge" name="age" value="<?php echo $age ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" class="form-control" id="inputPhone" name="phoneNumber" value="<?php echo $phoneNumber ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $city ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Street Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="<?php echo $address ?>" name="streetAddress" value="<?php echo $address ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputState" name="state" value="<?php echo $state ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Zip Code</label>
                    <input type="text" class="form-control" id="inputZip" name="postalCode" value="<?php echo $postalCode ?>">
                </div>
            </div>



            <input type="submit" class="btn btn-primary" value="Submit" id="submitButton"></input>
            <input type="hidden" name="id" value="<?php echo $id ?>"></input>
            <button type="button" class="btn btn-secondary"><a href="../show" class="text-decoration-none btn-secondary">Return </a></button>

        </form>
    </main>
</body>

</html>