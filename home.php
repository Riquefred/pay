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



<nav class="navbar bavbar-light justify-content-center fs-3 mb-5"></nav>
<div class="container">
<form action="" method="get">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Search" name="search" id="search">
    </div>
    <div class="col">
        <button class="btn btn-dark" type="submit">SEARCH</button>
    </div>
  </div>
</form>
    <a href="add.php" class="btn btn-dark mt-3 mb-3">ADD</a>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php do{ ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><a href="details.php?ID=<?php echo $row['id']?>">view</td>
                </tr>
            <?php }while ($row = $name->fetch_assoc())?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>