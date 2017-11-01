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
        <li>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i> 
            <span>Keluar</span>

            <form id="logout-form" action="http://motionadsapp.firzil.mlopp.com/logout" method="POST" style="display: none">
              <input type="hidden" name="_token" value="BmHks7TAkXNW78Gdz3EtRdKgTyQxwlemKP6ypFto">
            </form>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
