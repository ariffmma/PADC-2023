<header class="main-header">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>.</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
              <img src="{{ asset('/frontend/img/logo.png') }}" alt="Logo" height="40px">
          </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
    
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">                                  
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <img src="{{ asset('images/'.auth()->user()->photo) }}" class="user-image" alt="User Image"> -->
                  <span class="hidden-xs">{{ auth()->user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <!-- <img src="{{ asset('images/'.auth()->user()->photo) }}" class="img-circle" alt="User Image"> -->
                    <p>
                      {{ auth()->user()->name }}
                      <small>Member since {{ date('M. Y',strtotime(auth()->user()->created_at)) }}</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="" class="btn btn-success btn-flat">Profile</a>
                    </div>
                    <div>
                      <a href="{{ route('home') }}" target="_blank" class="btn btn-info btn-flat">Visit Website</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="javascript:void(0)" class="btn btn-danger btn-flat" 
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        Sign out
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             
            </ul>
          </div>
        </nav>
      </header>