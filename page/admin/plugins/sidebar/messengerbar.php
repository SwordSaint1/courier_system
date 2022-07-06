  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$user_type;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user.png" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$employee_name;?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link ">
              <i class="fas fa-bullhorn"></i>
              <p>
                Announcement
               
              </p>
            </a>
          </li>   
            <li class="nav-item">
            <a href="booking.php" class="nav-link">
              <i class="far fa-calendar-alt"></i>
              <p>
                Booking Request
               
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="shipments.php" class="nav-link">
              <i class="fas fa-truck-loading"></i>
              <p>
                Shipments
               
              </p>
            </a>
          </li>
             <li class="nav-item">
            <a href="messengers.php" class="nav-link active">
              <i class="fas fa-user-friends"></i>
              <p>
                Messengers
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="clients.php" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Clients
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="feedbacks.php" class="nav-link">
              <i class="fas fa-thumbs-up"></i>
              <p>
                Feedbacks
               
              </p>
            </a>
          </li>
          </li>  
         <?php include 'logout.php' ;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
