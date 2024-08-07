<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">

    
    <title>Courses</title>
</head>
<body>
    <?php
    include("header.php")
    ?>

<main><br>
   
<div class="container-fluid">
        <div class="container border" id="container">
           <h2 class="heading">Course Offered</h2>
        </div>
    <div class="container">
        <table class="table border table-striped">
            <thead>
              <tr>
                <th scope="col">S. No.</th>
                <th scope="col">Department</th>
                <th scope="col">Course Name</th>
                <th scope="col">Admission Scheme</th>
                <th scope="col">Admission Eligibility</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="border">Computer Science And Engineering</td>
                <td class="border">3 Year Diploma</td>
                <td class="border">PPT/CLC</td>
                <td class="border">10 th Pass</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="border">Electronics And Telecommunication</td>
                <td class="border">3 Year Diploma</td>
                <td class="border">PPT/CLC</td>
                <td class="border">10 th Pass</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td class="border">Modern Office Management</td>
                <td class="border">3 Year Diploma</td>
                <td class="border">NON PPT</td>
                <td class="border">12 th Pass</td>
              </tr>
            </tbody>
          </table>
    </div>
      <br>
<div class="container" #id="container">
    <h5>3YR-DIPLOMA-2005-06-Ordinance</h5>
    <a href="./assest/3YR-DIPLOMA-2005-06-Ordinance.pdf">
    <button type="button" class="btn btn-secondary">Download</button></a>
    <h5>3YR-DIPLOMA-2011-12-Ordinance</h5>
    <a href="./assest/3YR-DIPLOMA-2011-12-Ordinance.pdf">
    <button type="button" class="btn btn-secondary">Download</button></a>
</div>

</main>


    <?php
    include("footer.php");
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>