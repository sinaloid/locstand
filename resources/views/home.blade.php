<!DOCTYPE html>
<html><head>
  <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Tableau de bord</title>
  <!-- Tell the browser to be responsive to screen width --><meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome --><link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"><!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 --><link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck --><link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"><!-- JQVMap --><link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"><!-- Theme style --><link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars --><link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker --><link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"><!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"><!-- Google Font:Source Sans Pro -->
</head>  
 

   <body>
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4"><!-- Brand Logo --><a href="index3.html" class="brand-link"><img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"><span class="brand-text font-weight-light">Admin</span></a><!-- Sidebar --><div class="sidebar"><!-- Sidebar user panel(optional) --><!-- Sidebar Menu --><nav class="mt-2"><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"><!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library --><li class="nav-item has-treeview menu-open"><a href="#" class="nav-link active"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard </p></a>
    <nav>

        @extends('layouts.app')


        <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
          <p>Gestion des utilisateurs </p></a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link"><p>Liste des utilisateurs<span class="badge badge-info right">3</span></p></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><p>Ajouter un utilisateur</p></a>
            </li>

   
            <li class="nav-item">
              <a href="#" class="nav-link"><p>Modifier un utilisateur </p></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><p>supprimer un utilisateur </p></a>
            </li>
            </ul></li>
            
        
        
        <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
          <p>Gestion des artisans </p></a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link"><p>Liste des artisans</p></a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link"><p>Ajouter un artisan</p></a>
              </li>
    
              <li class="nav-item">
                  <a href="#" class="nav-link"><p>Modifier un artisan </p></a>
              </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><p>supprimer un artisan </p></a>
                </li>
              </ul></li>


              <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
                <p>Gestion des stands </p></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Liste des stands</p></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Ajouter un stand</p></a>
                    </li>
          
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Modifier un stand </p></a>
                    </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><p>supprimer un stand </p></a>
                      </li>
                    </ul></li>




                    <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
                      <p>Liste des pavillons <span class="badge badge-info right">5</span> </p></a>
                        <ul class="nav nav-treeview">
                          
                      
                          </ul></li>
         
              
              </aside>
                   
              
                   <!-- Content Wrapper. Contains page content --><div class="content-wrapper">
                    
                    <!-- Content Header(Page header) --><div class="content-header"><div class="container-fluid"><div class="row mb-2">
                       
                        <div class="col-sm-6">
                       
                            <h1 class="m-0 text-dark">Tableau de bord</h1></div><!-- /.col --><div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="#">Accueil</a></li><li class="breadcrumb-item active">Tableau de bord</li></ol></div><!-- /.col --></div><!-- /.row --></div><!-- /.container-fluid --></div><!-- /.content-header --><!-- Main content --><section class="content"><div class="container-fluid"><!-- Small boxes(Stat box) -->
                   
                        <div class="row"><div class="col-lg-3 col-6"><!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>150</h3><p>Artisans</p>
                        </div>
                        <div class="icon"><i class="ion ion-hammer"></i></div>
                        </div>
                    </div>
                      <!-- ./col --><div class="col-lg-3 col-6"><!-- small box --><div class="small-box bg-success"><div class="inner"><h3>53/700</h3><p>Stands occupés</p></div><div class="icon"><i class="ion ion-stats-bars"></i></div></div></div><!-- ./col --><div class="col-lg-3 col-6"><!-- small box --><div class="small-box bg-warning"><div class="inner"><h3>3 </h3><p>Utilisateur</p></div><div class="icon"><i class="ion ion-person-add"></i></div></div></div><!-- ./col --><div class="col-lg-3 col-6"><!-- small box --></div><!-- ./col --></div>
                      <!-- /.card-header --><div class="card-body"><div class="tab-content p-0"><!-- Morris chart - Sales --><div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas></div><div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas></div></div></div><!-- /.card-body --></div><!-- /.card -->
                      <!-- DIRECT CHAT --><div class="card direct-chat direct-chat-primary">
                  <!-- /.content-wrapper --><footer class="main-footer"><strong>Copyright &copy; <a href="http://www.bootstrapmb.com/">Admin</a>.</strong>All rights reserved. <div class="float-right d-none d-sm-inline-block"> </div></footer><!-- Control Sidebar --><aside class="control-sidebar control-sidebar-dark"><!-- Control sidebar content goes here --></aside><!-- /.control-sidebar --></div><!-- ./wrapper --><!-- jQuery --><script src="plugins/jquery/jquery.min.js"></script><!-- jQuery UI 1.11.4 --><script src="plugins/jquery-ui/jquery-ui.min.js"></script><!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --><script>$.widget.bridge('uibutton',$.ui.button) </script><!-- Bootstrap 4 --><script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- ChartJS --><script src="plugins/chart.js/Chart.min.js"></script><!-- Sparkline --><script src="plugins/sparklines/sparkline.js"></script><!-- JQVMap --><script src="plugins/jqvmap/jquery.vmap.min.js"></script><script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script><!-- jQuery Knob Chart --><script src="plugins/jquery-knob/jquery.knob.min.js"></script><!-- daterangepicker --><script src="plugins/moment/moment.min.js"></script><script src="plugins/daterangepicker/daterangepicker.js"></script><!-- Tempusdominus Bootstrap 4 --><script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script><!-- Summernote --><script src="plugins/summernote/summernote-bs4.min.js"></script><!-- overlayScrollbars --><script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script><!-- AdminLTE App --><script src="dist/js/adminlte.js"></script><!-- AdminLTE dashboard demo(This is only for demo purposes) --><script src="dist/js/pages/dashboard.js"></script><!-- AdminLTE for demo purposes --><script src="dist/js/demo.js"></script></body></html>