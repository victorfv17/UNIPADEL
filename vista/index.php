<?php
    include_once "../modelo/conexionBD.php";

    $db = new Database();

		$query = "SELECT * FROM `UsuarioRegistrado`";
		$result = $db->consulta($query);

		$row = $result->fetch_array(MYSQLI_NUM);
		$fir = $row[0];
    echo $fir;
		$result->free();
		$db->desconectar();

 ?>


<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="estilos/index_style.css">

    <title>UNIPADEL</title>

  </head>
  <body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">UNIPADEL</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Reservas<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Campeonatos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Partidos</a>
      </li>
    </ul>

  </div>
</nav>
    <!-- /Header -->

    <!-- Formulario -->
             <form id="registro" name="reg" action='../modelo/conexionBD.php' method='POST'>

                  <!-- Botones -->
                  <div class="row">

                      <div class="col-xs-6 col-sm-8 col-md-8">
                          <button type="submit" class="btn-login" name='accion' value='nombre'>hola</button>
                      </div>

                  </div>
              </form>

    <!-- Cards -->
    <div id="noticias" class="container">
<div class="row justify-content-md-center">
  <div class="card col-sm-12 col-md-8 col-lg-5 col-xl-3" >
    <img class="card-img-top" src="../assets/padel1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">IV Campeonato</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing, elit facilisi fusce varius sodales,
        aenean facilisis aliquet condimentum praesent.</p>
        <button type="button" class="btn btn-lg btn-block btn-light">Inscribirse</button>
    </div>
  </div>

  <div class="card col-sm-12 col-md-8 col-lg-5 col-xl-3">
    <img class="card-img-top" src="../assets/padel1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nuevos horarios de pistas</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing, elit facilisi fusce varius sodales,
        aenean facilisis aliquet condimentum praesent. Lorem ipsum dolor sit amet consectetur adipiscing.Lorem ipsum dolor sit amet consectetur adipiscing.</p>
        <button type="button" class="btn btn-lg btn-block btn-light">Consultar horarios</button>
    </div>
  </div>

  <div class="card col-sm-12 col-md-8 col-lg-5 col-xl-3">
    <img class="card-img-top" src="../assets/padel1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Abrimos nuevo centro de padel</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing, elit facilisi fusce varius sodales,
        aenean facilisis aliquet condimentum praesent.</p>
        <button type="button" class="btn btn-lg btn-block btn-light">+ Informacion</button>
    </div>
  </div>

</div>
</div>
    <!-- /Cards -->

    <!-- Pagination -->
    <nav id="paginas">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /Pagination -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
