<?php
// koneksi
$hostname = "localhost";
$username = "root";
$password = "adamfebrian";
$database = "dbTesting";

$conn = mysqli_connect($hostname, $username, $password, $database);

// if (!$conn) {
//   die("Connection Failed : " . mysqli_connect_error());
// } else {
//   echo "Connection Success";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testing Database</title>
</head>
<style>
  table,
  th,
  td {
    border: 1px solid #000;
    border-collapse: collapse;
  }

  th {
    text-align: center;
    padding: 5px 10px;
  }

  td {
    padding: 2px ;
  }
</style>

<body>

  <table>
    <tr>
      <th>Id Siswa</th>
      <th>Nama Siswa</th>
      <th>Umur Siswa</th>
    </tr>
    <?php

    $query = mysqli_query($conn, "SELECT * FROM _siswa order by IdSiswa desc");

    // show data
    while ($row = mysqli_fetch_array($query)) : ?>

      <tr>
        <td><?= $row['Idsiswa'] ?></td>
        <td><?= $row['NamaSiswa'] ?></td>
        <td><?= $row['UmurSiswa'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>




</body>

</html>