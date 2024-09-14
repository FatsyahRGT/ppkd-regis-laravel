<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="assets/index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PPKD|JP</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
              <a href="#" class="d-block"></a>
              {{-- <?php echo $_SESSION['fullname'] ?> --}}
          </div>
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
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                          Users
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('user.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>User</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('level.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>User Level</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                          Data Peserta Pelatihan
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('jurusan.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Jurusan</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('peserta.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Peserta Pelatihan</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('gelombang.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Gelombang</p>
                          </a>
                      </li>
                  </ul>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>