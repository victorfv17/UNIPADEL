<?php

  include_once "../modelo/conexionBD.php";

  $db = new Database();

  $query = "select * FROM `Enfrentamiento` JOIN `Pareja` ON ParejaidPareja=idPareja";
  $result = $db->consulta($query);

  /*$arrayEmpleados = array();
  while ($row_usuario = mysqli_fetch_assoc($result))
    $arrayEmpleados[] = $row_usuario;
    */

  $numEnfren = mysqli_num_rows($result);
/*  if ($numEnfren > 0) {
     while ($rowEnfren = mysqli_fetch_assoc($result)) {
        echo "Capitan: ".$rowEnfren['capitan'];
        echo "Deportista: ".$rowEnfren['deportista'];
     }
  }
  */

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

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Campeonatos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Crear campeonato</a>
            <a class="dropdown-item" href="#">Enfrentamientos</a>
            <a class="dropdown-item" href="#">Resultados</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Partidos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="promocionar_partidos.html">Promocionar partido</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Pistas</a>
        </li>

    </div>
  </nav>
  <!-- /Header -->
  <!-- Enfrentamientos -->
  <div class="table-responsive">
    <table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <?php foreach ($result as $rowEnfren): ?>
          <th scope="col"> <?= $rowEnfren['idPareja']?> </th>
        <?php endforeach; ?>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($result as $rowEnfren): ?>
        <tr>

          <td>
            <?= $rowEnfren['idPareja']?>
          </td>
          <td>
            <?= $rowEnfren['capitan']?>
          </br>
            <?= $rowEnfren['deportista'] ?>
          </td>
          <td class="modificable">
            4
          </td>
          <td class="modificable">
            <?= $rowEnfren['resultado']?>
          </td>
          <td class="modificable">
            <?= $rowEnfren['resultado']?>
          </td>
        <td>
						<a class="add" title="Add" data-toggle="tooltip">Add</a>
            <a class="edit" title="Edit" data-toggle="tooltip">Edit</a>
        </td>

        </tr>
      <?php endforeach; ?>
    </tbody>

    </table>
  </div>
    <!-- /Enfrentamientos -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Edit row on edit button click td:not(:last-of-type):not(:first-of-type)
	$(document).on("click", ".edit", function(){
        $(this).parents("tr").find("td:not(:nth-child(1)):not(:nth-child(2)):not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</body>

</html>

<?php

  $db->desconectar();

 ?>
