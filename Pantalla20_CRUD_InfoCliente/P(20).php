<?php include("P(20)_Logica.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ver Cliente</title>
  <link rel="stylesheet" href="P(20).css" />
</head>
<body>
  
  <header>
    <div class="logo">
      <img src="img/Logo.png" alt="">
      <strong>QuintaViva</strong>
    </div>
    <div class="user-actions">
      <a href="#">Iniciar sesión</a> | 
      <a href="#">Registrarse</a> 
      <span>👤</span>
    </div>
  </header>

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
