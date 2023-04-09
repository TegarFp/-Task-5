<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('template_dashboard')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('template_dashboard/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="{{asset('template_dashboard/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('template_dashboard/')}}/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="{{asset('template_dashboard/')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('template_dashboard')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="{{asset('template_dashboard')}}/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{asset('template_dashboard')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-success navbar-light">
    @include('layout.navbar')
  </nav>
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-success">
      <center>
      <span class="brand-text font-weight-light text-center">Mentoring Program</span>
    </center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template_dashboard')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        @include('layout.menu')
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          @yield('content')
        </div>
      </div>
    </div>
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{asset('template_dashboard')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('template_dashboard')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('template_dashboard')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('template_dashboard')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('template_dashboard')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('template_dashboard')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('template_dashboard')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('template_dashboard')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('template_dashboard')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('template_dashboard')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('template_dashboard')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('template_dashboard')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template_dashboard')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template_dashboard')}}/dist/js/adminlte.js"></script>
  <script src="{{asset('template_dashboard')}}/sweetalert2/dist/sweetalert2.all.js"></script>
</body>
</html>
<script type="text/javascript">
            var flashError =$('#flashError').data('flash');
            if (flashError) {
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: flashError,
              })
            }
              var flash =$('#flash').data('flash');
              if (flash) {
                  Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: flash,
                })
              }
              $(document).on('click', '#btn-hapus', function(e){
                e.preventDefault();
                var link = $(this).attr('href');
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  confirmButtonColor: '#00a65a',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!',
                  showCancelButton: true,
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location = link;
                  }
                })
              })
            </script>
