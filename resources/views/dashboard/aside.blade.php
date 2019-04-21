<!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary  elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="./images/handshake.png" alt="Larastart Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">DCU Center</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="./images/customer-support.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{auth::user()->name}}</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item">
                <router-link to="/dashboard" class="nav-link" active-class="active" exact>
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
                </router-link>
              </li>
              <li class="nav-item has-treeview ">
                <router-link to="#" class="nav-link" active-class="active" exact>
                  <i class="nav-icon fa fa-cog"></i>
                  <p>
                    Management
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </router-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <router-link to="/users" class="nav-link " active-class="active" exact>
                      <i class="fas fa-users nav-icon"></i>
                      <p>Users</p>
                    </router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <router-link to="/profile" class="nav-link" active-class="active" exact>
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile
                </p>
                </router-link>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>
                    {{ __('Logout') }}
                  </p>
                </a>
                
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>