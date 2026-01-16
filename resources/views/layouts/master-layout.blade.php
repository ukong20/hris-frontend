<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/images/logix-bpo.webp') }}" type="image/webp">
    @vite([
        'resources/css/fonticon.css',
        'resources/css/custom.css', 'resources/js/custom.js',
        'resources/css/master-layout.css', 'resources/js/master-layout.js'
        ])
    @yield('styles-scripts')
    <title>
        @yield('title')
    </title>
  </head>
  <body>
    <nav class="main-navbar">
      <div class="nav-container">
        <div class="nav-left">
          <ul class="menu-list">
            <li class="menu-item"><a class="active" href="#"><i class="ico ico-dashboard"></i>Dashboard</a></li>
            <li class="menu-item"><a href="#"><i class="ico ico-users-add"></i>Staff Directory</a></li>
            <li class="menu-item"><a href="#"><i class="ico ico-case"></i>Latest Jobs</a></li>
            <li class="menu-item"><a href="#"><i class="ico ico-info"></i>Company News</a></li>
            <li class="menu-item"><a href="#"><i class="ico ico-assign-db"></i>Assigned Dashboards</a></li>
          </ul>
        </div>
        <div class="nav-right">
          asdasdas
        </div>
      </div>
    </nav>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</html>