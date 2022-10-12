<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SIRIKO PDAM</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">   </head>
  <body >
    <div class="wrapper">
      <div class="sidebar sidebar-default ">
          <div class="sidebar-logo d-flex align-items-center justify-content-between">
              <a href="/dashboard" class="header-logo">
                  <img src="{{ asset ('assets/images/logo.png') }}" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">SIRIKO PDAM</h5>
              </a>
              <div class="si-menu-bt-sidebar ml-3">
                  <i class="las la-bars wrapper-menu"></i>
              </div>
          </div>
          <div class="data-scrollbar">
            @include('layouts.sidebar')  
          </div>
      </div>
      @include('layouts.navbar')
      <div class="content-page">
        <div class="container-fluid">
      @yield('page-container')
        </div>
      </div>

    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('/assets/js/table-treeview.js') }}"></script>
    

    
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
</html>