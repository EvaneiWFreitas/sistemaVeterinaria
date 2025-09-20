
<?php
    global $URL;
    include ('../app/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $URL; ?>public/images/logo3.jpg">
    <title><?php echo APP_NAME ;?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/plugins/icheck-bootstrap/icheck-bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/dist/css/adminlte.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo $URL;?>"><b>SISTEMA DE </b>VETERINÁRIA</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <center>
                <img src="<?php echo $URL; ?>/public/images/logoVet.png" width="60%" alt="">
            </center>
            <p class="login-box-msg"><b>ENTRE COM SEUS DADOS</b></p>

            <form action="<?php echo $URL;?>/public/templeates/index3.html" method="post">
                <label for="">Email:</label>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <label for="">Senha:</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <a href="<?php echo $URL; ?>" class="btn btn-block btn-primary">
                    Login
                </a>
                <a href="<?php echo $URL; ?>" class="btn btn-block btn-danger">
                    Cancelar
                </a>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templeates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templeates/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templeates/dist/js/adminlte.js"></script>
</body>
</html>

