<header class="main-header">
  <a href="{{ route('home') }}" class="logo" style="text-decoration: none">
    <span class="logo-mini"><b>{{ str_limit(config('app.name', 'Laravel'), 1, '') }}</b></span>
    <span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a class="sidebar-toggle" style="text-decoration: none" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  </nav>
</header>
