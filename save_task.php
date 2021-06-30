<?php 
include('db.php');


    if(isset($_POST['save_task'])){

        
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
        
        $edad_personales = calculaedad($fechaNacimiento);
           /*Query Datos Personales*/
           $query = "INSERT INTO datospersonales(nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, 
           genero, RFC, CURP, telefono, correoElectronicoInstitucional, correoElectronicoAdicional, edad) 
           Values ('$Nombre', '$apellidoPaterno', '$apellidoMaterno', '$fechaNacimiento', '$genero', '$RFC', '$Curp', '$telefono', 
           '$correoElectronicoInstitucional', '$correoElectronico', '$edad_personales')";
   
           $result1 = mysqli_query($conn, $query);

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
        

        /* CAMPOS FORMACION DOCENTE */
        $FD_licenciatura = $_POST['licenciatura_formacion'];
        $FD_periodoiniCurso = $_POST['periodoiniCurso'];
        $FD_periodoFinCurso = $_POST['periodoFinCurso'];
        $FD_nombreCurso = $_POST['nombreCurso'];
        $FD_nombreDiplomado = $_POST['nombreDiplomado'];
        $FD_nombreTaller = $_POST['nombreTaller'];
        $FD_duracion = $_POST['duracion'];
        $FD_totalHoras = $_POST['totalHoras'];
        $FD_totalCursos = $_POST['totalCursos'];
        $FD_totalDiplomados = $_POST['totalDiplomados'];
        $FD_totalTalleres = $_POST['totalTalleres'];
        $FD_totalCursosDocentes = $_POST['FD_totalCursosDocentes'];

        /* MANEJO DE IDIOMAS */
        $MI_idioma = $_POST['idioma'];
        $MI_nivel = $_POST['nivel'];
        $MI_certificacion = $_POST['certificacion'];
        $MI_nombreDeLaCertificacion = $_POST['nombreDeLaCertificacion'];
        $MI_licenciatura = $_POST['licenciatura'];

        /*$_POST['']; */

        /*Query Grado academico*/ 
        $query2 = "INSERT INTO gradoacademico(licenciatura, nombreLicenciatura, fechaObtencionLic,
        especializacion, fechaObtencionEspecializacion, nombre_Especializacion,
        maestria, fechaObtencionMaestria, doctorado, nombreDoctorado,
        fechaObtencionDoctorado, RFC) Values ('$licenciatura', '$nombre_Licenciatura', '$fecha_Obtencion_lic', '$especializacion', '$nombre_especializacion', 
        '$fechaObtencion_especializacion', '$maestria', '$maestria_obtencion', 
        '$doctorado', '$nombre_doctorado', '$fecha_obtencion_doctorado', '$RFC')";

        $result2 = mysqli_query($conn, $query2);

        /* QUERY RECONOCIMIENTOS */
        $Rec_tieneReconocimiento = $_POST['tieneReconocimiento']; 
        $Rec_nombrePremio = $_POST['nombrePremio'];
        $Rec_nombreDistinciones = $_POST['nombreDistinciones'];
        $Rec_nombreDelReconocimiento = $_POST['nombreDelReconocimiento'];
        $Rec_tipoCertificacion = $_POST['tipoCertificacion'];


        /*QUERY DATOS INSTITUCIONALES */

        /*INSERT INTO datosinstituncionales (RFC, numeroTarjeta, tipoEmpleado, departamentoAdscripcion)  values('TOGA990709', '173200212', 'normal', 'ninguno')*/
        $query3 = "INSERT INTO datosInstituncionales(RFC, numeroTarjeta, tipoEmpleado, departamentoAdscripcion, departamentospertenecientes, puestoActual, 
        fechaInicio, fechafinal, fechaIngresoTECNM, licencias, permisos, tipoContrato, claveplaza, movimientoPlaza, 
        tipoPlaza, totalHoras, nivelCategoria)  
        Values ('$RFC', '$NumeroDeTarjeta', '$TipoDeEmpleado', '$Departamento_Adscripcion', '$Departamento_Adscripcion2', '$Puesto_Actual', '$FechaDeInicio',
        '$FechaDeFinal', '$FechaDeIngresoTECNM', '$Licencias1', '$Permisos1', '$TipoDeContrato', '$ClaveDePlaza', '$MovimientoPlaza', '$TipoDePlaza'
        , '$TotalDeHoras', '$NivelDeCategoria')";

        $result3 = mysqli_query($conn, $query3);

       

        /*QUERY EXPERIENCIA PROFESIONAL */
        $experiencia_profesional = $_POST['experiencia_profesional'];
        $anos_experiencia = $_POST['anos_experiencia'];
        $lugar_de_trabajo = $_POST['lugar_trabajo'];
    
        $query4 = "INSERT INTO experienciaprofesional(experienciaProfesional, anosExperiencia,
        lugarDeTrabajo, RFC) 
        Values('$experiencia_profesional', '$anos_experiencia',
        '$lugar_de_trabajo', '$RFC')";
    
        $result4 = mysqli_query($conn, $query4);

        /*QUERY CALIDAD EN LA DOCENCIA*/

        $query5 = "INSERT INTO calidadEnLaDocencia(miembroDelSNI, nivelDeSNI, vigenciaInicioSNI, vigenciaFinSNI, 
        miembroDeCuerpoAcademico, nombreDelCuerpoAcademico, nivelCuerpoAcademico, vigenciaInicioCuerpo, vigenciaFinCuerpo, 
        reconocimientoPerfilDeseablePRODEP, vigenciaInicioPRODEP, vigenciaFinPRODEP, participacionPRODEP, periodoInicParti,
        periodoFinParti, nivelAlcanzado, RFC) 
        Values ('$MiembroDelSNI', '$NivelDelSNI', '$VigenciaDelSNIInicio', '$VigenciaDelSNIFinal', '$MiembroDelCuerpoAcademico',
        '$NombreDelCuerpoAcademico', '$NivelDelCuerpoAcademico', '$VigenciaDelCuerpoInicio', '$VigenciaDelCuerpoFinal', 
        '$ReconocimientoDePRODEP', '$VigenciaDePRODEPInicio', '$VigenciaDePRODEPFinal', '$ParticipacionDePRODEP', '$PeriodoDePRODEPInicio', 
        '$PeriodoDePRODEPFinal', '$NivelAlcanzadoAc', '$RFC')";

        $result5 = mysqli_query($conn, $query5);

        /*Query Formacion Docente */

        $query6 = "INSERT INTO formaciondocente(RFC, licenciatura_formacion, periodoiniCurso, periodoFinCurso,
        nombreCurso, nombreDiplomado, nombreTaller, duracion, totalHoras, totalCursos, totalDiplomados,
        totalTalleres, totalCursosDocentes) VALUES('$RFC', '$FD_licenciatura', '$FD_periodoiniCurso', '$FD_periodoFinCurso', '$FD_nombreCurso',
        '$FD_nombreDiplomado', '$FD_nombreTaller', '$FD_duracion', '$FD_totalHoras', '$FD_totalCursos','$FD_totalDiplomados', '$FD_totalTalleres',
        '$FD_totalCursosDocentes')";

        $result6 = mysqli_query($conn, $query6);

        /*QUERY RECONOCIMIENTOS */

        $query7 = "INSERT INTO reconocimientos(RFC, tieneReconocimiento, nombrePremio, 
        nombreDistinciones, nombreDelReconocimiento, tipoCertificacion)
        Values ('$RFC', '$Rec_tieneReconocimiento', '$Rec_nombrePremio', '$Rec_nombreDistinciones', 
        '$Rec_nombreDelReconocimiento' , '$Rec_tipoCertificacion')";

        $result7 = mysqli_query($conn, $query7);

        /*QUERY MANEJO DE IDIOMAS */
        $query8 = "INSERT INTO manejodeidiomas(RFC, idioma, nivel, certificacion,
        nombreDeLaCertificacion, licenciatura_manejo) Values('$RFC', '$MI_idioma', '$MI_nivel', 
        '$MI_certificacion', '$MI_nombreDeLaCertificacion', '$MI_licenciatura')";

        $result8 = mysqli_query($conn, $query8);
        
        echo '<script language="javascript">alert("Datos guardados correctamente");</script>';
        session_abort();
        header("Location: registro.php");
            $_SESSION['message'] = 'Datos guardados con exito';
            $_SESSION['message_type'] = 'succes';
    }


    function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
      }

    
    



?>