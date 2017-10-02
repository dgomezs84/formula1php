
<?php if ($_SESSION['permiso'] == 1): ?>

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
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pilotos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-crear-pilotos">Crear</a></li>
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-modificar-pilotos">Modificar</a></li>
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-eliminar-pilotos">Eliminar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escuderías <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-modificar-escuderias">Modificar</a></li>
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-eliminar-escuderias">Eliminar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Circuitos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-modificar-circuitos">Modificar</a></li>
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-eliminar-circuitos">Eliminar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Noticias <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-crear-noticias">Crear</a></li>
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-modificar-noticias">Modificar</a></li>
                      <li><a href="<?php $_SERVER['PHP_SELF'] ?>?accion=pagina-eliminar-noticias">Eliminar</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php $_SERVER['PHP_SELF'] ?>" class="btn btn-md navbar-btn">Cerrar Sesión</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            
          </nav>

        </header>

<?php endif; ?>        