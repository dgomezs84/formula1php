
<?php if ($_SESSION['permiso'] == 1): ?>

    <!DOCTYPE html>
    <html lang="es">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Administración - Daniel Gómez F1 Team</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
        <header>
          <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Daniel Gómez F1 Team</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navgar-left">
                  <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pilotos">Pilotos</a></li>
                  <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=escuderias">Escuderías</a></li>
                  <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=circuitos">Circuitos</a></li>
                  <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=noticias">Noticias</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><p class="navbar-text">Bienvenido USUARIO</p></li>
                  <li><button type="button" class="btn btn-default navbar-btn">Cerrar sesión</button></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            
          </nav>

        </header>

<?php endif; ?>        