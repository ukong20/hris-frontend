<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/images/logix-bpo.webp') }}" type="image/webp">
    @vite([
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
      <div class="wrapper">
        <div class="nav-left">
          <ul class="menu-list">
            <li class="menu-item">Dashboard</li>
            <li class="menu-item">Staff Directory</li>
            <li class="menu-item">Latest Jobs</li>
            <li class="menu-item">Company News</li>
            <li class="menu-item">Assigned Dashboard</li>
          </ul>
        </div>
        <div class="nav-right">
          
        </div>
      </div>
    </nav>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</html>