<style>
:root{
    --color1:#015315;
    --color2:#015315;
}

 .sidebar-brand{
   background-color:var(--color1);

 }
 .sidebar{
   background-color:var(--color2);
 }
 .sidebar i{
 }
</style>
<body>
   <!-- Sidebar -->
   <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_index.php">

    <img src="../../images/logo.png" style="height: 50px; width: 50px;" >
  <div class="sidebar-brand-text mx-3" style="font-size: 10px;"  >POSO System</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="admin_index.php">
    <i class="fas fa-fw fa-tachometer-alt" style="color: white;" ></i>
    <span>Admin Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading" style="color: white;" >
  Menu
</div>

<li class="nav-item">
  <a class="nav-link collapsed" href="admin_record.php"  aria-expanded="true" aria-controls="collapseTwo">
  <i class="far fa-newspaper"></i>
    <span style="color: white;">Complaint Record</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapsePages">
  <i class="fas fa-user"></i>
    <span style="color: white;">Manage Account</span>
  </a>
  <div id="collapse1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded" style="font-size: 12px; ">
      <a class="collapse-item" href="manage_role.php">Role</a>
      <a class="collapse-item" href="manage_user.php">User</a>
    </div>
  </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="daily_logs.php"  aria-expanded="true" aria-controls="collapseTwo">
  <i class="fas fa-list-alt"></i>
    <span style="color: white;">Daily Logs</span>
  </a>
</li>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <div class="input-group">
             <div class="input-group-append">
              <?php $date = date("m/d/Y"); $date1 = date("M d, Y",strtotime($date)); echo $date1 ?>
             </div>
           </div>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

               ADMIN

                </span>
                    <i class="fas fa-fw fa-user-circle"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 200px;">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body"style="margin-left: 180px;">Ready to Leave?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST">

            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>

</body>
