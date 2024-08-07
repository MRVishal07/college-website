<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">
    <title>Addmission Form</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <main>
        <div class="container-fluid">
            <div class="container border" id="container">
               <h2 class="heading">Addmission Registration Form</h2>
            </div>
       <div class="contianer-fluid mt-5">
        <div class="container">
        <form action="#" method="POST" class="row g-3 border shadow-sm p-5">
                <div class="col-md-6 lg-6">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="col-md-6 lg-6">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="col-md-4 lg-4">
                  <label for="dob" class="form-label">DOB</label>
                  <input type="date" name="dob" class="form-control" id="dob" required>
                </div>
                <div class="col-md-4 lg-4">
                <label for="gender" class="mt-2">Gender</label>
                  <select class="form-select" aria-label="Default select example" name="gender" id="gender" >
                    <option selected>Select Gender</option>
                    <option name="gender" value="Male">Male</option>
                    <option name="gender" value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 lg-4">
                  <label for="Email" class="form-label">Email</label>
                  <input type="Email" class="form-control" id="Email" placeholder="Enter Your Email" name="email" required>
                </div>
                <div class="col-md-4 mt-4 lg-4">
                  <label for="mob">Mobile No.</label>
                  <input type="mob" class="form-control" id="mob" placeholder="Enter Your Mobile Number" name="mob" required>
                </div>
                <div class="col-md-4 mt-4 lg-4">
                  <label for="altmob">Alternate Mobile No.</label>
                  <input type="altmob" class="form-control" id="altmob" placeholder="Enter Alternate Mobile Number" name="altmob">
                </div>
                <div class="col-md-12 lg-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address" name="address" required>
                </div>
                
                <div class="col-md-6 lg-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>
                <div class="col-md-4 lg-4">
                  <label for="state" class="form-label">State</label>
                  <input type="text" class="form-control" id="state" name="state" required>
                    
                </div>
                <div class="col-md-2 lg-2">
                  <label for="inputZip" class="form-label">Pin Code</label>
                  <input type="text" class="form-control" id="inputZip" name="pincode" required>
                </div>
                <div class="col-md-4 lg-4">
                  <p>Class X</p>
                  <label for="boardname" class="form-label">Board Name</label>
                  <input type="text" class="form-control" id="boardname" name="classXBoard" required>
                </div>
                <div class="col-md-4 lg-4">
                  <p>Class X</p>
                  <label for="percent" class="form-label">Percentages</label>
                  <input type="text" class="form-control" id="percent" name="classXPercent" required>
                </div>
                <div class="col-md-4 lg-4">
                  <p>Class X</p>
                  <label for="yrofpass" class="form-label">Year Of Passing</label>
                  <input type="text" class="form-control" id="yrofpass" name="classXYr" required>
                </div>

                <div class="col-md-4 lg-4">
                  <p>Class XII</p>
                  <label for="boradname" class="form-label">Board Name</label>
                  <input type="text" class="form-control" id="boradname" name="classXIIBoard" required>
                </div>
                <div class="col-md-4 lg-4">
                  <p>Class XII</p>
                  <label for="percentages" class="form-label">Percentages</label>
                  <input type="text" class="form-control" id="percentages" name="classXIIPercent" required>
                </div>
                <div class="col-md-4 lg-4">
                  <p>Class XII</p>
                  <label for="yrofpassing" class="form-label">Year Of Passing</label>
                  <input type="text" class="form-control" id="yrofpassing" name="classXIIYr" required>
                </div>
                <div class="col-md-4 lg-4">
                  <p>Branch Applied For</p>
                  <select class="form-select" aria-label="Default select example" name="branch" required>
                    <option selected>Select Branch</option>
                    <option name="branch" value="CSE">Computer Science And Engineering</option>
                    <option name="branch" value="ETE">Electronics And TeleCommunication Engineering</option>
                    <option name="branch" value="MOM">Modern Office Management</option>
                  </select>
                </div>
                <div class="col-12 ">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-md-3 lg-3">

                </div>
                <div class="col-12">
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
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
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $mob = $_POST['mob'];
  $altmob = $_POST['altmob'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];
  $classXBoard = $_POST['classXBoard'];
  $classXPercent = $_POST['classXPercent'];
  $classXYr = $_POST['classXYr'];
  $classXIIBoard = $_POST['classXIIBoard'];
  $classXIIPercent = $_POST['classXIIPercent'];
  $classXIIYr = $_POST['classXIIYr'];
  $branch = $_POST['branch'];
  

 $query = "INSERT INTO student(fname,lname,dob,gender,email,mob,altmob,address,city,state,pincode,classXBoard,classXPercent,classXYr,classXIIBoard,classXIIPercent,classXIIYr,branch) VALUES('$fname','$lname','$dob','$gender','$email','$mob','$altmob','$address','$city','$state','$pincode','$classXBoard','$classXPercent','$classXYr','$classXIIBoard','$classXIIPercent','$classXIIYr','$branch')";
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

