<?php  ?>
<head>
  <title>Inicio</title>
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
  <header class="bg-light text-dark" style="background-image: url('https://image.freepik.com/vector-gratis/fondo-luminoso-con-puntos_1055-3132.jpg')">
    <div class="container">
      <h2>Registro de Muestras</h2><br/>
      <div class="row">

        <div class="col-sm-3 col-sm-6 bg-success">
          <p>Codigo del Cliente: </p>
        </div>
        <div class="col-sm-3 col-sm-6 bg-info">
          <p>Codigo de la Muestra: </p>
        </div>
      </div>
    </div>
    <div class="container">

      <br/>
    <form class="" action="index.html" method="post">
      <table class="table table-ligth table-hover">
        <thead class="text-dark">
          <tr>
            <th>Tipo de analisis</th>
            <th>PPM de la muestra</th>
          </tr>
        </thead >
        <tbody class="text-dark">
          <tr>
            <td>Micotoxinas</td>
            <td>
              <input class="form-control" type="text" name="" value="">
            </td>
          </tr>
          <tr>
            <td>Metales pesados</td>
            <td>
              <input class="form-control" type="text" name="" value="">
            </td>
          </tr>
        </tbody>
      </table>
      <div class="text-justify">
        <button type="submit" class="btn btn-primary">Guardar analisis</button>
      </div>
    </form>
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
