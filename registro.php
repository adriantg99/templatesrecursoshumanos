<?php include("db.php");?>
 

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

<!-- DATOS PERSONALES            -->


<div class="card mt-5 mx-auto " style="width: 80%;">
    <div class="card-body">
        <div class="row mt-2">
            <h1> Datos Personales</h1>
        </div>
    
        <div class="row mt-5">
    
            
            <div class="col-md-7">

            <!-- FORM PARA METER DATOS-->
            <form action="save_task.php"  method="POST"> 
                    <div class="form-group mt-2">
                        <input type="text" name="nombre" required placeholder="Nombre" class="form-control">
                
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" name="apellidoPaterno" required placeholder="Apellido Paterno" class="form-control">
                
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" class="form-control">
                
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" name="correoInstitucional" required placeholder="Correo Institucional" class="form-control">
                
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" name="CorreoPersonal" placeholder="Correo Personal" class="form-control">
                
                    </div>
    
              
          
    
    
    
            </div>
            <div class="col-md-5">
                    <div class="form-group mt-2">
                        <input type="text" maxlength="13" name="RFC" required placeholder="RFC" class="form-control">
                
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" maxlength="18" name="Curp" required placeholder="CURP" class="form-control">
                
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" maxlength="13" name="telefono" placeholder="Telefono" class="form-control">
                
                    </div>

                    <div class="form-group mt-2">
                        <label for="exampleFormControlSelect1"> Fecha de Nacimiento</label>
                        <input type="date" id="start" name="fechaNacimiento" value="" style="float: right">
                
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col"> <label for="">Genero</label></div>
                            <div class="col">  <select class="form-control" id="exampleFormControlSelect1" name="Genero">
                              <option>Masculino</option>
                              <option>Femenino</option>
                              <option>Otro</option>
                              
                            </select></div>
                        
                        </div>
                   
                   
                
                    </div>
    
                    <!-- BOTON QUE MANDA A LLAMAR AL PHP GUARDADO DE DATOS-->
                   <!-- <button type="submit" class="btn btn-primary" style="float: right;" name="save_task">Ingresar Datos</button>-->
            <!--    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Ingresar datos">-->
            </div>
                    
                
    
        </div>
    
    </div>

</div>


<!-- Datos Institucionales-->
<div class="card mt-5 mx-auto" style="width:80%">

    <div class="card-body">
        <div class="row mt-2">
            <h1> Datos Institucionales</h1>
        </div>

        <!--FORM PARA METER DATOS PHP-->
         <div class="row mt-5">
    
            
            <div class="col">

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Numero de Tarjeta</label>
                            <input type="text" maxlength="30" name="NumeroTarjeta" required placeholder="####  ####  ####" class="form-control">
                    
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        

                            <label for="exampleFormControlSelect1" >Tipo de Empleado</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="Genero">
                              <option>Administrativo</option>
                              <option>Docente</option>
                              
                              
                            </select></div>
                        
                        
                            


                    
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group mt-2">
                            <label for="exampleFormControlSelect1">Departamento de Adscripcion</label>
                           <!-- <input type="text" maxlength="30" name="DepartamentoAdscripcion" required placeholder="Departamente de Adscripcion" class="form-control"> -->
                            <select class="form-control" id="exampleFormControlSelect1" name="DepartamentoAdscripcion">
                              <option>Ciencias Basicas</option>
                              <option>Ciencias Economico-Administrativas</option>
                              <option>Sistemas y Computacion</option>
                              <option>Metal-Mecanica</option>
                              <option>Industrial</option>
                              <option>Electronica y Electrica</option>
                              <option>Posgrado</option>
                              <option>Comunicación y Difusión</option>
                              <option>Centro de Información</option>
                              <option>Gestión y Comunicación</option>
                              <option>Centro de Computo</option>
                              <option>Recursos Humanos</option>
                              <option>Recursos Financieros</option>
                              <option>Recursos Materiales</option>
                              <option>Mantenimiento</option>
                            </select>
                    
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-2">
                            <label for="exampleFormControlSelect1">Departamentos Perteneciente</label>
                           <!-- <input type="text" maxlength="100" name="DepartamentoAdscripcion2" placeholder="Departamentos Perteneciente" class="form-control"> -->
                            <select class="form-control" id="exampleFormControlSelect1" name="DepartamentoAdscripcion2">
                                <option>Ciencias Basicas</option>
                              <option>Ciencias Economico-Administrativas</option>
                              <option>Sistemas y Computacion</option>
                              <option>Metal-Mecanica</option>
                              <option>Industrial</option>
                              <option>Electronica y Electrica</option>
                              <option>Posgrado</option>
                              <option>Comunicación y Difusión</option>
                              <option>Centro de Información</option>
                              <option>Gestión y Comunicación</option>
                              <option>Centro de Computo</option>
                              <option>Recursos Humanos</option>
                              <option>Recursos Financieros</option>
                              <option>Recursos Materiales</option>
                              <option>Mantenimiento</option>
                            </select>
                          </div>

                    </div>


                </div>                
                    
                    <div class="form-group mt-2">
                    <label for="exampleFormControlSelect1">Puesto Actual </label>
                    <select class="form-control" id="exampleFormControlSelect1" name="Puestos">
                            <option>Subdirector</option>
                            <option>Presidente de Academia</option>
                            <option>Secretario de Academia</option>
                            <option>Miembro de Consejo Academico</option>
                            <option>Coordinador de Posgrado</option>
                            <option>Coordinador de Carrera</option>
                            <option>Jefe de Proyecto de Vinculacion</option>
                            <option>Coordinador de Residencias</option>
                            <option>Coordinadora Institucional de Tutorias</option>
                            <option>Coordinador Institucional de Idiomas</option>
                            <option>Representantes Institucional PRODEP</option>
                            <option>Coordinador CIIE</option>
                            <option>Jefe de Departamento Academico</option>
                            <option>Jefe de Oficina</option>
                            <option>Jefe de Laboratorio o Taller</option>
                            <option>Auxiliar de Laboratorio o Taller</option>
                            <option>Jefe de Proyectos de Docencia</option>
                            <option>Jefe de Proyectos de Investigacion</option>
                    </select>
                
                    </div>


                   

                   
                    <div class="form-group mt-2">
                        <label for="exampleFormControlSelect1" > Fecha de Inicio</label>
                        <input type="date" id="start" name="FechaInicio" placeholder="Fecha" class="form-control">
                    </div>

                    <div class="form-group mt-2" class="col-4">
                        <label for="exampleFormControlSelect1"> Fecha Final</label>
                        <input type="date" id="start" name="FechaFinal" placeholder="Fecha" class="form-control">
                
                    </div>

                    <div class="form-group mt-2">
                        <label for="exampleFormControlSelect1"> Fecha de Ingreso al TECNM</label>
                        <input type="date" id="start" value="" name="FechaIngresoTECNM">
                
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="Licencias" maxlength="100" placeholder="Licencias" class="form-control">
                        
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="Permisos" maxlength="50" placeholder="Permisos" class="form-control">
                        
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="TipoContrato" maxlength="50" placeholder="Tipo de Contrato" class="form-control">
                        
                            </div>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="ClavePlaza" maxlength="30" placeholder="Clave de Plaza" class="form-control">
                        
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="MovimientoPlazaStatus" maxlength="50" placeholder="Movimiento de plaza (status)" class="form-control">
                        
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="TipoPlaza" placeholder="Tipo de plaza" class="form-control">
                        
                            </div>

                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="exampleFormControlSelect1">Total de Horas</label>
                        <input type="number" min="1" max="10000" name="TotalHoras">
                
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="NivelCategoria" maxlength="40" placeholder="Nivel de categoria" class="form-control">
                        
                            </div>

                        </div>
                    </div>

                    
    <!--BOTON QUE MANDA A LLAMAR AL PHP SAVE_TASK2-->
              <!----    <button type="submit" class="btn btn-primary">Ingresar Datos</button> -->
              <!--<button type="submit" class="btn btn-primary" style="float: right;" name="save_task2" >Ingresar Datos</button>-->


            </div>

        </div>
        



    </div>
</div>


<!-- Grado Academico    -->

<div class="card mt-5 mx-auto" style="width: 80%;">
    <div class="card-body">
        <div class="row mt-2">
            <h1>Grado Academico</h1>
        </div>

        <div class="row mt-5">
            
            <div class="col">
                <div class="row">
                    

                        
                            <div class="col">
                                <div class="form-group">
                          
                                    <input type="text" name="Licenciatura" maxlength="30" required placeholder="Licenciatura" class="form-control">
                                
                                </div>

                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="nombreLicenciatura" maxlength="30" required placeholder="Nombre de la licenciatura" class="form-control">
                            
                                </div>
                            </div>
                           
                            <div class="col">
                                <div class="form-group">
                                    <!--<div class="labe">Fecha de obtencion</div> -->
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Fecha de obtencion</label>
                                        </div>
                                        <div class="col">
                                            <input type="date" name="fecha_obtencion_lic" required placeholder="Fecha de obtencion" class="form-control">
                                        </div>
                                    </div>
                                    

                                    
                            
                                </div>

                            </div>
                            
                        
                    
                </div>
                <div class="row mt-3">
                    

                        
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="especializacion" placeholder="Especializacion" class="form-control">
                    
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="nombre_especializacion" placeholder="Nombre de especializacion" class="form-control">
                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="">Fecha de obtencion</label>
                                </div>
                                <div class="col">
                                    <input type="date" name="fechaObtencion_especializacion" placeholder="Fecha de obtencion" class="form-control">
                                </div>
                            </div>
                    
                        </div>

                    </div>
                
            
                </div>
                <div class="row mt-3">
                    

                        
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="maestria" placeholder="Maestria" class="form-control">
                    
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <label for="">Fecha de obtencion de maestria</label>
                            </div>
                            <div class="col">
                                <input type="date" name="maestria_obtencion" placeholder="Fecha de obtencion de maestria" class="form-control">
                    

                            </div>
                        </div>
                        
                    </div>
                    
                
            
                </div>
                <div class="row mt-4">
                    

                        
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="doctorado" placeholder="Doctorado" class="form-control">
                    
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="nombre_doctorado" placeholder="Nombre de doctorado" class="form-control">
                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="">Fecha de obtencion</label>
                                </div>
                                <div class="col">
                                    <input type="date" name="fecha_obtencion_doctorado" placeholder="Fecha de obtencion" class="form-control">
                                </div>
                            </div>
                    
                        </div>

                    </div>
                    
                
            
                </div>
                    <!--BOTON QUE MANDA A LLAMAR AL PHP SAVE_TASK2-->

                <!--<button type="submit" class="btn btn-primary" style="float: right;" name="save_Task_grado_academico">Ingresar Datos</button>-->

            </div>
            
        </div>


        
    </div>
</div>


<!-- Experiencia Profesional-->
<div class="card mt-5 mx-auto" style="width: 80%;">
    <div class="card-body">
        <div class="row mt-2">
            <h1>Experiencia Profesional</h1>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="row">
                    

                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="experiencia_profesional" required placeholder="Experiencia Profesional" class="form-control">
                            
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="anos_experiencia" placeholder="Años de experiencia" class="form-control">
                            
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--<div class="labe">Fecha de obtencion</div> -->
                                    <input type="text" name="lugar_trabajo" placeholder="Lugar de trabajo" class="form-control">
                            
                                </div>

                            </div>
                        
                       
                    
                </div>
                
                
                
            </div>
        </div>
            <!--BOTON QUE MANDA A LLAMAR AL PHP SAVE_TASK3-->

<!--        <button type="submit" class="btn btn-primary" style="float: right;">Ingresar Datos</button>-->
     
    </div>
</div>


<!--Calidad en la docencia-->

<div class="card mt-5 mx-auto" style="width: 80%;">

    <div class="card-body">
        <div class="row mt-2">
            <h1>Calidad en la docencia</h1>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="form-group">
                    <div class="row">
                        <div class="col"><label for="exampleFormControlSelect1">Miembro del SNI</label></div>
                        <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" required name="MiembroSNI">
                                <option>Si</option>
                                <option>No</option>
                                
                              </select>
                        </div>
                    </div>
                    
                  </div>
                
            </div>
            <div class="col">
                <input type="text" class="form-control " name="NivelSNI" placeholder="Nivel de SNI">

            </div>

        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="">Vigencia de SNI</label>
            </div>
            <div class="col-4">
                <label for="">Fecha de Inicio</label>
                <input type="date" name="VigenciaSNIInicio" placeholder="Fecha" class="form-control">
                
            </div>
            <div class="col-5">
                <label for="">Fecha Final</label>
                <input type="date" name="VigenciaSNIFinal" placeholder="Fecha" class="form-control">
                
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="row">
                    <div class="col"><label for="exampleFormControlSelect1">Miembro de cuerpo academico</label></div>
                    <div class="col"><select class="form-control" id="exampleFormControlSelect1" required name="MiembroCuerpoAcademico">
                        <option>Si</option>
                        <option>No</option>
                        
                      </select></div>
                </div>
                
            </div>
            <div class="col">
                <input type="text" name="NombreCuerpoAcademico" placeholder="Nombre del cuerpo academico" class="form-control">
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-3">
                <label for="">Nivel Cuerpo Academico</label>
            </div>
            <div class="col-4">
                <input type="text" name="NivelCuerpoAcademico" placeholder="Nivel ##" class="form-control">
            </div>
        </div>

        <div class="row mt-3">

            <div class="col">
                <label for="">Vigencia de Cuerpo Academico</label>
            </div>
            <div class="col-4">
                <label for="">Fecha de Inicio</label>
                <input type="date" name="VigenciaCuerpoInicio" placeholder="Fecha" class="form-control">
                
            </div>
            <div class="col-5">
                <label for="">Fecha Final</label>
                <input type="date" name="VigenciaCuerpoFinal" placeholder="Fecha" class="form-control">
                
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-3">
                <label for="">Reconocimiento de Perfil Deseable PRODEP</label>
            </div>
            <div class="col-4">
                <input type="text" name="ReconocimientoPRODEP" required placeholder="Reconocimiento" class="form-control">
            </div>
        </div>

        <div class="row mt-3">

            <div class="col">
                <label for="">Vigencia de Inicio PRODEP</label>
            </div>
            <div class="col-4">
                <label for="">Fecha de Inicio</label>
                <input type="date" name="VigenciaPRODEPInicio" placeholder="Fecha" class="form-control">
                
            </div>
            <div class="col-5">
                <label for="">Fecha Final</label>
                <input type="date" name="VigenciaPRODEPFinal" placeholder="Fecha" class="form-control">
                
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-3">
                <label for="">Participacion PRODEP</label>
            </div>
            <div class="col-4">
                <input type="text" maxlength="2" name="ParticipacionPRODEP" required placeholder="Participacion" class="form-control">
            </div>
        </div>

        <div class="row mt-3">

            <div class="col">
                <label for="">Periodo de la Participacion en PRODEP</label>
            </div>
            <div class="col-4">
                <label for="">Fecha de Inicio</label>
                <input type="date" name="PeriodoPRODEPInicio" placeholder="Fecha" class="form-control">
                
            </div>
            <div class="col-5">
                <label for="">Fecha Final</label>
                <input type="date" name="PeriodoPRODEPFinal" placeholder="Fecha" class="form-control">
                
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-3">
                <label for="">Nivel Alcanzado</label>
            </div>
            <div class="col-4">
                <input type="text" name="NivelAlcanzado" placeholder="Nivel ###" class="form-control">
            </div>
        </div>
          
 

    </div>

</div>

<!-- Reconocimentos-->
<div class="card mt-5 mx-auto" style="width: 80%;">
    <div class="card-body">
        <div class="row mt-2">
            <h1>Reconocimientos</h1>
            
        
        </div>

        <div class="row mt-5">
            <div class="col">
            <div class="row">
            <div class="col"><label for="">¿Tiene reconocimiento?</label></div>
            <div class="col"><select class="form-control" id="exampleFormControlSelect1" required name="MiembroSNI" name="tieneReconocimiento">
                                <option>Si</option>
                                <option>No</option>
                                
                              </select></div>
            
            
            </div>
            
            
            </div>
            <div class="col">
            <div class="row">
            <div class="col"><label for="">Nombre del reconocimiento</label></div>
            <div class="col"><input type="text" name="nombrePremio" id=""></div>
            
            
            </div>
            
            </div>

            



        </div>

        <div class="row mt-3">

            <div class="col">
                <div class="row">

                    <div class="col">Nombre de Reconocimiento</div>
                    <div class="col"><input type="text" name="nombreDelReconocimiento" id=""></div>
                
                
                </div>
            
            
            </div>

            <div class="col">

                <div class="row">

                    <div class="col">Nombre de Distincion</div>
                    <div class="col"><input type="text" name="nombreDistinciones" id=""></div>
                
                
                
                </div>
            
            
            </div>
            
            
        </div>

        <div class="row mt-3">

            <div class="row">
                <div class="col"><label for="">Tipo de Certificacion</label></div>
                <div class="col"><input type="text" name="tipoCertificacion" id=""></div>
            
            </div>
            
        
        </div>
    
    
    </div>

</div>

<!-- Formacion docente-->
<div class="card mt-5 mx-auto" style="width: 80%;">
    <div class="card-body">
        <div class="row mt-2"><h1>Formacion Docente</h1></div>

        <div class="row mt-5 ">
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Licenciatura</label></div>
                    <div class="col"><input name="licenciatura_formacion" type="text"></div>
                
                </div>
            
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col"><label for="">Inicio de Curso</label></div>
                            <div class="col"><input type="date" name="periodoiniCurso" id=""></div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="row">
                            <div class="col"><label for="">Fin de Curso</label></div>
                            <div class="col"><input type="date" name="periodoFinCurso" id=""></div>
                        </div>
                    
                    </div>
                    </div>
            </div>
        
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Nombre Curso</label></div>
                    <div class="col"><input type="text" name="nombreCurso" id=""></div>
                
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Nombre Diplomado</label></div>
                    <div class="col"><input type="text" name="nombreDiplomado" id=""></div>
                
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Nombre Taller</label></div>
                    <div class="col"><input type="text" name="nombreTaller" id=""></div>
                </div>
            </div>
        
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Duracion</label></div>
                    <div class="col"><input type="text" name="duracion" id=""></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Total Horas</label></div>
                    <div class="col"><input type="text" name="totalHoras" id=""></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Total Cursos</label></div>
                    <div class="col"><input type="text" name="totalCursos" id=""></div>
                </div>
            </div>
            
        
        </div>

        <div class="row mt-3">
        <div class="col">
                <div class="row">
                    <div class="col"><label for="">Total Diplomados</label></div>
                    <div class="col"><input type="text" name="totalDiplomados" id=""></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Total Talleres</label></div>
                    <div class="col"><input type="text" name="totalTalleres" id=""></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><label for="">Total Cursos Docentes</label></div>
                    <div class="col"><input type="text" name="FD_totalCursosDocentes" id=""></div>
                </div>
            </div>
        
        </div>





    </div>

</div>

<!-- Manejo de Idiomas -->
<div class="card mt-5 mx-auto" style="width:80%">
    <div class="card-body">
        <div class="row mt-2"><h1>Manejo de Idiomas</h1></div>
    
        </div>

        <div class="row mt-5">

            <div class="col">
            <div class="row">
                <div class="col"><label for="">Idioma</label></div>
                <div class="col"><input type="text" name="idioma" id=""></div>
                </div>
            </div>
            <div class="col">
            <div class="row">
                <div class="col"><label for="">Nivel</label></div>
                <div class="col"><input type="text" name="nivel" id=""></div>
            </div>
            </div>
            <div class="col">
            <div class="row">
                <div class="col"><label for="">Certificacion</label></div>
                <div class="col"><input type="text" name="certificacion" id=""></div>
                </div>
            </div>
        
        </div>

        <div class="row mt-3">
            <div class="col">
            <div class="row">
                <div class="col"><label for="">Nombre de la certificacion</label></div>
                <div class="col"><input type="text" name="nombreDeLaCertificacion" id=""></div>
            </div>
            </div>
            <div class="col">
            <div class="row">
                <div class="col"><label  style="float: right;" for="">Licenciatura</label></div>
                <div class="col"><input style="float: right;" type="text" name="licenciatura" id=""></div>
                </div>

            </div>

        </div>


</div>
</br>
<button type="submit" class="botonagregar"  style="float: right;" name="save_task" >Ingresar Datos</button>
</form>



<div class="container mb-2" style=" height: 100px">

</div>
	<footer class="bg-secondary text-white">
    <div class="container-fluid">
      <div class="row">
        <div  class="col-md-8">
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
