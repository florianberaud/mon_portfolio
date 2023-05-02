<?php
require('../include/connect.php');
if (!isset($_SESSION['isUserLoggedIn'])){
 echo "<script>window.location.href='login.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BackOffice | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  florian beraud
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Mon Portfolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">florian beraud</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item menu-open">
 <a href="index.php" class="nav-link">
 <i class="nav-icon fas fa-tachometer-alt"></i>
 <p> navbar </p>
 </a> 
</li>

          <li class="nav-item menu-open">
 <a href="index.php" class="nav-link">
 <i class="nav-icon fas fa-tachometer-alt"></i>
 <p> A propos de moi </p>
 </a> 
</li>

<li class="nav-item menu-open">
 <a href="index.php" class="nav-link">
 <i class="nav-icon fas fa-tachometer-alt"></i>
 <p> projet </p>
 </a> 
</li>

<li class="nav-item menu-open">
 <a href="index.php" class="nav-link">
 <i class="nav-icon fas fa-tachometer-alt"></i>
 <p> Compétences </p>
 </a> 
</li>

<li class="nav-item menu-open">
 <a href="index.php" class="nav-link">
 <i class="nav-icon fas fa-tachometer-alt"></i>
 <p> contact </p>
 </a> 
</li>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            <li class="nav-item"><a class="nav-link" href="logout.php"> Lougout </a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!--Main content-->
    <?php
// connect to the database to get the PDO instance
$pdo = require '../include/connect.php';

// execute a query
$sql = 'SELECT * FROM navbar';
$statement = $pdo->query($sql);
$user_data = $statement->fetch(PDO::FETCH_ASSOC);
//echo $user_data['title'];
?>
<div class="card card-primary col-lg-12">
  <div class="card-header">
    <h3 class="card-title">Mise à jour navbar</h3>
  </div>
  <form action="../controler/update_navbar.php" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">prenom nom</label>
        <input type="text" value="<?=$user_data['text_nom'] ?>" class="form-control" name="text_nom" id="exampleInputEmail1" placeholder="Entrer le texte">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">A propos de moi</label>
        <input type="text"  value="<?=$user_data['text_apropos'] ?>"class="form-control" name="text_apropos" id="exampleInputEmail1" placeholder="Entrer le texte">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Compétences</label>
        <input type="text" value="<?=$user_data['text_competence'] ?>" class="form-control" name="text_competence" id="exampleInputEmail1" placeholder="Entrer le texte">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Projets</label>
        <input type="text" value="<?=$user_data['text_projet'] ?>" class="form-control"  name="text_projet" id="exampleInputEmail1" placeholder="Entrer le texte">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contact</label>
        <input type="text" value="<?=$user_data['text_contact'] ?>" class="form-control" name="text_contact" id="exampleInputEmail1" placeholder="Entrer le texte">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" name="update_navbar" class="btn btn-primary">Enregistrer</button>
    </div>
  </form>
</div>


<?php
    // execute a query
        $sql = 'SELECT * FROM a_propos_de_moi';
        $statement = $pdo->query($sql);
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);
        //echo $user_data['title'];
?>

<div class="card card-primary col-lg-12">
 <div class="card-header">
 <h3 class="card-title">Mise à jour a propos de moi </h3>
 </div>
 <form action="../controler/update_apropos.php" method="post">
 <div class="card-body">
 <div class="form-group">
 <label for="exampleInputEmail1">texte</label>
 <input type="text" value="<?=$user_data['text'] ?>" class="form-control" id="exampleInputEmail1" name="update_apropos" placeholder="Entrer le texte">
 </div>
 <div class="card-footer">
 <button type="submit" name="update_apropos.php" class="btn btn-primary">Enregistrer</button>
 </div>
 </form>
</div>



<?php
    // execute a query
        $sql = 'SELECT * FROM competences';
        $statement = $pdo->query($sql);
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);
        //echo $user_data['title'];
?>
<div class="card card-primary col-lg-12">
 <div class="card-header">
 <h3 class="card-title">Mise à jour mes Compétences</h3>
 </div>
 <form action="../controler/update_competence.php" method="post">
 <div class="card-body">
 <div class="form-group">
 <label for="exampleInputEmail1">HTML</label>
 <input type="text" value="<?=$user_data['html'] ?>" class="form-control" name="html" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">CSS</label>
 <input type="text" value="<?=$user_data['css'] ?>" class="form-control" name="css" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">PHP</label>
 <input type="text" value="<?=$user_data['php'] ?>" class="form-control" name="php" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Photoshop</label>
 <input type="text" value="<?=$user_data['photoshop'] ?>" class="form-control" name="photoshop" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Illustrator</label>
 <input type="text" value="<?=$user_data['illustrator'] ?>" class="form-control" name="illustrator" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="form-group">
 <label for="exampleInputPassword1">Première PRO</label>
 <input type="text" value="<?=$user_data['premiere_pro'] ?>" class="form-control" name="premiere_pro" id="exampleInputPassword1" placeholder="Password">
 </div>
 <div class="card-footer">
 <button type="submit"  name="update_competence" class="btn btn-primary">Enregistrer</button>
 </div>
 </form>
</div>



<div class="card card-primary col-lg-12">
 <div class="card-header">
 <h3 class="card-title">Mise à jour mes projets</h3>
 </div>
 <form>
 <div class="card-body">
 <div class="form-group">
 <label for="exampleInputEmail1">texte</label>
 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="form-group">
 <div class="input-group-append">
 <span class="input-group-text">Upload</span>
 </div>
 </div>
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Enregistrer</button>
 </div>
 </form>
</div>



<?php
    // execute a query
        $sql = 'SELECT * FROM me_contacter';
        $statement = $pdo->query($sql);
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);
        //echo $user_data['title'];
?>

<div class="card card-primary col-lg-12">
 <div class="card-header">
 <h3 class="card-title">Mise à jour me contacter</h3>
 </div>
 <form>
 <div class="card-body">
 <div class="form-group">
 <label for="exampleInputEmail1">Nom</label>
 <input type="email" value="<?=$user_data['text_nom'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Entrer le nom">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Prénom</label>
 <input type="email" value="<?=$user_data['text_prenom'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Entrer le prenom">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Email</label>
 <input type="email" value="<?=$user_data['text_email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Entrer email">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Message</label>
 <input type="email" value="<?=$user_data['text_message'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Entrer le texte">
 </div>
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Enregistrer</button>
 </div>
 </form>
</div>
    <!-- /.content-header -->

    
    <!-- /.content -->
  </div>
 
 <?php
 if(isset($_GET["competencesetting"])){
 ?>
 Compétences setting
 <?php } else { ?>
 ….
 <?php } ?>

 <?php
 if(isset($_GET["projetsetting"])){
 ?>
 Projet setting
 <?php } else { ?>
 ….
 <?php } ?>

 <?php
 if(isset($_GET["apropossetting"])){
 ?>
 A Propos setting
 <?php } else { ?>
 ….
 <?php } ?>

 <?php
 if(isset($_GET["contactsetting"])){
 ?>
 Contact setting
 <?php } else { ?>
 ….
 <?php } ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>