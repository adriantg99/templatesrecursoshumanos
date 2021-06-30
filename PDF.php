<?php
require('Reportes-PDF/fpdf.php');

$RFCPDF = $_POST['BusquedaPDF'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('resources/1200px-SEP_Logo_2019.svg.png',3,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(55);
    // Título
    $this->Cell(75,10,'Reportes Recursos Humanos',1,0,'C');
    // Salto de línea
    $this->Image('resources/Ejem TecNM vertical.png',170,3,27);
    $this->Ln(25);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

if(isset($_POST['pasarDatosDepa'])){

    $Departamento = $_POST['opciones'];


    require('db.php');
    
    $consultaDepartamento = "SELECT RFC from datospersonales WHERE RFC IN (SELECT RFC from datosinstituncionales where departamentoAdscripcion= '$Departamento')";
    //$consultaDepartamento = "SELECT RFC from datospersonales WHERE RFC IN(Select RFC from datosinstituncionales where departamentoAdscripcion = '$Departamento')";

    $resultado_Consulta_depto = $conn->query($consultaDepartamento);
    $ConsultaNombre = "SELECT nombre from datospersonales WHERE RFC IN (SELECT RFC from datosinstituncionales where departamentoAdscripcion= '$Departamento')";
    
    $resultado_Consulta_Nombre = $conn->query($ConsultaNombre);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',14);

    $pdf->Cell(45,10,utf8_decode(''));
    $pdf->Cell(100,20,'Departamento de '.$Departamento,1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');
    
    for($das=0; $row1 = $resultado_Consulta_depto->fetch_assoc(); $das++){
        
      $row1.next();
        while($row2 = $resultado_Consulta_Nombre->fetch_assoc()){         
            $pdf->Cell(90,10,utf8_decode('RFC'));
            $pdf->Cell(90, 10, utf8_decode($row1['RFC']), 1, 1, 'C', 0);
    
            $pdf->Cell(80,10,utf8_decode('Nombre'));
            $pdf->Cell(90, 10, utf8_decode($row2['nombre']), 0, 1, 'C', 0);
            $das+=1;
        }
        
    }
    
    
    $pdf->Output();
    
    
}

if(isset($_POST['pasarRFC'])){


/*Variable para pasarle el RFC cuando este terminado el buscador de datos */
$KKS = $RFCPDF;


require('db.php');
$Consulta_Datos_Personales = "SELECT * from datospersonales WHERE RFC ='$KKS'" ;
$resultado_Datos_Personales = $conn->query($Consulta_Datos_Personales);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);


/*Impresion Datos Personales */
while($row = $resultado_Datos_Personales->fetch_assoc()){
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,'DATOS PERSONALES',1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');
    $pdf->Cell(80,10,utf8_decode('Nombre'));
    $pdf->Cell(90, 10, utf8_decode($row['nombre']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Apellido Paterno'));
    $pdf->Cell(90, 10, utf8_decode($row['apellidoPaterno']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Apellido Materno'));
    $pdf->Cell(90, 10, utf8_decode($row['apellidoMaterno']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Fecha de Nacimiento'));
    $pdf->Cell(90, 10, utf8_decode($row['fechaNacimiento']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Género'));   
    $pdf->Cell(90, 10, utf8_decode($row['genero']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Edad'));    
    $pdf->Cell(90, 10, utf8_decode($row['edad']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('RFC'));
    
    $pdf->Cell(90, 10, utf8_decode($row['RFC']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('CURP'));
    
    $pdf->Cell(90, 10, utf8_decode($row['CURP']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Teléfono'));
    
    $pdf->Cell(90, 10, utf8_decode($row['telefono']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Correo electrónico Institucional'));
    
    $pdf->Cell(90, 10, utf8_decode($row['correoElectronicoInstitucional']), 1, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Correo electrónico adicional.'));
    
    $pdf->Cell(90, 10, utf8_decode($row['correoElectronicoAdicional']), 1, 1, 'C', 0);
}

/*Impresion Datos Institucionales */
$pdf->AddPage();

$consulta_Datos_Institucionales ="SELECT * FROM datosinstituncionales WHERE RFC ='$KKS'" ;
$resultado_Datos_Institucionales = $conn->query($consulta_Datos_Institucionales);

while($row2 = $resultado_Datos_Institucionales->fetch_assoc()){
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,'DATOS INSTITUCIONALES',1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('Número de Tarjeta.'));
    $pdf->Cell(90, 10, utf8_decode($row2['numeroTarjeta']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Tipo de empleado.'));
    $pdf->Cell(90, 10, utf8_decode($row2['tipoEmpleado']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Departamento de Adscripción.'));
    $pdf->Cell(90, 10, utf8_decode($row2['departamentoAdscripcion']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Departamentos pertenecientes.'));
    $pdf->Cell(90, 10, utf8_decode($row2['departamentospertenecientes']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Puesto Actual.'));
    $pdf->Cell(90, 10, utf8_decode($row2['puestoActual']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Fecha de Inicio.'));
    $pdf->Cell(90, 10, utf8_decode($row2['fechaInicio']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Fecha final.'));
    $pdf->Cell(90, 10, utf8_decode($row2['fechafinal']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Fecha de ingreso al TECNM.'));
    $pdf->Cell(90, 10, utf8_decode($row2['fechaIngresoTECNM']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Licencias Tomadas'));
    $pdf->Cell(90, 10, utf8_decode($row2['licencias']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Permisos tomados.'));
    $pdf->Cell(90, 10, utf8_decode($row2['permisos']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Tipo de contrato'));
    $pdf->Cell(90, 10, utf8_decode($row2['tipoContrato']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Clave de la plaza'));
    $pdf->Cell(90, 10, utf8_decode($row2['claveplaza']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Movimiento Plaza'));
    $pdf->Cell(90, 10, utf8_decode($row2['movimientoPlaza']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Tipo de plazas.'));
    $pdf->Cell(90, 10, utf8_decode($row2['tipoPlaza']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Total de horas.'));
    $pdf->Cell(90, 10, utf8_decode($row2['totalHoras']), 1, 1, 'C', 0);
    
    $pdf->Cell(80,10,utf8_decode('Nivel de categorias'));
    $pdf->Cell(90, 10, utf8_decode($row2['nivelCategoria']), 1, 1, 'C', 0);
    
}

/*Impresión grado académico */
$pdf->AddPage();


$consulta_grado_Academico ="SELECT * FROM gradoacademico WHERE RFC ='$KKS'" ;
$resultado_grado_Academico = $conn->query($consulta_grado_Academico);

while($row3 = $resultado_grado_Academico->fetch_assoc()){
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,'DATOS Grado Academico',1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('Cuenta con Licenciatura.'));
    $pdf->Cell(90, 10, utf8_decode($row3['licenciatura']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del Licenciatura.'));
    $pdf->Cell(90, 10, utf8_decode($row3['nombreLicenciatura']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Fecha obtención de la licenciatura.'));
    $pdf->Cell(90, 10, utf8_decode($row3['fechaObtencionLic']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Cuenta con especialización.'));
    $pdf->Cell(90, 10, utf8_decode($row3['especializacion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Fecha de obtención especialización.'));
    $pdf->Cell(90, 10, utf8_decode($row3['fechaObtencionEspecializacion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre especialización.'));
    $pdf->Cell(90, 10, utf8_decode($row3['nombre_Especializacion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Maestria.'));
    $pdf->Cell(90, 10, utf8_decode($row3['maestria']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Fecha de Obtención de la Maestria.'));
    $pdf->Cell(90, 10, utf8_decode($row3['fechaObtencionMaestria']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Cuenta con Doctorado.'));
    $pdf->Cell(90, 10, utf8_decode($row3['doctorado']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del doctorado.'));
    $pdf->Cell(90, 10, utf8_decode($row3['nombreDoctorado']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Fecha de obtención del doctorado.'));
    $pdf->Cell(90, 10, utf8_decode($row3['fechaObtencionDoctorado']), 1, 1, 'C', 0);

    
}

/*Impresion experiencia profesional */
$pdf->AddPage();

$consulta_experiencia_profesional ="SELECT * FROM experienciaprofesional WHERE RFC ='$KKS'" ;
$resultado_experiencia_profesional = $conn->query($consulta_experiencia_profesional);

while($row4 = $resultado_experiencia_profesional->fetch_assoc()){
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,'DATOS Experiencia profesional',1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('Experiencia Profesional.'));
    $pdf->Cell(90, 10, utf8_decode($row4['experienciaProfesional']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Años de experiencia.'));
    $pdf->Cell(90, 10, utf8_decode($row4['anosExperiencia']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Lugar de trabajo.'));
    $pdf->Cell(90, 10, utf8_decode($row4['lugarDeTrabajo']), 1, 1, 'C', 0);


}

/*Impresion Reconocimientos */
$consulta_Reconocimientos ="SELECT * FROM reconocimientos WHERE RFC ='$KKS'" ;
$resultado_Reconocimientos = $conn->query($consulta_Reconocimientos);

while($row6 = $resultado_Reconocimientos->fetch_assoc()){
    $pdf->Cell(40,10,'',0,1,'C');
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,'DATOS Reconocimientos',1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('¿Cuenta con algún reconocimiento?'));
    $pdf->Cell(90, 10, utf8_decode($row6['tieneReconocimiento']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del premio.'));
    $pdf->Cell(90, 10, utf8_decode($row6['nombrePremio']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre de las distinciones.'));
    $pdf->Cell(90, 10, utf8_decode($row6['nombreDistinciones']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre de los reconocimientos'));
    $pdf->Cell(90, 10, utf8_decode($row6['nombreDelReconocimiento']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Tipo de certificaciones'));
    $pdf->Cell(90, 10, utf8_decode($row6['tipoCertificacion']), 1, 1, 'C', 0);

}





/*Impresion Calidad en la docencia */
$pdf->AddPage();

$consulta_Calidad_en_docencia ="SELECT * FROM calidadenladocencia WHERE RFC ='$KKS'" ;
$resultado_calidad_en_docencia = $conn->query($consulta_Calidad_en_docencia);

while($row5 = $resultado_calidad_en_docencia->fetch_assoc()){
    $pdf->Cell(40,10,'',0,1,'C');
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,'DATOS Calidad en la docencia',1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('¿Es miembro del SNI?'));
    $pdf->Cell(90, 10, utf8_decode($row5['miembroDelSNI']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nivel del SNI.'));
    $pdf->Cell(90, 10, utf8_decode($row5['nivelDeSNI']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Inicio en el SNI.'));
    $pdf->Cell(90, 10, utf8_decode($row5['vigenciaInicioSNI']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Vigencia en el SNI'));
    $pdf->Cell(90, 10, utf8_decode($row5['vigenciaFinSNI']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('¿Es miembro del cuerpo académico?'));
    $pdf->Cell(90, 10, utf8_decode($row5['miembroDeCuerpoAcademico']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del cuerpo académico.'));
    $pdf->Cell(90, 10, utf8_decode($row5['nombreDelCuerpoAcademico']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nivel del cuerpo académico.'));
    $pdf->Cell(90, 10, utf8_decode($row5['nivelCuerpoAcademico']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Inicio del cuerpo académico.'));
    $pdf->Cell(90, 10, utf8_decode($row5['vigenciaInicioCuerpo']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Final del cuerpo académico.'));
    $pdf->Cell(90, 10, utf8_decode($row5['vigenciaFinCuerpo']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Perfil deseable PRODEP.'));
    $pdf->Cell(90, 10, utf8_decode($row5['reconocimientoPerfilDeseablePRODEP']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Inicio en PRODEP.'));
    $pdf->Cell(90, 10, utf8_decode($row5['vigenciaInicioPRODEP']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Vigencia de Prodep.'));
    $pdf->Cell(90, 10, utf8_decode($row5['vigenciaFinPRODEP']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Participación en PRODEP.'));
    $pdf->Cell(90, 10, utf8_decode($row5['participacionPRODEP']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Inicio de participación.'));
    $pdf->Cell(90, 10, utf8_decode($row5['periodoInicParti']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Finalización de la participación.'));
    $pdf->Cell(90, 10, utf8_decode($row5['periodoFinParti']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nivel Alcanzado.'));
    $pdf->Cell(90, 10, utf8_decode($row5['nivelAlcanzado']), 1, 1, 'C', 0);


}

/*Impresion Formación docente */

$pdf->AddPage();


$consulta_Formacion_docente ="SELECT * FROM formaciondocente WHERE RFC ='$KKS'" ;
$resultado_Formacion_docente = $conn->query($consulta_Formacion_docente);

while($row7 = $resultado_Formacion_docente->fetch_assoc()){
    $pdf->Cell(40,10,'',0,1,'C');
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,utf8_decode('DATOS Formación docente.'),1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('Licenciatura'));
    $pdf->Cell(90, 10, utf8_decode($row7['licenciatura_formacion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Periodo de inicio del curso.'));
    $pdf->Cell(90, 10, utf8_decode($row7['periodoiniCurso']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Periodo final del curso.'));
    $pdf->Cell(90, 10, utf8_decode($row7['periodoFinCurso']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del curso.'));
    $pdf->Cell(90, 10, utf8_decode($row7['nombreCurso']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del diplomado.'));
    $pdf->Cell(90, 10, utf8_decode($row7['nombreDiplomado']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre del taller.'));
    $pdf->Cell(90, 10, utf8_decode($row7['nombreTaller']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Duración.'));
    $pdf->Cell(90, 10, utf8_decode($row7['duracion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Total de horas.'));
    $pdf->Cell(90, 10, utf8_decode($row7['totalHoras']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Total Cursos'));
    $pdf->Cell(90, 10, utf8_decode($row7['totalCursos']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Total de diplomados.'));
    $pdf->Cell(90, 10, utf8_decode($row7['totalDiplomados']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Total de talleres.'));
    $pdf->Cell(90, 10, utf8_decode($row7['totalTalleres']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Total de Cursos Docentes.'));
    $pdf->Cell(90, 10, utf8_decode($row7['totalCursosDocentes']), 1, 1, 'C', 0);



    
}

/*Impresion Manejo de idiomas */
$pdf->AddPage();


$consulta_Manejo_de_idiomas ="SELECT * FROM manejodeidiomas WHERE RFC ='$KKS'" ;
$resultado_Manejo_de_idiomas = $conn->query($consulta_Manejo_de_idiomas);

while($row8 = $resultado_Manejo_de_idiomas->fetch_assoc()){
    $pdf->Cell(40,10,'',0,0,'C');
    $pdf->Cell(100,10,utf8_decode('DATOS Formación docente.'),1,1,'C');
    $pdf->Cell(40,10,'',0,1,'C');

    $pdf->Cell(80,10,utf8_decode('Idioma'));
    $pdf->Cell(90, 10, utf8_decode($row8['idioma']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nivel alcanzado'));
    $pdf->Cell(90, 10, utf8_decode($row8['nivel']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('¿Obtuvo alguna certificación?'));
    $pdf->Cell(90, 10, utf8_decode($row8['certificacion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Nombre de la certificación'));
    $pdf->Cell(90, 10, utf8_decode($row8['nombreDeLaCertificacion']), 1, 1, 'C', 0);

    $pdf->Cell(80,10,utf8_decode('Licenciatura'));
    $pdf->Cell(90, 10, utf8_decode($row8['licenciatura_manejo']), 1, 1, 'C', 0);

    
}

}

$pdf->Output();
?>


