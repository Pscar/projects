<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> ร้านหมอยาราชพฤกษ์ </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
  <style>
        h1, h2, h3, h4, h5, h6, nav, .nav, .menu, button, .button, .btn, .price, ._heading, .wp-block-pullquote blockquote, blockquote, label, legend, a, .card-header, th,td,input,.card {
            font-family: "Mitr", sans-serif !important;
            font-weight: 120 !important;
            
        }

    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<script src="{{ asset('js/moment-with-locales.min.js') }}" ></script>

<!-- jQuery -->
<script src="{{ asset ('code.jquery.com/jquery-3.5.1.js') }}"></script>
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<script src="https://kit.fontawesome.com/d59a8a2721.js"></script>
<script type="text/javascript" charset="utf8" src="{{ asset ('http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset ('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset ('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('dist/js/demo.js') }}"></script>
<div class="wrapper">

  @if(Auth::user()->role == "staff")
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/sales') }}" class="nav-link" style="font-family: 'Mitr', sans-serif;">หน้าจอขาย</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/products')}}" class="nav-link" style="font-family: 'Mitr', sans-serif;">สต็อคยาปัจจุบัน</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/lots')}}" class="nav-link" style="font-family: 'Mitr', sans-serif;">สต็อคเข้าใหม่</a>
      </li>
    </ul> 
  @endif
  </nav>
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="font-family: 'Mitr', sans-serif;"> {{ Auth::user()->name }} / {{ Auth::user()->role }} </a>
        </div>
      </div>

  
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @if(Auth::user()->role == "staff")
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/sales') }}" class="nav-link active">
              <p style="font-family: 'Mitr', sans-serif;">หน้าจอขาย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/bills') }}" class="nav-link active">
                  <p style="font-family: 'Mitr', sans-serif;">รายการขาย</p>
                </a>
              </li>          
            </ul>
          </li>
          <li class="nav-header" style="font-family: 'Mitr', sans-serif;">Menu</li>          
            <li class="nav-item">
              <a href="{{ url('/bills') }}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p style="font-family: 'Mitr', sans-serif;">รายการขาย</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="{{ url('/products') }}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p style="font-family: 'Mitr', sans-serif;">ข้อมูลยา</p>
              </a>
            </li>
        @endif
        @if(Auth::user()->role == "admin") 
           
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p style="font-family: 'Mitr', sans-serif;">พิมพ์รายงาน </p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link active">
                  <p style="font-family: 'Mitr', sans-serif;">ข้อมูลผู้ใช้งาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('report/stockps/pdf') }}" class="nav-link active">
                  <p style="font-family: 'Mitr', sans-serif;">รายงานสต็อคล่าสุด </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('report/sales/pdf') }}" class="nav-link active">
                  <p style="font-family: 'Mitr', sans-serif;">รายงานการขาย </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('report/expend/pdf') }}" class="nav-link active">
                  <p style="font-family: 'Mitr', sans-serif;">รายงานการสั่งซื้อยา </p>
                </a>
              </li>
            </ul>
          </li>
      @endif
  </li>
  <li class="nav-item">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        {{ __('ออกจากระบบ') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  <!-- /.content-wrapper -->
</div>
  <footer class="main-footer">
  <span class="text-muted">Copyright {{ date("Y") }} © <strong>ร้านหมอยาราชพฤกษ์</strong></span>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
