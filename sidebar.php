<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index2.php" class="brand-link">
      <img src="img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AnesCare</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name'];?></a>        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="patient_details.php" class="nav-link">
              <i class="nav-icon fas fa-hospital-user"></i>
              <p>
                patients
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="patient-reg.php" class="nav-link">
              <i class="nav-icon nav-icon far fa-registered"></i>
              <p>
                Register Patients
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="patient_ad.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Admit Patients
                
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="reminder.php"  target="_blank" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Set Reminders
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="googletrends.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ASA Levels Comparison</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gender_comparison.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Genders of Patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="age_limit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ages of Patients</p>
                </a>
              </li>
              
            </ul>
          </li>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>