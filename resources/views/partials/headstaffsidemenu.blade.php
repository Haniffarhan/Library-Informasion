 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('logo.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Sarkom</p>
        <a>HEAD STAFF</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Profile</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('headstaff.profile', $id_user)}}"><i class="fa fa-circle-o"></i> Profile User</a></li>
          <li><a href="{{ route('headstaff.change', $id_user)}}"><i class="fa fa-circle-o"></i> Change Password</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-history"></i> <span>Reporting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('headstaff.user', $id_user)}}"><i class="fa fa-circle-o"></i> User Report</a></li>
          <li><a href="{{ route('headstaff.book', $id_user)}}"><i class="fa fa-circle-o"></i> Book Report</a></li>
          <li><a href="{{ route('headstaff.borrow', $id_user)}}"><i class="fa fa-circle-o"></i> Borrowing Report</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->