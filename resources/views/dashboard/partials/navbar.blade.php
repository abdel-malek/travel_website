    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="{{url('img/logo.svg')}}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="{{url('img/logo-mini.svg')}}" alt="logo" />
        </a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Session::get('username')}} !</span>
              <img class="img-xs rounded-circle" src="{{url('img/faces/face1.jpg')}}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item" href="/logout">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>


    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{url('img/faces/face1.jpg')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <img src="{{url('img/icon/dashboard.svg')}}" class="menu-icon dashboard" />
              <img src="{{url('img/icon/active_dashboard.svg')}}" class="menu-icon dashboard_active" />
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/abouts">
            <img src="{{url('img/icon/about.svg')}}" class="menu-icon about" />
              <img src="{{url('img/icon/about_active.svg')}}" class="menu-icon about_active" />
              <span class="menu-title">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin">
              <img src="{{url('img/icon/admin.svg')}}" class="menu-icon admin" />
              <img src="{{url('img/icon/admin_active.svg')}}" class="menu-icon admin_active" />
              <span class="menu-title">Admin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/package">
              <img src="{{url('img/icon/package.svg')}}" class="menu-icon package" />
              <img src="{{url('img/icon/package_active.svg')}}" class="menu-icon package_active" />
              <span class="menu-title">Package</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/day">
              <img src="{{url('img/icon/day.svg')}}" class="menu-icon day" />
              <img src="{{url('img/icon/day_active.svg')}}" class="menu-icon day_active" />
              <span class="menu-title">Day</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/message">
                  <img src="{{url('img/icon/message.svg')}}" class="menu-icon message" />
                  <img src="{{url('img/icon/message_active.svg')}}" class="menu-icon message_active" />
                  <span class="menu-title">Messages</span>
              </a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="/gallery">
                  <img src="{{url('img/icon/gallery.svg')}}" class="menu-icon gallery" />
                  <img src="{{url('img/icon/gallery_active.svg')}}" class="menu-icon gallery_active" />
                  <span class="menu-title">Gallery</span>
              </a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="/social_media">
                  <img src="{{url('img/icon/network.svg')}}" class="menu-icon social_media" />
                  <img src="{{url('img/icon/network_active.svg')}}" class="menu-icon social_media_active" />
                  <span class="menu-title">Social Media</span>
              </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->