<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">
    <title>Contact US</title>
</head>
<body>
    <?php
    include("header.php")
    ?>

    <main>
      <div class="conatiner-fluid" id="container-fluid">
        <div class="container">
            <div class="row">
                <a href="Home">Home</a>
                <p>Contact Us</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
      <div class="container border" id="container">
         <h2 class="heading">Contact Us</h2>
      </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: auto;">
              <div class="card-body">
                <h5 class="card-title">V.M. GOVERNMENT POLYTECHNIC COLLEGE.</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Staison road Near By New Bus Stand, Narsinghpur Madhya-Pradesh 487001.</h6>
                <h6 class=""><span>Email : Prinvmgp.nrp@mp.gov.in</span></h6>
                <h6 class=""><span>Phone : 07792-236705</span></h6>
              </div>
            </div>
          </div>
  <div class="container-fluid">
            <div class="card" style="width: Auto;">
              <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.1402614463955!2d79.20477207508938!3d22.945060979228263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397f8336f31c31bd%3A0x9183244cb7daa1a6!2sGovernment%20Polytechnic%20College%20Narsinghpur!5e0!3m2!1sen!2sin!4v1712651485959!5m2!1sen!2sin" width="100%" height="600px"></iframe>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="query-form">
        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: auto;">
        <div class="card-body">
          <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
              <h2 class="text-center mb-4">Query Form</h2>
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                </div>
                <div class="form-group">
                  <label for="query">Your Query:</label>
                  <textarea class="form-control" id="query" rows="3" placeholder="Type your query here" name="query"></textarea>
                </div>
                <button type="submit" value = "submit" name = "submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
        </div>
       </div>
      </div>
    </div>
  </div>
    </main>



    <?php
    include("footer.php");
    ?>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
    include("connection.php");

    if($_POST['submit']){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $query = $_POST['query'];

      $query = "INSERT INTO query (name,email,query)VALUES('$name','$email','$query')";
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