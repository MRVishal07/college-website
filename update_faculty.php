<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include("connection.php");
$id =  $_GET['id'];
$sql = "SELECT * FROM faculty where id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">
  
</head>
<body>
    <?php
    include("header.php");
    include("side_bar.php");
    ?>
    <div class="container border" id="container">
           <h2 class="heading">Faculty Details</h2>
        </div>

<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-6">
  <form action="#" method="POST" class="border shadow-sm p-5">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name"  name="name" value = "<?php echo $row['name']; ?>">
    </div>
    <div class="mb-3">
      <label for="Designation">Designation_Department:</label>
      <input type="text" class="form-control" id="Designation"  name="Designation_Department" value = "<?php echo $row['Designation_Department']; ?>">
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email"  name="email" value = "<?php echo $row['email']; ?>">
    </div>
    <div class="mb-3">
      <label for="phone">Phone No :</label>
      <input type="text" class="form-control" id="phone"   name="phone" value = "<?php echo $row['phone']; ?>">
    </div>
    
    <button  value = "submit" name="submit" class="btn btn-primary">Update</button>
  </form>
  </div>
</div>


<?php
    include("footer.php")
    ?>
</body>
</html>

<?php

if($_POST['submit'])
{
  $name = $_POST['name'];
  $Designation_Department = $_POST['Designation_Department'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

 $query = "UPDATE faculty set name = '$name', Designation_Department = '$Designation_Department', email = '$email', phone = '$phone'";
 $data = mysqli_query($conn,$query);
 if($data){
  echo "<script>alert('Record Updated');</script>";
 }
 else
 {
  echo "<script>alert('Record does not Updated');</script>";
 }
}



?>