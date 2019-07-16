 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('logo.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Sarkom</p>
        <a>ADMIN</a>
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
          <li><a href="{{ route('admin.profile', $id_user)}}"><i class="fa fa-circle-o"></i> Profile User</a></li>
          <li><a href="{{ route('admin.change', $id_user)}}"><i class="fa fa-circle-o"></i> Change Password</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.forminputuser', $id_user)}}"><i class="fa fa-circle-o"></i> Input User</a></li>
          <li><a href="{{ route('admin.listuser', $id_user)}}"><i class="fa fa-circle-o"></i> List User</a></li>
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
          <li><a href="{{ route('admin.forminputbook', $id_user)}}"><i class="fa fa-circle-o"></i> Input Book</a></li>
          <li><a href="{{ route('admin.listbook', $id_user)}}"><i class="fa fa-circle-o"></i> List Book</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Borrowing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.forminputborrow', $id_user)}}"><i class="fa fa-circle-o"></i> Input Borrowing</a></li>
          <li><a href="{{ route('admin.listborrow', $id_user)}}"><i class="fa fa-circle-o"></i> List Borrowing</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->