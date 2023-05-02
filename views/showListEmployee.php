<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Team Management Tool</title>
</head>
<body>
<body>
<div class="wrapper">
<header class="main-header">
  <div class="header-container">
    <img class="all-employees" src="./img/all-employees.png" alt="All Employees">
    <div class="header-text">
      <h1 class="header-title">All Employees</h1>
      <p class="header-description">To maintain a clean and organized page, certain functions are restricted to users with administrative privileges. &#128273</p>
    </div>
  </div>
</header>
<div class="content">
</div>
  <?php include 'views/navigation.php' ?>
  <div class="table">
    <div class="row header">
      <div class="cell">First Name</div>
      <div class="cell">Last Name</div>
      <div class="cell">Department</div>
      <div class="cell center">Delete &#128274</div>
      <div class="cell center">Edit</div>
    </div>
    <?php
    foreach ($employees as $emp) {
      ?>
      <div class="row">
        <div class="cell" data-title="vorname"><?php echo $emp->getFirstname() ?></div>
        <div class="cell" data-title="nachname"><?php echo $emp->getLastname() ?></div>
        <div class="cell" data-title="abteilungId"><?php echo $emp->getDepartmentName() ?></div>
        <div class="cell center" data-title="löschen">
          <!-- Remove comment to activate the delete option -->
          <!-- <a href="index.php?id=<?php echo $emp->getId() ?>&action=delete&area=employee"> -->
            <button class="delete">&#10006;</button>
          </a>
        </div>
        <div class="cell center" data-title="ändern">
          <a href="index.php?id=<?php echo $emp->getId() ?>&action=showUpdate&area=employee">
            <button>&#10000;</button>
          </a>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</table> 
</body>
</html>
