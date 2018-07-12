<?php?>
<html lang="en" dir="ltr">
  <head>
    <title>Clientes</title>
     <meta charset="utf-8"><
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/assets/css/style.css">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-secondary bg-white fixed-top ">
      <div class="container">
        <a class="navbar-brand text-primary" href="index.php">Instituto de salud publica</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-primary" href="index.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="clientes.php">clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="intranet.php">Intranet</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br/>
    <!--content-->
    <header class="bg-light text-dark" style="background-image: url('https://image.freepik.com/vector-gratis/fondo-luminoso-con-puntos_1055-3132.jpg')">
      <br/>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="https://previews.123rf.com/images/kchung/kchung1411/kchung141100097/33558807-vista-desde-arriba-del-lugar-elementos-de-trabajo-en-el-cuadro-blanco.jpg"
            with="500" height="600" scrolling="no" frameborder="no">
          </div>
          <div class="col-sm-6 text-justify bg-white">
            <h2>Registro de cliente</h2>
              <form action="/action_page.php">
                <div class="form-group text-justify">
                  <input type="run" class="form-control" id="run" placeholder="Run" name="run">
                </div>
                <div class="form-group text-justify">
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                </div>
                <div class="form-group text-justify">
                  <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
                </div>
                <div class="form-group text-justify">
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group text-justify">
                  <input type="text" class="form-control" id="number" placeholder="telefono" name="number">
                </div>
                <div class="form-group form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Acepto terminos y <a href="#">condiciones</a>
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Registar</button>
              </form>
              <p>ya tienes cuenta? <a class="text-primary" data-toggle="modal" data-target="#myModal">Login</a> aca
                <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="col">
                      <input class="form-control" type="email" name="username" placeholder="Email" required><br/>
                      <input class="form-control" type="password" name="password" placeholder="Password" required><br/>
                      <input class="btn btn-primary" type="submit" value="Login">
                    </div>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div></p>

          </div>
        </div>
      </div>

    </header>
    <!--Social-media-->
    <section class="py-5">
      <div class="container">
        <a href="#" class="btn azm-social azm-size-48 azm-r-square azm-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="btn azm-social azm-size-48 azm-r-square azm-google"><i class="fa fa-google"></i></a>
        <a href="https://github.com/boyarce" class="btn azm-social azm-size-48 azm-r-square azm-github"><i class="fa fa-github"></i></a>
        <a href="#" class="btn azm-social azm-size-48 azm-r-square azm-linux"><i class="fa fa-linux"></i></a>
        <a href="#" class="btn azm-social azm-size-48 azm-r-square azm-twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="btn azm-social azm-size-48 azm-r-square azm-youtube"><i class="fa fa-youtube"></i></a>
        <a href="#" class="btn azm-social azm-size-48 azm-r-square azm-instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </section>
<!--footer-page-->
    <footer class="py-5 bg-secondary">
      <div class="container">
        <a class="text-dark col-sm-1" href="#">inicio</a>
        <a class="text-dark col-sm-1" href="#">servicios</a>
        <a class="text-dark col-sm-1" href="#">clientes</a>
        <a class="text-dark col-sm-1" href="#">intranet</a>
        <a class="text-dark col-sm-1" href="#">politica de privacidad</a>
        <p class="text-white m-0 text-center">ISP &copy; 2018</p>
      </div>
  </body>
</html>
