<!DOCTYPE html>
<html lang="en">
<!---- header ---->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Contact Management App</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
{{--    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/all.min.css') }}">--}}
    <!-- Ionicons -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/icon-icon/ionicons.min.css') }}">--}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin-lte/adminlte.min.css') }}" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
    @yield('extra-css')
</head>

<!----/ header ---->

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
        @include('public.layout.components.navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar -->
        @include('public.layout.components.sidebar')
      <!--/ Main Sidebar -->


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          @yield('content')
          <!-- /.card -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
              <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">Version: 0.01 Beta</div>
        <!-- Default to the left -->
        <strong
          >Copyright &copy; 2021 <a href="#">Contact Management App</a>.</strong
        >
        All rights reserved.
      </footer>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/js/admin-lte/adminlte.min.js') }}"></script>

    @yield('extra-script')

  </body>
</html>
