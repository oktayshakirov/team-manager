<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>HR Management Tool</title>
</head>
<body>
<div class="wrapper">
<header class="main-header">
  <div class="header-container">
    <img class="departments" src="./img/departments.png" alt="Departments">
    <div class="header-text">
      <h1 class="header-title">All Departments</h1>
    </div>
  </div>
</header>
  <?php include 'views/navigation.php' ?>
  <div class="table">
    <div class="row blue">
      <!--        <div class="cell">ID</div>-->
      <div class="cell">ID</div>
      <div class="cell">Department</div>
      <div class="cell center">Delete &#128274</div>
      <div class="cell center">Edit</div>
    </div>
    <?php
    foreach ($departments as $dep) { ?>
      <div class="row">
        <div class="cell" data-title="Id"><?php echo $dep->getId() ?></div>
        <div class="cell" data-title="name"><?php echo $dep->getName() ?></div>
        <div class="cell center" data-title="löschen">
          <!-- Remove comment to activate the delete option -->
          <!-- <a href="index.php?id=<?php echo $dep->getId() ?>&action=delete&area=department"> -->
            <button class="delete">&#10006;</button>
          </a>
        </div>
        <div class="cell center" data-title="ändern">
          <a href="index.php?id=<?php echo $dep->getId() ?>&action=showUpdate&area=department">
            <button>&#10000;</button>
          </a>
        </div>
      </div>
      <?php } ?>
  </div>
</body>
</html>
