<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" type="image/png" sizes="16x16" href="./">
  <title>VIASL WMS | Web Management System</title>

  <?php include('../incl/styles.php'); ?>

  <style media="screen"> .small-box-shadow {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)} </style>
</head>

<body class="fix-header">
  <!-- ============================================================== -->
  <!-- Preloader -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Wrapper -->
  <!-- ============================================================== -->
  <div id="wrapper">

    <?php include('../incl/nav-bar-v1.php'); ?>
    <?php include('../incl/left-sidebar-v1.php'); ?>

    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">

        <!-- @yield('pg-content') -->

      </div>
      <!-- /.container-fluid -->
      <footer class="footer text-center small-box-shadow"> 2018 &copy; Netmaista Pvt Ltd </footer>
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

  <?php include('../incl/scripts.php'); ?>

</body>

</html>
