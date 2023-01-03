<?php

include_once("connection.php");

$con = connection();


$sql = "SELECT * FROM `pms_tb` ORDER BY id ASC";
$name = $con->query($sql) or die ($con->error);
$row = $name->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">                   
<title>CHRMO</title>
</head>
<body>

<!-- NAV -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.php">HOME</a>
    <a class="navbar-brand" href="add.php">ADD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex" role="search" method="get" action="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" id="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- NAV -->

<!-- DETAILS -->
<div class="container">
    <div class="row">
        <div class="col">
            <a href="home.php" class="btn btn-dark mt-3 mb-3">HOME</a>
            <a href="edit.php" class="btn btn-dark mt-3 mb-3">EDIT</a>
        </div>  
    </div>

    <label for="inputPassword" class="col col-form-label"><?php echo $row['name']; ?></label>
    <ul class="list-group col-sm-3">
        <li class="list-group-item">Basic Pay: </li>
        <li class="list-group-item">SG: </li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
</ul>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>