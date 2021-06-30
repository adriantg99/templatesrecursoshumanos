<?php 
include_once 'accion.php';

$modelo = new autocompletar();


$texto = $_GET['BusquedaPDF'];

$res = $modelo->buscar($texto);

echo json_encode($res);

?>