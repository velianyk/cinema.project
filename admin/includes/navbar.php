<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin/index.php">
        <div class="sidebar-brand-icon">
          <i class="fa fa-film"></i>
        </div>
        <div class="sidebar-brand-text mx-3">КОСМОС АДМІН</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
       <li class="nav-item">
        <a class="nav-link collapsed" href="../admin/index.php">
          <i class="fas fa-user-tie"></i>
          <span>Admin Profile</span>
        </a>
      </li>
      <hr class="sidebar-divider">
       <li class="nav-item">
        <a class="nav-link collapsed" href="../admin/users.php">
         <i class="fa fa-user"></i>
          <span>Users</span>
        </a>
</li>
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
   
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            <form action="logout.php" method="post">
              <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
            </form>

        </div>
      </div>
    </div>
  </div>
