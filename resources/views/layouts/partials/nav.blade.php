<header class="main-header">
  <a href="#" class="logo">
    <span class="logo-mini"><b>{{ str_limit(config('app.name', 'Laravel'), 1, '') }}</b></span>
    <span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true">
            <img class="user-image" src="http://bit.ly/2yU4teA" alt="User Image">
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" style="width: 100px" role="menu">
            <li>
              <a href="#">
                <i class="fa fa-user"></i> 
                <span>Profil</span>
              </a>
            </li>
            <li class="divider" style="margin: 0px 0px"></li>
            <li>
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Pengaturan</span>
              </a>
            </li>
            <li class="divider" style="margin: 0px 0px"></li>
            <li>
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> 
                <span>Keluar</span>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                  {{ csrf_field() }}
                </form>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
