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

  <section id="wrapper" class="login-register">

    <style media="screen">
      .bg-over {
        background: rgba(1,1,1,0.6);
        width: 100%;
        height: 100%;
        position: absolute;
        transition: ease all .7s;
      }
      .bg-over:hover {
        background: rgba(255,255,255,0);
      }
    </style>

    <div class="bg-over">

    </div>

    <div class="login-box login-sidebar small-box-shadow" style="background:#f2f2f2">
      <div class="white-box" style="background:#f2f2f2">

        <form method="post" class="form-horizontal form-material" id="loginform" action="">

          <a href="javascript:void(0)" class="text-center db animated bounceInLeft"><img src="https://placehold.it/50x50" alt="Home" /><br/><img src="https://placehold.it/50x50" alt="Home" /></a>

          <div class="form-group m-t-40">
            <div class="col-xs-12">
              <input autocomplete="off" value="" name="user-email" class="form-control" type="email" required="" placeholder="Email">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input autocomplete="off" name="user-password" class="form-control" type="password" required="" placeholder="Password">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <a href="#forgot" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
          </div>
          <div class="form-group text-center m-t-20 animated bounceInDown">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
            </div>
          </div>


          <div class="row hidden">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
              <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
            </div>
          </div>
          <div class="form-group m-b-0 hidden">
            <div class="col-sm-12 text-center">
              <p>Not a member ? <a href="register2.html" class="text-primary m-l-5"><b>Sign Up </b></a></p>
            </div>
          </div>
        </form>

        <form method="POST" class="form-horizontal" id="recoverform" action="">

          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Recover Password</h3>
              <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
          </div>
          <div class="">
            <div class="col-xs-12">
              <input autocomplete="off" value="" name="user-fr-email" class="form-control" type="email" required="" placeholder="Email">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </section>


  <?php include('../incl/scripts.php'); ?>

</body>

</html>
