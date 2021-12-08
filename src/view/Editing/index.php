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

        </form>
    </main>
</body>

</html>