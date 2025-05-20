<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Clientes</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <header class="navbar">
    <div class="logo">QuintaViva</div>
    <nav class="menu">
      <a href="#">Quintas</a>
      <a href="#">Sobre nosotros</a>
      <a href="#" class="active">Admin</a>
    </nav>
    <div class="user-info">
      <span><strong>Esteban Solo</strong></span>
      <a href="#">Editar info</a> |
      <a href="#">Cerrar sesión</a>
    </div>
  </header>

  <main class="contenido">
    <div class="titulo-seccion">
      <button class="back-btn">←</button>
      <h1>CRUD Clientes</h1>
    </div>

    <table class="tabla-clientes">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre(s)</th>
          <th>Apellidos</th>
          <th>Edad</th>
          <th>Correo electrónico</th>
          <th>Teléfono</th>
          <th>Acciones (CRUD)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td><td>José Carlos</td><td>Sánchez Alvarado</td><td>34 años</td>
          <td>josecarlos.sa@gmail.com</td><td>818-111-8888</td>
          <td><a href="#">Eliminar</a> / <a href="#">Ver</a></td>
        </tr>
        <tr>
          <td>2</td><td>Fernanda</td><td>López Ramírez</td><td>29 años</td>
          <td>fer.lopez@outlook.com</td><td>555-222-3333</td>
          <td><a href="#">Eliminar</a> / <a href="#">Ver</a></td>
        </tr>
        <tr>
          <td>3</td><td>Mario Andrés</td><td>García Torres</td><td>41 años</td>
          <td>mario.garcia@mail.com</td><td>664-123-4567</td>
          <td><a href="#">Eliminar</a> / <a href="#">Ver</a></td>
        </tr>
        <tr>
          <td>4</td><td>Valeria</td><td>Mendoza Pérez</td><td>37 años</td>
          <td>valeriomendoza_pz@email.com</td><td>442-999-8877</td>
          <td><a href="#">Eliminar</a> / <a href="#">Ver</a></td>
        </tr>
        <tr>
          <td>5</td><td>Juan Pablo</td><td>Hernández Cruz</td><td>26 años</td>
          <td>jph256@gmail.com</td><td>33-4444-5555</td>
          <td><a href="#">Eliminar</a> / <a href="#">Ver</a></td>
        </tr>
      </tbody>
    </table>

    <div class="paginacion">
      ← <span class="pagina-activa">1</span> 2 3 →
    </div>

    <div class="boton-centrado">
      <button class="btn-anadir">Añadir</button>
    </div>
  </main>
</body>
</html>
