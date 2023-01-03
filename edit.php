<?php

include_once("connection.php");
$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * FROM `pms_tb` WHERE id = '$id'";
$name = $con->query($sql) or die ($con->error);
$row = $name->fetch_assoc();

if(isset($_POST['submit']))
{

    $nname = $_POST['name'];
    $dept = $_POST['department'];

    $sql = "UPDATE `pms_tb` SET `name`='$nname',`department`='$dept' WHERE id = '$id' ";
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
<nav class="navbar bavbar-light justify-content-center fs-3 mb-5">CHRMO</nav>
<div class="container">    
    <div class="container d-flex justify-content-center">
            <form action="" method="post">
                    <div class="row">
                        <div class="mb-3 row justify-content-center">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NAME</label>
                                <div class="col-sm-3">
                                    <input value="<?php echo $row['name'];?>" class="form-control" type="text" name="name">
                                </div>
                        </div>
                        <div class="mb-3 row justify-content-center">
                            <label for="inputPassword" class="col-sm-2 col-form-label">DEPARTMENT</label>
                                <div class="col-sm-3">
                                    <input value="<?php echo $row['department'];?>" class="form-control" type="text" name="department">
                                </div>
                        </div>
                                        <div class="col">
                                            <button type="submit" value="Submit Form" class="btn btn-light" name="submit" href="index.php">Back</button> 
                                            <button type="submit" value="Update" class="btn btn-light" name="submit">Update</button>
                                        </div>
                    </div>    
            </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>