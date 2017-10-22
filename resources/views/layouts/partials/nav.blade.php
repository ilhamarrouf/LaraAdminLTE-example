<header class="main-header">
  <a href="{{ route('home') }}" class="logo" style="text-decoration: none">
    <span class="logo-mini"><b>{{ str_limit(config('app.name', 'Laravel'), 1, '') }}</b></span>
    <span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a class="sidebar-toggle" style="text-decoration: none" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png" class="img-circle" alt="User Image">

              <p>{{ Auth::user()->name }}</p>
            </li>
            <li class="user-body">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
