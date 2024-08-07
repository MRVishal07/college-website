<div class="container mt-2">
        
        
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fa-solid fa-bars"></i> Menu 
        </button>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <a href="dashboard.php">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dashboard</h5>
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          
          <div class="offcanvas-body">
            <div>
            </div>
            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Admins Profile
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Admins.php">Admins Record</a></li>
                <li><a class="dropdown-item" href="admin_register.php">Register Admins</a></li>

              </ul>
            </div>

            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Faculty Records
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Add_Faculty.php">Add Faculty Details</a></li>
                <li><a class="dropdown-item" href="manage_faculty.php">Manage Faculty Details</a></li>
              </ul>
            </div>
            
            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Addmission Records
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="student_record.php">Student Record</a></li>
              </ul>
            </div>
             
            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Notice Board
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="manage_notice.php">Manage Notice</a></li>
              </ul>
            </div>
            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Queries
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="query.php">Manage Query</a></li>
              </ul>
            </div>

          </div>
        </div>
        <a href="logout.php">
           <button type="button" class="btn btn-danger" style="float:right;">Logout</button>
           </a>
            </div>