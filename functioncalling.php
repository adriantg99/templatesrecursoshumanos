<?php 
include("db.php");
$i =0;

if(isset($_REQUEST['BuscarRFC'])){
    $RFCSOLICITANTE = $_REQUEST['BuscarRFC'];
}else{
    $RFCSOLICITANTE = $_POST['RFC'];
}


$query = "SELECT nombre, apellidoPaterno
, apellidoMaterno,
fechaNacimiento,
genero,
edad,
RFC,
CURP,
telefono,
correoElectronicoInstitucional,
correoElectronicoAdicional from DatosPersonales where RFC= '". $RFCSOLICITANTE ."'";

$result = mysqli_query($conn, $query);



if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);

    $nombre_datosPersonales = $row['nombre'];
    $apellidoP_datosPersonales = $row['apellidoPaterno'];
    $apellidoM_datosPersonales = $row['apellidoMaterno'];
    $fechaNacimiento_datosPersonales = $row['fechaNacimiento'];
    $genero_datosPersonales = $row['genero'];
    $edad_datosPersonales = $row['edad'];
    $RFC_datosPersonales = $row['RFC'];
    $CURP_datosPersonales = $row['CURP'];
    $telefono_datosPersonales = $row['telefono'];
    $correoElectronicoInstitucional_datosPersonales = $row['correoElectronicoInstitucional'];
    $correoElectronico_datosPersonales = $row['correoElectronicoAdicional'];
    $i++;
}

if($i==0){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla datospersonales, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}

/*DATOS INSTITUCIONALES*/

$query2 = "SELECT numeroTarjeta,
tipoEmpleado,
departamentoAdscripcion,
departamentospertenecientes,
puestoActual,
fechaInicio,
fechafinal,
fechaIngresoTECNM,
licencias,
permisos,
tipoContrato,
claveplaza,
movimientoPlaza,
tipoPlaza,
totalHoras,
nivelCategoria
from datosinstituncionales where RFC= '". $RFCSOLICITANTE ."'";

$result2 =mysqli_query($conn, $query2);

if(mysqli_num_rows($result2)==1){
    $row2 = mysqli_fetch_array($result2);

    $numeroTarjeta_DatosInstitucionales = $row2['numeroTarjeta'];
    $tipo_empleado_DatosInstitucionales = $row2['tipoEmpleado'];
    $departamento_Adscripcion_DatosInstitucionales = $row2['departamentoAdscripcion'];
    $departamentospertenecientes_DatosInstitucionales = $row2['departamentospertenecientes'];
    $puestoActual_DatosInstitucionales = $row2['puestoActual'];
    $fechaInicio_datosInstitucionales = $row2['fechaInicio'];
    $fechafinal_datosInstitucionales = $row2['fechafinal'];
    $fechaIngresoTECNM_datosInstitucionales = $row2['fechaIngresoTECNM'];
    $licencias_datosInstitucionales = $row2['licencias'];
    $permisos_datosInstitucionales = $row2['permisos'];
    $tipoContrato_datosInstitucionales = $row2['tipoContrato'];
    $claveplaza_datosInstitucionales = $row2['claveplaza'];
    $movimientoPlaza_datosInstitucionales = $row2['movimientoPlaza'];
    $tipoPlaza_datosInstitucionales = $row2['tipoPlaza'];
    $totalHoras_datosInstitucionales = $row2['totalHoras'];
    $nivelCategoria_datosInstitucionales = $row2['nivelCategoria'];
    $i++;
}

if($i==1){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla iNSTI, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}

/* Grado Academico */
$query3 = "SELECT licenciatura,
nombreLicenciatura,
fechaObtencionLic,
especializacion,
fechaObtencionEspecializacion,
nombre_Especializacion,
maestria,
fechaObtencionMaestria,
doctorado,
nombreDoctorado,
fechaObtencionDoctorado
from gradoacademico where RFC = '". $RFCSOLICITANTE . "'";


$result3 = mysqli_query($conn, $query3);

if(mysqli_num_rows($result2)==1){
    $row3 = mysqli_fetch_array($result3);

    $licenciatura = $row3['licenciatura'];
    $nombreLicenciatura_gradoAcademico =$row3['nombreLicenciatura'];
    $fechaObtencionLic_gradoAcademico = $row3['fechaObtencionLic'];
    $especializacion_gradoAcademico = $row3['especializacion'];
    $nombre_Especializacion = $row3['nombre_Especializacion'];
    $fechaObtencionEspecializacion_gradoAcademico = $row3['fechaObtencionEspecializacion'];
    $maestria_gradoAcademico = $row3['maestria'];
    $fechaObtencionMaestria_gradoAcademico = $row3['fechaObtencionMaestria'];
    $doctorado_gradoAcademico = $row3['doctorado'];
    $nombreDoctorado_gradoAcademico = $row3['nombreDoctorado'];
    $fechaObtencionDoctorado_gradoAcademico = $row3['fechaObtencionDoctorado'];
    $i++;
}


if($i==2){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla GRADO ACADEMICO, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}

/*Experiencia profesional */
$query4 = "SELECT 
experienciaProfesional,
anosExperiencia,
lugarDeTrabajo 
from experienciaprofesional where RFC = '". $RFCSOLICITANTE . "'";

$result4 = mysqli_query($conn, $query4);

if(mysqli_num_rows($result4)==1){
    $row4 = mysqli_fetch_array($result4);

    $experienciaProfesional_expPro = $row4['experienciaProfesional'];
    $anosExperiencia_expPro = $row4['anosExperiencia'];
    $lugarDeTrabajo_expPro = $row4['lugarDeTrabajo'];
    $i++;
}


if($i==3){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla EXPERIENCIA PROFESIONAL, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}

/* Calidad en la docencia */
$query5 = "SELECT
miembroDelSNI,
nivelDeSNI,
vigenciaInicioSNI,
vigenciaFinSNI,
miembroDeCuerpoAcademico,
nombreDelCuerpoAcademico,
nivelCuerpoAcademico,
vigenciaInicioCuerpo,
vigenciaFinCuerpo,
reconocimientoPerfilDeseablePRODEP,
vigenciaInicioPRODEP,
vigenciaFinPRODEP,
participacionPRODEP,
periodoInicParti,
periodoFinParti,
nivelAlcanzado  
from calidadenladocencia where RFC = '". $RFCSOLICITANTE . "'";

$result5 = mysqli_query($conn, $query5);

if(mysqli_num_rows($result5)==1){
    $row5 = mysqli_fetch_array($result5);

    $miembroDelSNI_calidad = $row5['miembroDelSNI'];
    $nivelDeSNI_calidad = $row5['nivelDeSNI'];
    $vigenciaInicioSNI_calidad = $row5['vigenciaInicioSNI'];
    $vigenciaFinSNI_calidad = $row5['vigenciaFinSNI'];
    $miembroDeCuerpoAcademico_calidad = $row5['miembroDeCuerpoAcademico'];
    $nombreDelCuerpoAcademico_calidad = $row5['nombreDelCuerpoAcademico'];
    $nivelCuerpoAcademico_calidad = $row5['nivelCuerpoAcademico'];
    $vigenciaInicioCuerpo_calidad = $row5['vigenciaInicioCuerpo'];
    $vigenciaFinCuerpo_calidad  = $row5['vigenciaFinCuerpo'];
    $reconocimientoPerfilDeseablePRODEP_calidad = $row5['reconocimientoPerfilDeseablePRODEP'];
    $vigenciaInicioPRODEP_calidad = $row5['vigenciaInicioPRODEP'];
    $vigenciaFinPRODEP_calidad = $row5['vigenciaFinPRODEP'];
    $participacionPRODEP_calidad = $row5['participacionPRODEP'];
    $periodoInicParti_calidad = $row5['periodoInicParti'];
    $periodoFinParti_calidad = $row5['periodoFinParti'];
    $nivelAlcanzado_calidad = $row5['nivelAlcanzado'];
    
    $i++;
}

if($i==4){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla CALIDAD EN LA DOCENCIA, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}

/*QUERY FORMACION_Docente */
$query6 = "SELECT licenciatura_formacion, periodoiniCurso, periodoFinCurso, 
        nombreCurso, nombreDiplomado, nombreTaller, duracion, totalHoras, 
        totalCursos, totalDiplomados, totalTalleres, totalCursosDocentes 
        from formaciondocente where RFC = '". $RFCSOLICITANTE . "'";

    $resultPrueba = mysqli_query($conn, $query6);

    if(mysqli_num_rows($resultPrueba)==1){
        $row6 = mysqli_fetch_array($resultPrueba);

        $FD_licenciatura_FD = $row6['licenciatura_formacion'];
        $FD_periodoiniCurso_FD = $row6['periodoiniCurso'];
        $FD_periodoFinCurso_FD = $row6['periodoFinCurso'];
        $FD_nombreCurso_FD = $row6['nombreCurso'];
        $FD_nombreDiplomado_FD = $row6['nombreDiplomado'];
        $FD_nombreTaller_FD = $row6['nombreTaller'];
        $FD_duracion_FD = $row6['duracion'];
        $FD_totalHoras_FD = $row6['totalHoras'];
        $FD_totalCursos_FD = $row6['totalCursos'];
        $FD_totalDiplomados_FD = $row6['totalDiplomados'];
        $FD_totalTalleres_FD = $row6['totalTalleres'];
        $FD_totalCursosDocentes_FD = $row6['totalCursosDocentes'];
        $i++;
    }

    if($i==5){
        echo '<script language="javascript">alert("No se encontro ningun dato tabla FORMACION DOCENTE, vuelve a intentar");</script>';
        session_abort();
        include("modificacion.php");

    }

    /*Manejo idiomas */
$query7 =  "SELECT  idioma, nivel, certificacion,
nombreDeLaCertificacion, licenciatura_manejo 
from manejodeidiomas where RFC= '". $RFCSOLICITANTE ."'";

$result7 = mysqli_query($conn, $query7);

if(mysqli_num_rows($result7)==1){
    $row7 = mysqli_fetch_array($result7);

   
    $MI_idioma_MI = $row7['idioma'];
    $MI_nivel_MI = $row7['nivel'];
    $MI_certificacion_MI = $row7['certificacion'];
    $MI_nombreDeLaCertificacion_MI = $row7['nombreDeLaCertificacion'];
    $MI_licenciatura_MI = $row7['licenciatura_manejo'];
    $i++;
}

if($i==6){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla MANEJO DE IDIOMAS, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}

/*RECONOCIMIENTOS */
$query8 = "SELECT RFC, tieneReconocimiento, nombrePremio, 
nombreDistinciones, nombreDelReconocimiento, tipoCertificacion 
from reconocimientos where RFC= '". $RFCSOLICITANTE ."'";

$result8 = mysqli_query($conn, $query8);

if(mysqli_num_rows($result8)==1){
$row8 = mysqli_fetch_array($result8);

$Rec_tieneReconocimiento_rec = $row8['tieneReconocimiento'];
$Rec_nombrePremio_rec = $row8['nombrePremio'];
$Rec_nombreDistinciones_rec = $row8['nombreDistinciones'];
$Rec_nombreDelReconocimiento_rec = $row8['nombreDelReconocimiento'];
$Rec_tipoCertificacion_rec = $row8['tipoCertificacion'];
$i++;
}

if($i==7){
    echo '<script language="javascript">alert("No se encontro ningun dato tabla RECONOCIMIENTO, vuelve a intentar");</script>';
    session_abort();
    include("modificacion.php");

}






if($i==8){
    include("vista.php");
}

?>


