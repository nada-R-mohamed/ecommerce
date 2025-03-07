@include('layouts.admin.head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('layouts.admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @yield('body')
            </div>
        </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         @include('layouts.admin.footer')
          <!-- partial -->