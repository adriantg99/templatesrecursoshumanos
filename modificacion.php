<?php include("db.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	

	<title>Recursos Humanos</title>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: orangered;">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Recursos Humanos</a>
    <button class="navbar-toggler" type="button" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="Pagina_Inicio_Academica/index.html">Inicio</a>
        <a class="nav-link active" href="registro.php">Registro</a>
        <a class="nav-link active" href="modificacion.php">Modificación</a>
        <a class="nav-link active" href="BuscadorPDF.php">Impresión PDF</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="col-12 py-5">
        
        <div class="col-12">
            <img class="img-fluid"  src="resources/header-ith-2020-45-aniv.png">
            
        </div>
</div>
<h2 align="center">Buscador modificacion </h2></br></br></br>

<form action="functioncalling.php" method="POST" autocomplete="off">
        <div class="float-right">   
            <div class="container">
                <input type="text" maxlength="13" name="BuscarRFC" maxlength="13" required placeholder="Buscar RFC" class="form-control"  >
                <button  class="boton" type="submit" name="buscar">BUSCAR</button>
            </div>
        </div>
</form>

                   

<div class="container mb-2" style=" height: 100px">

</div>


	<footer class="bg-secondary text-white" >
    <div class="container-fluid" >
      <div class="row">
        <div  class="col-md-8" id="footer">
          <h6>Proyecto Recursos Humanos</h6>
          <p>Esta página es un módulo parte de un proyecto por estudiantes de ingenieria en sistemas computacionales del Tecnológico Nacional de México Campus Hermosillo</p>
        </div>
        <div class="col-md-4">
        <img src="resources/1200px-SEP_Logo_2019.svg.png" alt="" style="height: 78px; width: 300px; float: right;">

          <h6>Contacto</h6>
          <p>Nombre Apellido
          <br/>correo@gmail.com
          <br/>Numero de Telefono
          </p>

          </div>
          </div>
          <div class=" text-center">© 2021 Recursos Humanos. Pagina Creada para el ITH
              
        </div>
        </div>
        </footer>

</body>
</html>



