<?php

require('fpdm.php');
/*
$empresa = $_GET['empresa'];
$empresa2 = $_GET['empresa2'];
$telef = $_GET['telef'];
$fecha = $_GET['fecha'];
$direccion = $_GET['direccion']; 
$nom = $_GET['nom'];
$apellido = $_GET['apellido']; 

$Nombre = $nom." ".$apellido; 
$cedula = $_GET['cedula'];
$cargo = $_GET['cargo'];
$sueldo = $_GET['sueldo'];
$cod1 = $_GET['cod1'];
$concepto1 = $_GET['concepto1'];
$cant1 = $_GET['cant1'];
$deduc1 = $_GET['deduc1']; */
 
$fields = array(

	'fecha' => '4/04/2016',
	'empresa' => 'AMOVENCA',
	'empresa2' => 'Aplicaciones Moviles de Venezuela',
	'telef'   => '04149656522',
	'direccion' => 'C.C. Caminos del Doral',
	/*'empresa2' => $empresa2,
	'empresa' => $empresa,
    'Nombre'    => $Nombre, //nombre del empleado
	'fecha' => $fecha,
	'telef'   => $telef,
	'direccion' => $direccion,
    'cedula' => $cedula,
    'sueldo' => $sueldo,
    'cargo'    => $cargo,*/
/*
	'cod1' => $cod1,
    'concepto1' => $concepto1,
    'cant1' => $cant1,
    'asig1' => $sueldo,
    'deduc1' => $deduc1,
*/
    'cod2' => '002',
    'concepto2' => 'Horas Extras',
    'cant2' => '1',
    'asig2' => '100',
    'deduc2' => '0',

    'cod3' => '003',
    'concepto3' => 'Horas Nocturnas',
    'cant3' => '1',
    'asig3' => '200',
    'deduc3' => '0',

    //'totaldeduc' => '500',
    //'totalasig' => '11500',
    'total' => '11000',
    //'Nombre2' => 'stephi',
    //'cedula2' => '123',
);

$pdf = new FPDM('fmto_recibo3.pdf');
$pdf->Load($fields, true); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();
?>
