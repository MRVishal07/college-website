<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">
    <title>Faculty</title>
</head>
<body>
    <?php
    include("header.php");
    ?>

    <main>
        <div class="conatiner-fluid" id="container-fluid">
          <div class="container">
              <div class="row">
                  <a href="Home">Home</a>
                  <p>Our Faculty</p>
              </div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="container border" id="container">
           <h2 class="heading">Faculty Details</h2>
        </div>
          <br>
          <div class="container">
            <table class="table table-striped border">
                <thead>
                  <tr>
                    <th style="background-color: aliceblue;" scope="col">S No.</th>
                    <th style="background-color: aliceblue;" scope="col">Name</th>
                    <th style="background-color: aliceblue;" scope="col">Designation / Department</th>
                    <th style="background-color: aliceblue;" scope="col">Email id</th>
                    <th style="background-color: aliceblue;" scope="col">Phone No.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
          // Connect to database
          $conn = mysqli_connect("localhost", "root", "", "college");
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // Fetch data from database
          $sql = "SELECT * FROM faculty";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['Designation_Department'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['phone'] . "</td>";
              echo "</tr>";
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