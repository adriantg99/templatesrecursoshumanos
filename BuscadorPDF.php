
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/EstiloPDF.css">

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
        
      </div>
    </div>
  </div>
</nav>
<div class="col-12 py-5">
        
        <div class="col-12">
            <img class="img-fluid"  src="resources/header-ith-2020-45-aniv.png">
            
        </div>
</div>



<form action="PDF.php" autocomplete="off" method="POST">
<div class="card mx-auto" style="text-align: center; width: 50%">
<h3>Busque por departamento</h3>

<select name="opciones" id="opcion" class="form-select" aria-label="Default select example">
  <option selected>Escoja un departamento.</option>
  <option value="Ciencias Basicas">Ciencias Básicas</option>
  <option value="Ciencias Economico-Administrativas">Ciencias Administrativas</option>
  <option value="Sistemas y computacion">Sistemas y Computación</option>
  <option value="Metal-Mecanica">Metal-Mecánica</option>
  <option value="Industrial">Industrial</option>
  <option value="Electronica y Electrica">Eléctrica y Electrónica</option>
  <option value="Posgrado">Posgrado</option>
  <option value="Comunicación y Difusión">Comunicación y Difusión</option>
  <option value="Centro de Información">Centro de Información</option>
  <option value="Gestión y Comunicación">Gestión y Comunicación</option>
  <option value="Centro de Computo">Centro de Computo</option>
  <option value="Recursos Humanos">Recursos Humanos</option>
  <option value="Recursos Financieros">Recursos Financieros</option>
  <option value="Recursos Materiales">Recursos Materiales</option>
  <option value="Mantenimiento">Mantenimiento</option>

</select>

</div>

<br>

        <div class="autocompletar">
            <input type="text" name="BusquedaPDF" id="BusquedaPDF" placeholder="Escribe el nombre o RFC">
        </div> 
</br></br></br></br></br>

        <div class="float-right">   
            <div class="container">
                <button  class="boton" type="submit" name="pasarRFC" target="_blank">Imprimir datos individual</button>
            </div>
        </div>
        <br>

        <div class="float-right">   
            <div class="container">
                <button  class="boton" type="submit" name="pasarDatosDepa" target="_blank">Imprimir datos por departamentos</button>
            </div>
        </div>

</form>

<script src="js/default.js"></script>               

<div class="container mb-2" style=" height: 100px">

</div>
<div class="container mb-2" style=" height: 100px">

</div>
</br></br></br>

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