<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM tugas3.price ORDER BY idx ASC");
?>
<html>
  <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>Publisher</h1>
    <h2><a href="#">Home</a> | <a href="index.php">Database</a> | <a href="price.php">Price per Copy</a></h2>

    <table class="container">
      <thead>
        <tr>
          <th><h1>Year</h1></th>
          <th><h1>Price per Copy</h1></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          while ($res = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo '<td>'.$res['year']."</td>";
              echo '<td>'.$res['price']."</td>";
          }
          ?>
        </tr>
      </tbody>
    </table>
  </body>
</html>
