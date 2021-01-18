<?php 
  session_start();
  
  require_once "php/conexion.php";
  $conexion=conexion();
  $sql1="SELECT * from doctores";
  $sql2="SELECT * from doctores WHERE especialidad='anestesiologo'";
  $sql3="SELECT * from enfermero";

  $result1=$conexion->query($sql1);
  $result2=$conexion->query($sql2);
  $result2=$conexion->query($sql3);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

    <title>Altas cirugía</title>
</head>
<body>

<!-- Inicio Body-->

<body>


	<div class="container">

    <div id="buscador">
    <?php 
     
      require_once "componentes/buscador.php";

    ?></div>
		<div id="tabla">
    <?php 
      require_once "componentes/tabla.php";
      require_once "componentes/buscador.php";

    ?>

 </div>
	</div>


<!-- Fin Body-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>








