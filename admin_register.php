<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}    
include("connection.php");
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
    <title>Document</title>
</head>
<body>
   <?php
   include("header.php");
   include("side_bar.php");
   ?>
<main>

       <div class="container border" id="container">
           <h2 class="heading">Admin Register</h2>
        </div>
        <div class="container mt-5 d-flex justify-content-center ">
        <div class="col-md-6">
        <form action="#" method="POST" class="row g-3 border shadow-sm p-5">
                <div class="mb-3 ">
                  <label for="fname" class="form-label">Name</label>
                  <input type="text" class="form-control" id="fname" name="name">
                </div>
                <div class="mb-3 ">
                  <label for="lname" class="form-label">Username</label>
                  <input type="text" class="form-control" id="lname" name="username">
                </div>
                <div class="mb-3 ">
                  <label for="dob" class="form-label">Password</label>
                  <input type="text" name="password" class="form-control" id="dob" >
                </div>
                
                <div class="mb-3">

                </div>
                <div class="col-12">
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Register</button>
                </div> 
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

<?php

if($_POST['submit'])
{
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  

 $query = "INSERT INTO admins(name,username,password) VALUES('$name','$username','$password')";
 $data = mysqli_query($conn,$query);
 if($data){
  echo "<script>alert('Data submitted success');</script>";
 }
 else
 {
  echo "not insert data";
 }
}



?>