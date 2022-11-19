<?php
    include("bootstrap.php");

    // session_start();
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="img/mi-logo.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="admin.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="clase2/cal1.php">Clase 2 Calculadora</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="clase2/contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="clase2/Ejemplo_get.php">Ejemplo_get</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="clase2/form_base/form1.php">Formulario</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="index2.php">Ver Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php">Agregar producto </a>
        </li> -->
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-4" href="#">
        <i class="fas fa-shopping-cart"></i>
        <span class="badge rounded-pill badge-notification bg-danger">1</span>
      </a>

      <!-- Right elements -->
      <a class="me-4 text-white">Bienvenido <?php echo $_SESSION['username'] ?></a>
      <a class="me-4 text-white" href="script/desconectar.php">Logout</a>
    </div>

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->