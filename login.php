<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesion</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.7.0.js"
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="icon" href="img/icon-pagina.ico" />
  <script src="js/login.js"></script>
</head>
  </head>
  <body>
    <br /><br />
    <section class="vh-100">
      <div class="container py-5">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="background-color: rgb(48, 48, 48)">
              <div
                class="row"
                style="
                  background-color: rgb(24, 24, 24);
                  border-radius: 1rem;
                  box-shadow: rgba(255, 255, 255, 0.35) 0px 5px 15px;
                "
              >
                <div
                  class="col-md-6 col-lg-5 d-none d-md-block"
                  style="
                    background-image: url(https://i.pinimg.com/736x/af/53/b4/af53b43cfc423044a20d22593b846269.jpg);
                    border-radius: 1em 0em 0em 1em;
                  "
                ></div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form method="post">
                      <div class="d-flex align-items-center">
                        <center>
                          <img src="../img/logo-login.png" alt="" width="60%" />
                        </center>
                      </div>

                      <h3 class="fw-normal mb-2 pb-2 text-xl-center">
                        Iniciar Sesión
                      </h3>
                      <?php
              include "php/conexion.php";
              ?> 
                      <div class="form-outline mb-4">
                        <label for="username" class="text">Usuario </label>
                        <input
                          class="form-control form-control-lg"
                          type="text"
                          id="usuario"
                          name="usuario"
                          placeholder="Ingrese su usuario"
                          maxlength="30"
                          required
                        />
                      </div>
                      <label for="username" class="text">Contraseña </label>
                      <div class="form-outline mb-4">
                        <input
                          class="form-control form-control-lg"
                          type="password"
                          id="contrasena"
                          name="contrasena"
                          placeholder="Ingrese su contraseña"
                          class="txt"
                          maxlength="30"
                          required
                        />
                      </div>
                      <div class="pt-1 mb-4 contenedor1">
                        <input
                          type="submit"
                          value="Ingresar"
                          class="btn"
                          name="btningresar"
                          href="index.html"
                        /><br />
                      </div>
                      <div class="contenedor1">
                        <a href="#" class="solucion"
                          >¿Olvidaste tu Contraseña?</a
                        ><br />
                        <a href="register.html" class="solucion">Registrate</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
