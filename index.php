<?php
$conn = mysqli_connect("localhost", "root", "", "db_alip");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> alip </title>
</head>

<body>
  <a href="?modul=home">home</a> <br>
  <a href="?modul=entry">entry</a> <br>
  <a href="?modul=laporan">laporan</a>
  <hr>
  <?php
  if (!empty($_GET['modul'])) {
    include_once($_GET['modul'] . ".php");
  } else {
    include "home.php";
  }
  ?>
  <hr>
  <p style="text-align: center;"> bibi</p>

</body>

</html>