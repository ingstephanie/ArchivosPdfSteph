<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');
/*
$empresa = $_GET['empresa'];
$empresa2 = $_GET['empresa2'];
$telef = $_GET['telef'];
$fecha = $_GET['fecha'];
$direccion = $_GET['direccion']; */
$nom = $_GET['nom'];
$apellido = $_GET['apellido']; 

$Nombre = $nom." ".$apellido; 
$cedula = $_GET['cedula'];
$cargo = $_GET['cargo'];
$sueldo = $_GET['sueldo'];
/*
$HEC = $_GET['HEC']; 
$HEA = $_GET['HEA'];
$HENC = $_GET['HENC'];
$HENA = $_GET['HENA'];
$HNC = $_GET['HNC']; 
$HNA = $_GET['HNA'];
$DTC = $_GET['DTC'];
$DTA = $_GET['DTA'];
$DFC = $_GET['DFC']; 
$DFA = $_GET['DFA'];
$DNTC = $_GET['DNTC'];
$DNTA = $_GET['DNTA'];
$SS = $_GET['SS']; 
$PE = $_GET['PE'];
$PA = $_GET['PA'];
$PVH = $_GET['PVH'];
$neto = $_GET['neto']; */

$fields = array(
	'empresa' => 'AMOVENCA',
	'empresa2' => 'Aplicaciones Moviles de Venezuela',
	'telef'   => '04149656522',
	'fecha' => '4/04/2016',
	'direccion' => 'C.C. Caminos del Doral',
    'Nombre'    => $Nombre, //nombre del empleado
    'cedula' => $cedula,
    'cargo'    => $cargo,
    'sueldo' => $sueldo,

	'cod1' => '001',
    'concepto1' => 'Sueldo',
    'cant1' => '1',
    'asig1' => number_format($sueldo,2,',','.'),
    'deduc1' => '0',

    'cod2' => '002',
    'concepto2' => 'Horas Extras',
    'cant2' => $HEC,
    'asig2' => number_format($HEA,2,',','.'),
    'deduc2' => '0',

    'cod3' => '003',
    'concepto3' => 'Horas Nocturnas',
    'cant3' => $HNC,
    'asig3' => number_format($HNA,2,',','.'),
    'deduc3' => '0',

    'cod4' => '004',
    'concepto4' => 'Horas Extras Nocturnas',
    'cant4' => $HENC,
    'asig4' => number_format($HENA,2,',','.'),
    'deduc4' => '0',

    'cod5' => '005',
    'concepto5' => 'Domingos Trabajados',
    'cant5' => $DTC,
    'asig5' => number_format($DTA,2,',','.'),
    'deduc5' => '0',

    'cod6' => '006',
    'concepto6' => 'Dias Feriados',
    'cant6' => $DFC,
    'asig6' => number_format($DFA,2,',','.'),
    'deduc6' => '00',
    

    'cod7' => '007',
    'concepto7' => 'Dias No Trabajados',
    'cant7' => $DNTC,
    'asig7' => '00',
    'deduc7' => number_format($DNTA,2,',','.'),

    'cod8' => '008',
    'concepto8' => 'Seguro Social',
    'cant8' => '1',
    'asig8' => '00',
    'deduc8' => number_format($SS,2,',','.'),

    'cod9' => '009',
    'concepto9' => 'Prestaciones Sociales',
    'cant9' => '1',
    'asig9' => number_format($PE,2,',','.'),
    'deduc9' => '00',

    'cod10' => '010',
    'concepto10' => 'Prestamo Adelantado',
    'cant10' => '1',
    'asig10' => '00',
    'deduc10' => $PA,

    'cod11' => '011',
    'concepto11' => 'Ley de Politica Habitacional',
    'cant11' => '1',
    'asig11' => '00',
    'deduc11' => number_format($PVH,2,',','.'),

    'total' => '11000',
);

$pdf = new FPDM('fmto_recibo3.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf-> Image('prueba.jpeg', 80, 15, 50, 50, 'JPEG', 'http://www..amovenca.com.ve');
$pdf->Merge();
$pdf->Output();
?>
