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
        <h2>Inicio de sesión</h2>
        <br>
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="correo" name="correo" class="form-control form-control-lg" />
            <label class="form-label" for="correo">Correo electrónico</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
            <label class="form-label" for="pass">Contraseña</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Recuérdame </label>
            </div>
            <a href="#!">¿Olvidaste la contraseña?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block"  style="background-color: #1266F1">Iniciar sesión</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">Ó</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #2F2E41" href="register.php"
            role="button">Registro
          </a>

        </form>
      </div>
    </div>
  </div>
</section>