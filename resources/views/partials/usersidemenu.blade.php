 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('logo.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a>USER</a>
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
          <li><a href="{{ route('user.profile')}}"><i class="fa fa-circle-o"></i> Profile User</a></li>
          <li><a href="{{ route('user.change')}}"><i class="fa fa-circle-o"></i> Change Password</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Book</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('user.borrowing')}}"><i class="fa fa-circle-o"></i> Borrowing Books</a></li>
          <li><a href="{{ route('user.borrowinghistory')}}"><i class="fa fa-circle-o"></i> Borrowing History</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->