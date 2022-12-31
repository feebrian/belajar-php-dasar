<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication Table</title>
</head>
<style>
  table,
  tr,
  td {
    border: 1px solid #000;
    border-collapse: collapse;
  }

  td {
    padding: 15px;
  }
</style>

<body>
  <table>
  <?php
    for ($row=1; $row <= 10; $row++) : ?>
      <tr>
        <?php for ($i=1; $i <= 10; $i++) : ?>
          <td><?= $i*$row ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>