<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css" >
    <title>Govt. Polytechnic College Narsinghpur</title>
    <script src="script-1.js"></script>
    <style>
    .modal-header{
      background-color: red;
      color: #fff;
    }
    .modal-body{
      max-height : 300px;
      overflow-y: auto;
    }
  </style>
</head>
<body>
   <?php
   include("header.php");
   include("notice.php");
   ?>
    
  <main>
    <!-- Image-Carousel -->
    <div class="container-fluid" style="background-color: #f1f1f1;">
      <div class="container-fluid ">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assest/college-photo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assest/college-photo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assest/college-photo.jpg" class="d-block w-100" alt="..." >
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div>
<br><br>  
<!-- college information -->
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 border">
        <div class="college-about">
        <h3 class="title" id="title">V.M. GOVT. POLYTECHNIC COLLEGE  <i class="fa-solid fa-caret-down" style="margin-left: 1rem;"></i></h3>
      </div>
      <div class="college-about-1">
      <p>The <span>Vidhyavati Mushran Government Polytechnic College</span> Narsinghpur was established in 1999 firmly known as Vidhyavati Mushran Government Womens Polytechnic College. The word Womens was omitted in its name by government of MP in 2009 with the conditional change of admission rule of co-ed. College is governed by Technical Education & Trainning Department of MP Govt. It is affiliated by <span> "Rajiv Gandhi Technical University, Bhopal"</span>And it is approved by <span> AICTE </span> .Currently we are offering four diploma courses as Modern Office Management (3 Yr. Diploma), Electronics Engineering (3 Yr. Diploma), And Computer Science (3 Yr. Diploma). Each branch is having intake of 66. We also have well furnished and equipped laboratories for all of them.The area covered by college and campus premises of approximate 11 acres with girls hostel facility and Beautiful garden.wifi campus .</p>
      </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./Banner/pic1.jpg" class="d-block w-100" alt="...">
    </div>
         <div class="carousel-item">
      <img src="./Banner/pic2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./Banner/pic3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<br><br>
    <!-- Cards -->
    <div class="container">
      <div class="cards">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: auto; height: 23rem;">
              <img src="assest/download.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">PRINCIPAL OF COLLEGE</h5>
                <p class="card-text">DR. BM. BAGHEL</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: auto;">
              <div class="card-header" id="student-services">
                Student Services
              </div>
              <ul class="list-group list-group-flush">
                <a href="https://www.rgpvdiploma.in/Academics/AICTEBased.aspx">
                <li class="list-group-item" id="aicte">AICTE Based OCBC 2023 Curriculum</li>
                </a>
                <a href="https://www.rgpvdiploma.in/Academics/Acadmic_calander.aspx">
                <li class="list-group-item" id="aicte">Acadmics Calender</li>
                </a>
                <a href="https://www.rgpvdiploma.in/UploadContent/frm_ViewTT.aspx">
                <li class="list-group-item" id="aicte">Time Table</li>
                </a>
                <a href="https://www.rgpvdiploma.in/Exam/ProgramSelect.aspx">
                <li class="list-group-item" id="aicte">Results</li>
                </a>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: auto;">
              <div class="card-header" id="student-services">
                Importent Links
              </div>
              <ul class="list-group list-group-flush">
                <a href="https://www.rgpvdiploma.in/">
                <li class="list-group-item" id="aicte">RGPV DIPLOMA</li>
                </a>
                <a href="https://www.crispindia.com/">
                <li class="list-group-item" id="aicte">CRISP</li>
                </a>
                <a href="https://www.tribal.mp.gov.in/MPTAAS">
                <li class="list-group-item" id="aicte">MP Tass</li>
                </a>
                <a href="https://scholarshipportal.mp.nic.in/Index.aspx">
                <li class="list-group-item" id="aicte">Scholarship 2.0</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   <h1 class="text-center" id="Branch">OUR BRANCHES</h1>
   <div class="container">
    <hr>
   </div>
  <!-- Branches -->
    <div class="container">
      <div class="row">
        <a href="cse.php">
        <div class="col-lg-4 col-md-4">
          <div class="card" style="width: auto;">
            <img src="./assest/cse.jpg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <p class="card-text text-center" id="branch-name">Computer Scince & Engineerings</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="ete.php">
          <div class="card" style="width: auto;">
            <img src="./assest/ece.png" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <p class="card-text text-center" id="branch-name">Electronics & Telecommunication Engineerings</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="mom.php">
          <div class="card" style="width: auto;" id="vm">
            <img src="assest/photo_203.normal.jpg" class="card-img-top img-thumbnail" alt="..." style="height: 11.5rem;">
            <div class="card-body">
              <p class="card-text text-center" id="branch-name">Modern Office Management</p>
            </div>
          </div>
          </a>
      </div>
     </div>
    </div>
  </main>
  <!-- logo-cards -->
<div class="container-fluid" id="logo-card-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <a href="https://www.mptechedu.org/">
        <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="max-width: auto;" id="cards-logo">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./assest/DTE.png" class="img-thumbnail rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">DTE MP</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
              </div>
            </div>
          </div>
        </div>
      </a>
      </div>
      <div class="col-lg-3">
        <a href="https://dte.mponline.gov.in/portal/services/onlinecounselling/counshomepage/home.aspx">
        <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="max-width: auto;" id="cards-logo">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./assest/dtemp.jpeg" class="img-thumbnail rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">DTE MP Online</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
              </div>
            </div>
          </div>
        </div>
      </a>
      </div>
      <div class="col-lg-3">
        <a href="https://www.rgpvdiploma.in/">
        <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="max-width: auto" id="cards-logo">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./assest/RGPV.jpg" class="img-thumbnail rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text">RGPV</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
              </div>
            </div>
          </div>
        </div>
      </a>
      </div>
      <div class="col-lg-3">
        <a href="https://www.aicte-india.org/">
        <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="max-width: auto;" id="cards-logo">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./assest/Aicte.png" class="img-thumbnail rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">AICTE</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</a>
</div>
<!-- Footer -->
    <?php
    include("footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
