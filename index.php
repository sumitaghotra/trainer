<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trainer Management System</title>
	<link rel="shortcut icon" href="Images/Logo.jpeg">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">

body {
	background-image: url(Images/Background.jpeg);
 background-repeat: no-repeat;
  background-size: cover;
  <!--background-size: 1280px 610px;-->
}

img {
  border: 1px solid #ddd;
  border-radius: 50%;
  padding: 0px;
  width: 45px;
}
</style></head>
  <body class="login-page">
  
    <div class="login-box">
      <div class="login-logo">
        <a href=""><img class="img" src="Images/Logo.jpeg"><b style="-webkit-text-fill-color: black;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: white;">Men’s boot camp co.</b></img></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><b>Sign in to start your session</b></p>
        <form action="login_check.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
                                    
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        

        <a href="#">I forgot my password</a><br>
        <a href="register.php" class="text-center">Register a new membership</a><br>
		<a href="Trainer_login.php" class="text-center">Login With Trainer</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>