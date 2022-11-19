<?php
  include("include/bootstrap.php");
?>
<link rel="stylesheet" href="css/style.css">

<!-- Autor: Miguel Angel Ruiz Hernández -->
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h2>Regístrate</h2>
        <br>
        <form action="script/ejecutar_registro.php" method="post">
          <!-- Nombre input -->
          <div class="form-outline mb-4">
            <input type="text" id="nom" name="nom" class="form-control form-control-lg" />
            <label class="form-label" for="nom">Nombre</label>
          </div>

          <!-- Nombre input -->
          <div class="form-outline mb-4">
            <input type="text" id="user" name="user" class="form-control form-control-lg" />
            <label class="form-label" for="user">Usuario</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="correo" class="form-control form-control-lg" />
            <label class="form-label" for="email">Correo electrónico</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
            <label class="form-label" for="pass">Contraseña</label>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="confpass" name="confpass" class="form-control form-control-lg" />
            <label class="form-label" for="confpass">Confirmar contraseña</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Acepto los términos y condiciones </label>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block"  style="background-color: #1266F1">Registrarme</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">Ó</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #2F2E41" href="login.php"
            role="button">Iniciar sesión
          </a>

        </form>
      </div>
    </div>
  </div>
</section>