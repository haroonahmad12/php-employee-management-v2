<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link rel="stylesheet" href= "<?= BASE_URL ?>/assets/css/main.css">   
  <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/bootstrap/dist/css/bootstrap.css">   
  <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid-theme.css">   
  <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.css">

  <script src="<?= BASE_URL ?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.js"></script>
  <script src="<?= BASE_URL ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script type="module" src="<?= BASE_URL ?>/assets/js/index.js"></script>
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
  <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
    <a class="navbar-brand" href="#">Employee Manager</a>
    <div class="navbar justify-content-between w-100">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Employee</a>
        </li>
      </ul>
      <span class="btn">
        <a class="nav-link" href="#" id="logoutButton">
          Logout
        </a>
      </span>
    </div>
  </nav>

  <main class="container h-100 row align-items-center">

    <div class="table-responsive col" id="jsGrid">
    </div>
  </main>
  <?php
  include ASSETS . '/footer.html';
  ?>
</body>

</html>