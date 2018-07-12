<?php  include_once "model/connection/conecctionBD.php"?>
<html lang="en" dir="ltr">
  <head>
    <title>Clientes</title>
     <meta charset="utf-8">
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
              <a class="nav-link text-primary" href="clientes.php">Clientes</a>
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
            <img src="https://st3.depositphotos.com/1000975/17415/i/1600/depositphotos_174152302-stock-photo-doctor-working-with-blood-samples.jpg"
            with="500" height="600" scrolling="no" frameborder="no">
          </div>
          <div class="col-sm-6 text-justify bg-white">
            <h2>Recepcion de muestra</h2>
              <form action="/action_page.php" id="formMuestras">
                <div class="form-group text-justify">
                  <input type="text" class="form-control" id="codigoCliente"  placeholder="Codigo Cliente" name="codigoCliente">
                </div>
				<div class="form-group text-justify">
                  <input type="text" class="form-control" id="rutCliente"  placeholder="Rut Cliente" name="rutCliente">
                </div>
                <div class="form-group text-justify">
                  <input type="text" class="form-control" id="nombreCliente" placeholder="Nombre Cliente" name="nombreCliente">
                </div>
                <label for="fechaRecepcion">Fecha de recepcion </label>
                 <input type="date" name="fechaRecepcion" id="fechaRecepcion">
                 <br></br>
                <div class="form-group text-justify">
                  <input type="text" class="form-control" id="temperaturaMuestra" placeholder="Temperatura muestra" name="temperaturaMuestra">
                </div>
                <div class="form-group text-justify">
                  <input type="text" class="form-control" id="cantidadMuestra" placeholder="Cantidad de muestra" name="cantidadMuestra">
                </div>
                <label for="tipoUsuario" id="tipoUsuario"> Tipo de analisis a realizar </label>
                            <?= $usuario->selectTipoUsuario(); ?><br></br>
                            <div >
                <button type="submit" id="btn_agregar_analisis" class="btn btn-primary">Agregar</button>
				
                <button type="submit" class="btn btn-primary" id="btn_guarda_muestra" >Guardar</button>
              </form>
			  <div id="respuesta"></div>
              

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
