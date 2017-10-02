<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Administración - Daniel Gómez F1 Team</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">Bienvenido al panel de administración de Daniel Gómez F1 Team</h1>
        <p class="text-center">Por favor regístrese para poder comenzar</p>
      </div>
    </div>
    <?php include('includes/feedback.php') ?>
    <div class="container">
      <form class="login col-xs-12 col-md-6" action="<?php $_SERVER['PHP_SELF'] ?>?accion=check-login" method="POST" role="form">       
        <div class="form-group has-success">
          <label for="usuario" class="control-label">Usuario</label>
          <input type="email" name="email" class="form-control" id="usuario" placeholder="jmanzano2@gmail.com">
        </div>
        <div class="form-group has-success">
          <label for="contrasena" class="control-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="contrasena" placeholder="La contraseña que siempre usas en clase">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
    <footer class="footer navbar-fixed-bottom bg-success">
      <div class="container text-success">
        <h5 class="pull-left">Daniel Gómez Sánchez</h5>
        <h5 class="pull-right">S-27/A/16</h5>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>