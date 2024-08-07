<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM admins WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css" >
    <link rel="stylesheet" href="vision-style.css" >
    <title>Admin login</title>
</head>
<body>
   <?php
   include("header.php");
   ?>


<main>

       <div class="container border" id="container">
           <h2 class="heading">Admin Login</h2>
        </div>
       <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6">
        <form action="#" method="POST" class="row g-3 border shadow-sm p-5 " >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-user"></i> Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" value="Login">Submit</button>
</form>
        </div>
       </div>
</main>

   <!-- Footer -->

   <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>