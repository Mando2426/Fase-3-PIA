<?php include("P(20)_Logica.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ver Cliente</title>
  <link rel="stylesheet" href="P(20).css" />
</head>
<body>
  
  <nav class="navbar navbar-expand-lg">
        <div class="logo">
            <a href="index.html">
            <img src="../img/logo.png" alt="Logo QuintaViva" style="cursor: pointer;">
            </a>
        </div>
    <div class="container">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../Inicio/quintas.html">Quintas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Inicio/nosotros.html">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Reservar</a>
          </li>
        </ul>
        <div>
          <a class="nav-link d-inline" href="iniciar.html">Iniciar sesión</a>
          <span>|</span>
          <a class="nav-link d-inline" href="registro.html">Registrarse</a>
        </div>
      </div>
    </div>
  </nav>

  <main class="cliente-ver">
    <div class="info">
      <p>E-mail: <?php echo $cliente['email']; ?></p>
      <p>Nombre(s): <?php echo $cliente['nombre']; ?></p>
      <p>Apellidos: <?php echo $cliente['apellidos']; ?></p>
      <p>Fecha de nacimiento: <?php echo $cliente['nacimiento']; ?></p>
      <p>Teléfono: <?php echo $cliente['telefono']; ?></p>
      <form action="ver_historial.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id_cliente; ?>">
        <button class="btn-ver">Ver historial de renta</button>
      </form>
    </div>
  </main>
</body>
</html>
