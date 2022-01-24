<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
          <!-- <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          /> -->
          <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
          <h1 class="text-xl-center brand-text font-weight-bolder">
            Contact App
          </h1>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview">
                <a href="{{ route('addContact') }}" id="addContact" class="nav-link">
                  <i class="fas fa-user-plus"> </i>
                  <p>New Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('importExport') }}" id="importExport" class="nav-link">
                  <i class="fas fa-address-book"> </i>
                  <p>Import / Export</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('profile') }}" id="profile" class="nav-link">
                  <i class="fas fa-user-edit"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('changePassword') }}" id="changePassword" class="nav-link">
                  <i class="fas fa-lock"></i>
                  <p>Change Password</p>
                </a>
              </li>
                <?php if (auth()->user()->role == 'admin') { ?>
                <li class="nav-item">
                <a href="{{ route('manageUser') }}" id="manageUser" class="nav-link">
                  <i class="fas fa-users-cog"></i>
                  <p>Manage User</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ route('siteConfiguration') }}" id="siteConfiguration" class="nav-link">
                  <i class="fas fa-tools"></i>
                  <p>Site Configuration</p>
                </a>
              </li>
                <?php } ?>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
