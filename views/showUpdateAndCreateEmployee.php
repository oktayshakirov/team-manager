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
    <img class="add" src="./img/add.png" alt="Add">
    <div class="header-text">
      <h1 class="header-title">Add Employee</h1>
    </div>
  </div>
</header>
  <?php include 'views/navigation.php' ?>
  <form action="index.php" method="post">
    <div class="table">
      <div class="row green">
        <!--        <div class="cell">ID</div>-->
        <div class="cell">First Name</div>
        <div class="cell">Last Name</div>
        <div class="cell">Department</div>
        <div class="cell center">Save &#128274</div>
        <div class="cell center">Reset</div>
      </div>
      <div class="row">

        <!--  hidden fields zur stillen übergabe der jeweiligen Parameter -->
        <input type="hidden" name="area" value="employee">
        <input type="hidden" name="action"
               value="<?php echo (isset($employee)) ? 'update' : 'create' ?>">
        <!--        id Übergabe nur bei update-->
        <?php if (isset($employee)) { ?>
          <input type="hidden" name="id"
                 value="<?= $employee->getId() ?>">
        <?php } ?>

        <div class="cell">
          <input type="text" name="firstName"
                 value="<?php if (isset($employee)) echo $employee->getFirstname() ?>"
                 size="18" autocomplete="off" autofocus required>
        </div>
        <div class="cell">
          <input type="text" name="lastName"
                 value="<?php if (isset($employee)) echo $employee->getLastname() ?>"
                 size="18" autocomplete="off" required>
        </div>
        <div class="cell">
          <select name="departmentId">
            <?php foreach ($departments as $department) {
              if ($employee && ($department->getName() === $employee->getDepartmentName())) { ?>
                <option value="<?= $department->getId() ?>" selected><?= $department->getName() ?></option>
              <?php } else { ?>
                <option value="<?= $department->getId() ?>"><?= $department->getName() ?></option>
                <?php
              }
            }
            ?>
          </select>
        </div>
        <div class="cell center">
        <!-- Set $isDisabled=false to enable -->
        <input class="save center" type="submit" value="&#10004;" <?php $isDisabled = true; if ($isDisabled) echo 'disabled'; ?>>
        </div>
        <div class="x">&nbsp;&nbsp;
          <input class="reset" type="reset" value=&olarr;>
        </div>
      </div>
    </div>
  </form>
  <div class="warning">
    <span class="message"></span>
  </div>
</body>
</html>