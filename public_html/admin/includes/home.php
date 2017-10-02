  
<?php if ($_SESSION['permiso'] == 1): ?>

      <main>
        <div class="container-fluid bg-success">
          <div class="page-header text-success text-center">
            <h1>Bienvenido <small><?php echo $_SESSION['email'] ?></small> al panel de administración</h1>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">     


          <?php (include('feedback_cookie.php')) ?>      
            <p class="text-success">Por favor selecciona en el menú qué si quieres modificar, añadir o eliminar Pilotos, Escuderías, Circuitos o Noticias.</p>
          </div>
        </div>
      </main>


 <?php endif; ?> 