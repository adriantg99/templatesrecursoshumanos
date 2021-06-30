<?php 
include('db.php');

$resultU1="";

if(isset($_POST['actualizar_task'])){
    /*CAMPOS DATOS PERSONALES*/
    $Nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $fechaNacimiento =$_POST['fechaNacimiento'];
    $genero =$_POST['Genero'];
    $RFC =$_POST['RFC'];
    $Curp =$_POST['Curp'];
    $telefono =$_POST['telefono'];
    $correoElectronico = $_POST['CorreoPersonal'];
    $correoElectronicoInstitucional = $_POST['correoInstitucional'];

    
       /*Query Datos Personales UPDATE*/

       /**UPDATE `datospersonales` SET `nombre`='$Nombre',`apellidoPaterno`=[value-2],`apellidoMaterno`=[value-3],
        * `fechaNacimiento`=[value-4],`genero`=[value-5],`edad`=[value-6],`RFC`=[value-7],`CURP`=[value-8],
        `telefono`=[value-9],`correoElectronicoInstitucional`=[value-10],
        `correoElectronicoAdicional`=[value-11] WHERE 1 */

       $queryU1 = "UPDATE datospersonales SET nombre ='$Nombre', apellidoPaterno ='$apellidoPaterno' , apellidoMaterno ='$apellidoMaterno',
        fechaNacimiento='$fechaNacimiento', genero ='$genero', CURP ='$Curp', telefono ='$telefono', 
        correoElectronicoInstitucional = '$correoElectronicoInstitucional' , correoElectronicoAdicional ='$correoElectronico' where RFC= '$RFC'";

       $resultU1 = mysqli_query($conn, $queryU1) or die("Error al actualizar");

     /*CAMPOS GRADO ACADEMICO*/
     $licenciatura = $_POST['Licenciatura'];
     $nombre_Licenciatura = $_POST['nombreLicenciatura'];
     $fecha_Obtencion_lic = $_POST['fecha_obtencion_lic'];
     $especializacion = $_POST['especializacion'];
     $nombre_especializacion = $_POST['nombre_especializacion'];
     $fechaObtencion_especializacion = $_POST['fechaObtencion_especializacion'];
     $maestria = $_POST['maestria'];
     $maestria_obtencion = $_POST['maestria_obtencion'];
     $doctorado = $_POST['doctorado'];
     $nombre_doctorado = $_POST['nombre_doctorado'];
     $fecha_obtencion_doctorado = $_POST['fecha_obtencion_doctorado'];
 
 
     /*CAMPOS EXPERIENCIA*/ 
     $experiencia_profesional = $_POST['experiencia_profesional'];
     $anos_experiencia = $_POST['anos_experiencia'];
     $lugar_de_trabajo = $_POST['lugar_trabajo'];
 
     /*CAMPOS DATOS INSTITUCIONALES*/
     $NumeroDeTarjeta = $_POST['NumeroTarjeta'];
     $TipoDeEmpleado = $_POST['TipoEmpleado'];
     $Departamento_Adscripcion = $_POST['DepartamentoAdscripcion'];
     $Departamento_Adscripcion2 = $_POST['DepartamentoAdscripcion2'];
     $Puesto_Actual = $_POST['PuestoActual'];
     $FechaDeInicio = $_POST['FechaInicio'];
     $FechaDeFinal = $_POST['FechaFinal'];
     $FechaDeIngresoTECNM = $_POST['FechaIngresoTECNM'];
     $Licencias1 = $_POST['Licencias'];
     $Permisos1 = $_POST['Permisos'];
     $TipoDeContrato = $_POST['TipoContrato'];
     $ClaveDePlaza = $_POST['ClavePlaza'];
     $MovimientoPlaza = $_POST['MovimientoPlazaStatus'];
     $TipoDePlaza = $_POST['TipoPlaza'];
     $TotalDeHoras = $_POST['TotalHoras'];
     $NivelDeCategoria = $_POST['NivelCategoria'];
 
     /*CAMPOS CALIDAD EN LA DOCENCIA */
     $MiembroDelSNI = $_POST['MiembroSNI'];
     $NivelDelSNI = $_POST['NivelSNI'];
     $VigenciaDelSNIInicio = $_POST['VigenciaSNIInicio'];
     $VigenciaDelSNIFinal = $_POST['VigenciaSNIFinal'];
     $MiembroDelCuerpoAcademico = $_POST['MiembroCuerpoAcademico'];
     $NombreDelCuerpoAcademico = $_POST['NombreCuerpoAcademico'];
     $NivelDelCuerpoAcademico = $_POST['NivelCuerpoAcademico'];
     $VigenciaDelCuerpoInicio = $_POST['VigenciaCuerpoInicio'];
     $VigenciaDelCuerpoFinal = $_POST['VigenciaCuerpoFinal'];
     $ReconocimientoDePRODEP = $_POST['ReconocimientoPRODEP'];
     $VigenciaDePRODEPInicio = $_POST['VigenciaPRODEPInicio'];
     $VigenciaDePRODEPFinal = $_POST['VigenciaPRODEPFinal'];
     $ParticipacionDePRODEP = $_POST['ParticipacionPRODEP'];
     $PeriodoDePRODEPInicio = $_POST['PeriodoPRODEPInicio'];
     $PeriodoDePRODEPFinal = $_POST['PeriodoPRODEPFinal'];
     $NivelAlcanzadoAc = $_POST['NivelAlcanzado'];
 
      /* QUERY RECONOCIMIENTOS */
      $Rec_tieneReconocimiento = $_POST['tieneReconocimiento']; 
      $Rec_nombrePremio = $_POST['nombrePremio'];
      $Rec_nombreDistinciones = $_POST['nombreDistinciones'];
      $Rec_nombreDelReconocimiento = $_POST['nombreDelReconocimiento'];
      $Rec_tipoCertificacion = $_POST['tipoCertificacion'];
 
      /* CAMPOS FORMACION DOCENTE */
         $FD_licenciatura = $_POST['licenciatura_formacion'];
         $FD_periodoiniCurso = $_POST['periodoiniCurso'];
         $FD_periodoFinCurso = $_POST['periodoFinCurso'];
         $FD_nombreCurso = $_POST['nombreCurso'];
         $FD_nombreDiplomado = $_POST['nombreDiplomado'];
         $FD_nombreTaller = $_POST['nombreTaller'];
         $FD_duracion = $_POST['duracion'];
         $FD_totalHoras = $_POST['totalHoras'];
         $FD_totalCursos = $_POST['totalCursosDocentes'];
         $FD_totalDiplomados = $_POST['totalDiplomados'];
         $FD_totalTalleres = $_POST['totalTalleres'];
         $FD_totalCursosDocentes = $_POST['FD_totalCursosDocentes'];
 
         /* MANEJO DE IDIOMAS */
         $MI_idioma = $_POST['idioma'];
         $MI_nivel = $_POST['nivel'];
         $MI_certificacion = $_POST['certificacion'];
         $MI_nombreDeLaCertificacion = $_POST['nombreDeLaCertificacion'];
         $MI_licenciatura = $_POST['licenciatura_idiomas'];
 
 
     
 
     /*Query Grado academico*/ 
     $queryU2 = "UPDATE `gradoacademico` SET `licenciatura`='$licenciatura', `nombreLicenciatura`='$nombre_Licenciatura', `fechaObtencionLic` ='$fecha_Obtencion_lic',
     `especializacion`='$especializacion', `fechaObtencionEspecializacion`='$fechaObtencion_especializacion', `nombre_Especializacion`='$nombre_especializacion',
     `maestria`='$maestria', `fechaObtencionMaestria`='$maestria_obtencion', `doctorado`='$doctorado', `nombreDoctorado` ='$nombre_doctorado',
     `fechaObtencionDoctorado`='$fecha_obtencion_doctorado' where `RFC`= '$RFC'" ;
 
     $resultU2 = mysqli_query($conn, $queryU2);
 
   
 
     /*QUERY DATOS INSTITUCIONALES */
 
     /*INSERT INTO datosinstituncionales (RFC, numeroTarjeta, tipoEmpleado, departamentoAdscripcion)  values('TOGA990709', '173200212', 'normal', 'ninguno')*/
     $queryU3 = "UPDATE `datosInstituncionales` SET `numeroTarjeta`='$NumeroDeTarjeta', `tipoEmpleado`='$TipoDeEmpleado', 
     `departamentoAdscripcion`='$Departamento_Adscripcion', `departamentospertenecientes`='$Departamento_Adscripcion2', `puestoActual`='$Puesto_Actual', 
     `fechaInicio`='$FechaDeInicio', `fechafinal`='$FechaDeFinal', `fechaIngresoTECNM`='$FechaDeIngresoTECNM', `licencias`='$Licencias1', 
     `permisos`='$Permisos1', `tipoContrato`='$TipoDeContrato', `claveplaza`='$ClaveDePlaza', `movimientoPlaza`='$MovimientoPlaza', 
     `tipoPlaza`='$TipoDePlaza', `totalHoras`='$TotalDeHoras', `nivelCategoria`='$NivelDeCategoria' where `RFC`= '$RFC'" ;
   
 
     $resultU3 = mysqli_query($conn, $queryU3);
 
    
 
     /*QUERY EXPERIENCIA PROFESIONAL */
 
     /*UPDATE `experienciaprofesional` SET `experienciaProfesional`= 'Prueba' WHERE RFC='TOGA990709' */
 
     $experiencia_profesional = $_POST['experiencia_profesional'];
     $anos_experiencia = $_POST['anos_experiencia'];
     $lugar_de_trabajo = $_POST['lugar_trabajo'];
 
     $queryU4 = "UPDATE `experienciaprofesional` SET `experienciaProfesional`='$experiencia_profesional' , `anosExperiencia`='$anos_experiencia',
     `lugarDeTrabajo`='$lugar_de_trabajo' where `RFC`= ' $RFC'" ;
     
 
     $resultU4 = mysqli_query($conn, $queryU4);
 
  
     
     /*QUERY CALIDAD EN LA DOCENCIA*/
 
     $queryU5 = "UPDATE `calidadEnLaDocencia` SET `miembroDelSNI`='$MiembroDelSNI', `nivelDeSNI`='$NivelDelSNI', `vigenciaInicioSNI`='$VigenciaDelSNIInicio',
     `vigenciaFinSNI`='$VigenciaDelSNIFinal', `miembroDeCuerpoAcademico`='$MiembroDelCuerpoAcademico', `nombreDelCuerpoAcademico`='$NombreDelCuerpoAcademico', 
     `nivelCuerpoAcademico`='$NivelDelCuerpoAcademico', `vigenciaInicioCuerpo`='$VigenciaDelCuerpoInicio', `vigenciaFinCuerpo`='$VigenciaDelCuerpoFinal', 
     `reconocimientoPerfilDeseablePRODEP`='$ReconocimientoDePRODEP', `vigenciaInicioPRODEP`='$VigenciaDePRODEPInicio', 
     `vigenciaFinPRODEP`='$VigenciaDePRODEPFinal', `participacionPRODEP`='$ParticipacionDePRODEP', `periodoInicParti`='$PeriodoDePRODEPInicio',
     `periodoFinParti`='$PeriodoDePRODEPFinal', `nivelAlcanzado`='$NivelAlcanzadoAc' where `RFC`= '$RFC'" ;
 
     $resultU5 = mysqli_query($conn, $queryU5);
 
             /*Query Formacion Docente */
 
     $queryU6 = "UPDATE `formaciondocente` SET `licenciatura_formacion` ='$FD_licenciatura', `periodoiniCurso` ='$FD_periodoiniCurso', `periodoFinCurso`='$FD_periodoFinCurso',
         `nombreCurso`='$FD_nombreCurso', `nombreDiplomado`='$FD_nombreDiplomado', 
         `nombreTaller`='$FD_nombreTaller', `duracion`='$FD_duracion', `totalHoras`='$FD_totalHoras', 
         `totalCursos`='$FD_totalCursos', `totalDiplomados`='$FD_totalDiplomados',
         `totalTalleres`='$FD_totalTalleres', `totalCursosDocentes`='$FD_totalCursosDocentes' where `RFC`= '$RFC'";
 
         $resultU6 = mysqli_query($conn, $queryU6);
 
         /*QUERY RECONOCIMIENTOS */
 
         $queryU7 = "UPDATE `reconocimientos` SET `tieneReconocimiento`='$Rec_tieneReconocimiento', `nombrePremio`='$Rec_nombrePremio', 
         `nombreDistinciones`='$Rec_nombreDistinciones', `nombreDelReconocimiento`='$Rec_nombreDelReconocimiento', 
         `tipoCertificacion`='$Rec_tipoCertificacion' where `RFC`= '$RFC'";
 
         $resultU7 = mysqli_query($conn, $queryU7);
 
 
     /*QUERY MANEJO DE IDIOMAS */
     $queryU8 = "UPDATE `manejodeidiomas` SET `idioma`='$MI_idioma', `nivel`='$MI_nivel', `certificacion`='$MI_certificacion',
     `nombreDeLaCertificacion`='$MI_nombreDeLaCertificacion', `licenciatura_manejo`='$MI_licenciatura' where `RFC`= '$RFC'";
     $resultU8 = mysqli_query($conn, $queryU8);
 
 
   
    
    
    echo '<script language="javascript">alert("Datos Actualizados con exito");</script>';
    session_abort();
    include("modificacion.php");


}








?>

}

