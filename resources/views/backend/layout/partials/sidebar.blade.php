<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('images/'.auth()->user()->photo) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth()->user()->name }}</p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header"></li>
      <li>
        <a href="{{ route('dashboard') }}">
          <i class="fa fa-dashboard"></i> 
          <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>2023</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
      <li>
          <a href="{{ route('admin.users.alluser') }}">
              <i class="fa fa-users"></i>
              <span>All User</span>
          </a>
      </li>
      <li>
      <a href="{{ route('admin.users.index')}}">
        <i class="fa fa-user"></i>
          <span>Users with team</span>
        </a>
      </li>
      <li>
      <a href="{{ route('admin.users.userNoteam')}}">
        <i class="fa fa-user"></i>
          <span>Users no team</span>
        </a>
      </li>
      
      </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>2022</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
      <li>
          <a href="{{ route('admin.users.alluser2022') }}">
              <i class="fa fa-users"></i>
              <span>All User</span>
          </a>
      </li>
      <li>
      <a href="{{ route('admin.users.index2022')}}">
        <i class="fa fa-user"></i>
          <span>Users with team</span>
        </a>
      </li>
      <li>
      <a href="{{ route('admin.users.userNoteam2022')}}">
        <i class="fa fa-user"></i>
          <span>Users no team</span>
        </a>
      </li>
      
      </ul>
      </li>
       <li>
        <a href="{{ route('admin.email') }}">
          <i class="fa fa-users"></i>
          <span>Download</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.teams.index') }}">
          <i class="fa fa-users"></i>
          <span>2023's Team</span>
        </a>
      </li>
      
     
    
      <!-- <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
      <li>
        <a href="">
          <i class="fa fa-users"></i> 
          <span>Users</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-users"></i> 
          <span>Subscriber</span>
        </a>
      </li>
      </ul>
      </li> -->

    </ul>
    
  </section>

</aside>