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

        <form method="POST" id="logoutForm" action="{{ route('logout') }}">
          @csrf
        </form>

    </div>




    <!--   Core JS Files   -->
    <script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Fonts and icons -->
    <script src="{{ asset('backend/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('backend/assets/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}',{
                	closeButton:true,
                	progressBar:true,
                });
                
            </script>
        @endforeach
    @endif
    {!! Toastr::message() !!}
    <script>

      $("#logout").on('click', function(e){
        e.preventDefault();
        document.getElementById('logoutForm').submit();
      });
    </script>
    @stack('js')
  </body>
</html>
