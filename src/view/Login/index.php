<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employees</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

</html>

<body>
    <?php require_once("assets/header.html"); ?>
    <main class="container d-flex align-items-center justify-content-around">
        <div>
            <h3 class="mb-4">Please Log in</h3>
            <form action="./authUser" method="POST" class="form">
                <div>
                    <input name="email" type="email" id="email" placeholder="Email" required></input>
                </div>
                <div>
                    <input name="pass" type="password" id="password" placeholder="Password" required></input>
                </div>
                <div>
                    <button type="submit" class="btn-3d">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <div>
    </div>
    <?php require_once("assets/footer.html"); ?>
</body>

</html>

<?php
