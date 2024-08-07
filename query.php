<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">
    <style>
      .update{
        background-color : Green;
        color : white;
        border : 0;
        outline: none;
        padding: 5px;
        border-radius : 0.3rem;
        margin-top : 1px;
     }
    

     .delete{
      background-color : Red;
        color : white;
        font-weight : 400;
        border : 0;
        outline: none;
        padding: 5px;
        border-radius : 0.3rem;
        margin-top : 1px;
        width: 55px;
     }
    
    </style>

</head>
<body>
    <?php
    include("header.php");
    include("side_bar.php");
    ?>

    <div class="container border" id="container">
           <h2 class="heading">Manage Query</h2>
        </div>

<main>
    <div class="container mt-2">
    <table class="table table-striped border p-5" id='table'>
      <thead>
        <tr>
          <th style="background-color: aliceblue;" scope="col">S_NO</th>
          <th style="background-color: aliceblue;" scope="col">Action</th>
          <th style="background-color: aliceblue;" scope="col">Name</th>
          <th style="background-color: aliceblue;" scope="col">Email</th>
          <th style="background-color: aliceblue;" scope="col">Query</th>
        </tr>
      </thead>
      <tbody>
      <?php
        error_reporting(0);
          // Connect to database
          $conn = mysqli_connect("localhost", "root", "", "college");
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // Fetch data from database
          $sql = "SELECT * FROM query";
          $result = mysqli_query($conn, $sql);
          $total = mysqli_num_rows($result);

          if ($total > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td class='td'>
              <a href = 'admin_delete.php?id=$row[id] '><input type='submit' value='Delete' class='delete'></a></td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['query'] . "</td>";
            }
          } else {
            echo "0 results";
          }

          // Close connection
          mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>
</main>


        <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>