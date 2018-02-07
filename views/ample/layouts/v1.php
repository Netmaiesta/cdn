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

          <div class="row bg-title">

            <!-- .page title -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title"> Title </h4> </div>
            <!-- /.page title -->

            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Here</li>
              </ol>
            </div>
            <!-- /.breadcrumb -->
          </div>

          <!-- .row -->
          <div class="row ">
            <div class="col-md-12">
              <div class="white-box">
                <h3 class="box-title">
                  Now working on
                </h3>
                  <a href="Sample">
                    <code>Simple</code>
                  </a>
              </div>
            </div>
          </div>
          <!-- .row -->

          <div class="row">
              <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="white-box">
                      <h3 class="box-title">New Sample Sample</h3>
                      <ul class="list-inline two-part">
                          <li><i class="icon-people text-info"></i></li>
                          <li class="text-right"><span class="counter">10</span></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="white-box">
                      <h3 class="box-title">Change Sample</h3>
                      <ul class="list-inline two-part">
                          <li><i class="fa fa-pencil text-purple"></i></li>
                          <li class="text-right"><span class="counter">20</span></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="white-box">
                      <h3 class="box-title">Sample Read</h3>
                      <ul class="list-inline two-part">
                          <li><i class="fa fa-eye text-danger"></i></li>
                          <li class="text-right"><span class="">20</span></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="white-box">
                      <h3 class="box-title">Future Sample</h3>
                      <ul class="list-inline two-part">
                          <li><i class="fa fa-bullhorn text-success"></i></li>
                          <li class="text-right"><span class="">20</span></li>
                      </ul>
                  </div>
              </div>
          </div>
          <!-- .row -->



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
