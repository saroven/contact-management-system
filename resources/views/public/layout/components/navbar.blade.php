<nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-user"></i> User
              <i class="fas fa-sort-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <span class="text-md">Profile</span>
              </a>
              <a href="#" class="dropdown-item">
                <span class="text-md">Change Password</span>
              </a>
              <a href="#" class="dropdown-item">
                <span class="text-md">Import / Export</span>
              </a>
              <a href="{{ route('manageUser') }}" class="dropdown-item">
                <span class="text-md">Manage Users</span>
              </a>
              <a href="{{ route('siteConfiguration') }}" class="dropdown-item">
                <span class="text-md">Site Configuration</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <span class="text-md">Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </nav>
