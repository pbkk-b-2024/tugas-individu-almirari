<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/favicon.png" type="image/x-icon">
    <title>Kuliah PBKK Kelas B 2024</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    
    <link rel="stylesheet" href="/css/app.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-black navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-blue-primary elevation-4">
            <!-- Brand Logo -->
            <!-- <a href="/" class="brand-link">
                <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">PBKK (B)</span>
            </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                    <div class="image">
                        <img src="/img/profilepic.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info ml-2">
                        <a href="#" class="d-block">
                            <?php echo e(session('user_name','Almira Raisa Izzatina')); ?>

                            <br>
                            <small class="text-muted">5025221250</small>
                        </a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li data-pertemuan="1" class="nav-item has-treeview <?php echo e(request()->is('pertemuan1/*') ? 'menu-open' : ''); ?> ">
            <a href="#" class="nav-link <?php echo e(request()->is('pertemuan1/*') ? 'active' : ''); ?>">
                <p>
                Pertemuan 1
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            
            <ul class="nav nav-treeview">
                <!-- basic routing -->
                <li class="nav-item">
                    <a href="pertemuan1/basicrouting" class="nav-link <?php echo e(request()->is('pertemuan1/basicrouting') ? 'active' : ''); ?>">
                    <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                        <p>Basic Routing</p>
                    </a>
                </li> 

                <!-- route parameters -->
                <li class="nav-item">
                    <a href="<?php echo e(route('param')); ?>" class="nav-link <?php echo e(request()->routeIs('param') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                        <p>Route Parameters</p>
                    </a>
                </li>   

                <!-- named routing -->
                <li class="nav-item">
                    <a href="<?php echo e(route('named')); ?>" class="nav-link <?php echo e(request()->routeIs('named') ? 'active' : ''); ?>">
                            <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                            <p>Named Routing</p>
                    </a>
                </li>  

                <!-- route groups -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                        <p>
                            Routing Groups
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('route1')); ?>" class="nav-link <?php echo e(request()->routeIs('route1') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-circle" style="font-size: 10px;"></i>
                                <p style="margin-left: 15px;">Route 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('route2')); ?>" class="nav-link <?php echo e(request()->routeIs('route2') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-circle" style="font-size: 10px;"></i>
                                <p style="margin-left: 15px;">Route 2</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- fallback routing -->
                <li class="nav-item">
                    <a href="<?php echo e(route('error')); ?>" class="nav-link <?php echo e(request()->routeIs('error') ? 'active' : ''); ?>">
                            <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                            <p>Fallback Routing</p>
                    </a>
                </li>  


                <!-- genap ganjil -->
                <li class="nav-item">
                    <a href="<?php echo e(route('genap-ganjil')); ?>" class="nav-link <?php echo e(request()->routeIs('genap-ganjil') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                        <p>Genap Ganjil</p>
                    </a>
                </li>
                
                <!-- fibonacci -->
                <li class="nav-item">
                    <a href="<?php echo e(route('fibonacci')); ?>" class="nav-link <?php echo e(request()->routeIs('fibonacci') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                        <p>Fibonacci</p>
                    </a>
                </li>
                
                <!-- bilangan prima -->
                <li class="nav-item">
                    <a href="<?php echo e(route('bilangan-prima')); ?>" class="nav-link <?php echo e(request()->routeIs('bilangan-prima') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                        <p>Bilangan Prima</p>
                    </a>
                </li>   
                <!-- <li class="nav-item">
                  <a href="/adminlte/" class="nav-link"  target="_blank">
                      <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>
                      <p>Template AdminLTE</p>
                  </a>
                </li>     -->
            </ul>
          </li>

                        <!-- <li data-pertemuan="2"
                            class="nav-item has-treeview  <?php echo e(request()->is('pertemuan2/*') ? 'menu-open' : ''); ?> ">
                            <a href="#" class="nav-link <?php echo e(request()->is('pertemuan2/*') ? 'active' : ''); ?>">
                                
                                <p>
                                    Pertemuan 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?php echo e(request()->is('pertemuan2/crud-buku*') ? 'menu-open' : ''); ?>">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            CRUD BUKU
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('crud-buku.index')); ?>"
                                                class="nav-link <?php echo e(request()->routeIs('crud-buku.index') ? 'active' : ''); ?>">
                                                <i class="fas fa-list nav-icon"></i>
                                                <p>List Buku</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('crud-buku.create')); ?>"
                                                class="nav-link <?php echo e(request()->routeIs('crud-buku.create') ? 'active' : ''); ?>">
                                                <i class="fas fa-plus-circle nav-icon"></i>
                                                <p>Tambah Buku</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li data-pertemuan="3" class="nav-item has-treeview">
                            <a href="#" class="nav-link <?php echo e(request()->is('pertemuan3/*') ? 'active' : ''); ?>">
                                
                                <p>
                                    Pertemuan 3
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('pertemuan3.index')); ?>"
                                        class="nav-link <?php echo e(request()->routeIs('') ? 'active' : ''); ?>">
                                        <i class="far fa-circle nav-icon" style="font-size: 10px;"></i>\
                                        <p>Autentikasi (<strike>framework</strike>)</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                <?php echo $__env->yieldContent('title'); ?>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="pertemuan1">Home</a></li>
                                <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <div class="container-fluid">
                <?php echo $__env->yieldContent('alert'); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Mata Kuliah <b>Pemrograman Berbasis Kerangka Kerja (B)</b></strong>
            <div class="float-right d-none d-sm-inline-block">
                Tahun Pelajaran 2024-2025
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/js/demo.js"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH D:\UNI\SEM 5\PBKK\tugas_1\resources\views/layout/base.blade.php ENDPATH**/ ?>