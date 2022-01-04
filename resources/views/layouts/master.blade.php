<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/admin/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/admin/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                {{auth()->user()->name}}
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">

        @if(auth()->user()->hak_akses=='dokter')
      <li><a href="../dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
@endif
      
        
@if(auth()->user()->hak_akses=='admin')
      <li><a href="../dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
@endif
@if(auth()->user()->hak_akses=='apoteker')
      <li><a href="../dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
@endif

@if(auth()->user()->hak_akses=='resepsionis')
      <li><a href="../dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
@endif
      
      @if(auth()->user()->hak_akses=='admin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          
          <ul class="treeview-menu">
            
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
           
          </ul>
        </li>
    @endif
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            @if(auth()->user()->hak_akses=='admin')
            <li><a href="../data_pendaftaran"><i class="fa fa-circle-o "></i class="pull-right"> Tambah Pendaftaran</a></li>
            <li><a href="../data_dokter"><i class="fa fa-circle-o"></i> Tambah Data Dokter</a></li>
            <li><a href="../data_apoteker"><i class="fa fa-circle-o"></i> Tambah Data Apoteker</a></li>
            <li><a href="../data_resepsionis"><i class="fa fa-circle-o"></i> Tambah Data Resepsionis</a></li>
            <li><a href="../data_obat"><i class="fa fa-circle-o"></i> Tambah Data Obat</a></li>
            <li><a href="../data_kategori_obat"><i class="fa fa-circle-o"></i> Tambah kategori obat</a></li>
            <li><a href="../data_pasien"><i class="fa fa-circle-o"></i> Tambah Data Pasien</a></li>
            @endif
            @if(auth()->user()->hak_akses=='apoteker')
            <li><a href="../data_obat"><i class="fa fa-circle-o"></i> Tambah Data Obat</a></li>
            <li><a href="../data_kategori_obat"><i class="fa fa-circle-o"></i> Tambah kategori obat</a></li>
            @endif
            @if(auth()->user()->hak_akses=='dokter')
            <li><a href="../data_pendaftaran"><i class="fa fa-circle-o "></i class="pull-right"> Tambah Pendaftaran</a></li>
            @endif
            @if(auth()->user()->hak_akses=='resepsionis')
            <li><a href="../data_pasien"><i class="fa fa-circle-o"></i> Tambah Data Pasien</a></li>
            @endif
            @if(auth()->user()->hak_akses=='resepsionis')
            <li><a href="../data_pendaftaran"><i class="fa fa-circle-o "></i class="pull-right"> Tambah Pendaftaran</a></li>
            @endif
        
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
         

            @if(auth()->user()->hak_akses=='admin')
            <li><a href="../data_obat"><i class="fa fa-circle-o"></i>  Data Obat </a></li>
            <li><a href="../data_resep"><i class="fa fa-circle-o"></i>  Data Resep </a></li>
            <li><a href="../data_transaksi"><i class="fa fa-circle-o"></i>  Data Trasaksi </a></li>
            <li><a href="../data_pasien"><i class="fa fa-circle-o"></i>  Data Pasien </a></li>
            <li><a href="../data_dokter"><i class="fa fa-circle-o"></i>  Data Dokter </a></li>
            <li><a href="../data_rekamedia"><i class="fa fa-circle-o"></i>  Data Rekamedia </a></li>
            @endif
            @if(auth()->user()->hak_akses=='apoteker')
            <li><a href="../data_resep"><i class="fa fa-circle-o"></i>  Data Resep </a></li>
            <li><a href="../data_transaksi"><i class="fa fa-circle-o"></i>  Data Trasaksi </a></li>
            <li><a href="../data_obat"><i class="fa fa-circle-o"></i>  Data Obat </a></li>
            <li><a href="../data_kategori_obat"><i class="fa fa-circle-o"></i>  Data Kategori Obat </a></li>
            @endif
            @if(auth()->user()->hak_akses=='dokter')
            <li><a href="../data_obat"><i class="fa fa-circle-o"></i>  Data Obat </a></li>
            <li><a href="../data_rekamedia"><i class="fa fa-circle-o"></i>  Data Rekamedia </a></li>
            @endif
            @if(auth()->user()->hak_akses=='resepsionis')
            <li><a href="../data_pasien"><i class="fa fa-circle-o"></i>  Data Pasien </a></li>
            @endif
            
        
            

          </ul>
        </li>
        @if(auth()->user()->hak_akses=='admin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-print"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../data_obat"><i class="fa fa-circle-o"></i>  Data Obat </a></li>
            <li><a href="../data_resep"><i class="fa fa-circle-o"></i>  Data Resep </a></li>
            <li><a href="../data_transaksi"><i class="fa fa-circle-o"></i>  Data Trasaksi </a></li>
            <li><a href="../data_pasien"><i class="fa fa-circle-o"></i>  Data Pasien </a></li>
            <li><a href="../data_dokter"><i class="fa fa-circle-o"></i>  Data Dokter </a></li>
            <li><a href="../data_rekamedia"><i class="fa fa-circle-o"></i>  Data Rekamedia </a></li>
       

          </ul>
        </li>
        
        
    
            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            @endif
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


  
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/js/demo.js"></script>
@yield('footer')
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>





