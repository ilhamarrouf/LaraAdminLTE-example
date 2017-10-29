<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info" style="padding-top: 16px; padding-left: 10px">
        <p>{{ Auth::user()->name }}</p>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="active">
        <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Akun Pengguna</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Administrator</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Penulis</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Moderator</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> User</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>