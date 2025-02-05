<!DOCTYPE html>
<html lang="en">
    @include('layouts.backend.partials.head')

  <body>
    <div class="wrapper">
      <!-- Sidebar -->
        @include('layouts.backend.partials.sidebar')
      <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
            @include('layouts.backend.partials.header')
            </div>

            <div class="container">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>
            @include('layouts.backend.partials.footer')
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
    @stack('js')
  </body>
</html>
