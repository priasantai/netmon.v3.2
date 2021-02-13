
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Netmon V.3.2 | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('admintemplate') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('admintemplate') }}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#/APPstatus" class="nav-link">APP Status</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset ('admintemplate') }}/dist/img/avatar.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{ Auth::user()->level }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{ asset ('admintemplate') }}/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">

            <p>
              {{ Auth::user()->name }} - egov
              <small>{{ Auth::user()->kantor }} - Bolaang Mongondow</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Facebook</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Github</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Exploit-DB</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
      
            <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right"
              onclick="
              event.preventDefault();
              document.getElementById('AdminLogout').submit()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="AdminLogout" action="{{ route('logout')}}" method="POST">@csrf</form>
          </li>
        </ul>
      </li>
      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset ('admintemplate') }}/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">NETMON V3.2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('admintemplate') }}/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} online</a>
        </div>
      </div>
  @include('layout.nav')
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
         </div>
      </div><!-- /.container-fluid -->
    </section>

@yield('main_content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2
    </div>
    <strong>Copyright &copy; 2021 <a href="#">NETMON by EGOV Team</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('admintemplate') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('admintemplate') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('admintemplate') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('admintemplate') }}/dist/js/demo.js"></script>
</body>
</html>
