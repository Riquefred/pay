<?php

include_once("connection.php");
$con = connection();

if(isset($_POST['submit']))
{

    $nname = $_POST['name'];
    $dept = $_POST['department'];

    $sql = "INSERT INTO `pms_tb`(`name`, `department`) VALUES ('$nname','$dept')";
    $con->query($sql) or die($con->error);

    echo header("Location: home.php");
}

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

      </form>
    </div>
  </div>
</nav>

<!-- NAV -->

<!-- ADD -->

<div class="mt-3 row justify-content-center">
    <label for="inputPassword" class="col-sm-1 col-form-label">NAME</label>
        <div class="col-sm-3">
            <input placeholder=" " class="form-control" id="inputPassword">
        </div>
    <label for="inputPassword" class="col-sm-1 col-form-label">BASIC PAY</label>
        <div class="col-sm-3">
            <input placeholder=" " class="form-control" id="inputPassword">
        </div>
</div>

<div class="mt-3 row justify-content-center">
    <label for="inputPassword" class="col-sm-1 col-form-label">DEPARTMENT</label>
        <div class="col-sm-3">
            <input placeholder=" " class="form-control" id="inputPassword">
        </div>
    <label for="inputPassword" class="col-sm-1 col-form-label">SG</label>
        <div class="col-sm-3">
            <input placeholder=" " class="form-control" id="inputPassword">
        </div>
</div>

<div class="mt-3 row justify-content-center">
    <label for="inputPassword" class="col-sm-1 col-form-label">POSITION</label>
        <div class="col-sm-3">
            <input placeholder=" " class="form-control" id="inputPassword">
        </div>
    <label for="inputPassword" class="col-sm-1 col-form-label">RATA</label>
        <div class="col-sm-3">
            <input placeholder=" " class="form-control" id="inputPassword">
        </div>
</div>

<!-- ADD -->

<div class="container mt-3">
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50w; min-width:300px;">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="NAME">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="department" placeholder="DEPARTMENT">                
                            <div class="col">
                                <button type="submit" value="Submit Form" class="btn btn-light" name="submit" href="index.php">Back</button> 
                                <button type="submit" value="Submit Form" class="btn btn-light" name="submit">Save</button>
                            </div>        
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>