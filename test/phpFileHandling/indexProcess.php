<?php
$name = $_POST['name'];

//    
?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello <?= $name ?> Page</title>
</head>
<style>
  .wrapper {
    max-width: 540px;
    margin: auto;
    background: green;
    padding: 15px;
    text-align: center;
    color: #fff;
  }
  .wrapper a {
    color: #fff;
  }
</style>

<body>
  <div class="wrapper">
    <h1>Halo namamu <?= $name ?></h1>
    <p>mau masukkan nama lagi? <a href="index.php">klik disini.</a> </p>
  </div>
</body>

</html>