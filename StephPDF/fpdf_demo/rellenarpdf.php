<?php

require('fpdf.php');
   
$fields = array(
	'empresa' => $empresa,
	'empresa2' => $empresa2,
	'telef'   => $telef,
	'fecha' => $fecha,
	'direccion' => $direccion,
    'Nombre'    => $Nombre,
    'cedula' => $cedula,
    'cargo'    => $cargo,
    'sueldo' => $sueldo,

    'cod1' => $cod1,
    'concepto1' => $concepto1,
    'cant1' => $cant1,
    'asig1' => $asig1,
    'deduc1' => $deduc1,

    'cod2' => 'Pago2',
    'concepto2' => 'horasextra',
    'cant2' => '1',
    'asig2' => '2000',
    'deduc2' => '0',

    'cod3' => 'Pago3',
    'concepto3' => 'IVSS',
    'cant3' => '1',
    'asig3' => '000',
    'deduc3' => '1000',

    'cod4' => 'Pago4',
    'concepto4' => 'LPH',
    'cant4' => '1',
    'asig4' => '00',
    'deduc4' => '100',

    'cod5' => 'Pago5',
    'concepto5' => 'Prestaciones',
    'cant5' => '1',
    'asig5' => '00',
    'deduc5' => '10000',

    'cod6' => 'Pago6',
    'concepto6' => 'otros',
    'cant6' => '1',
    'asig6' => '00',
    'deduc6' => '00',
    

    'cod7' => 'Pago7',
    'concepto7' => 'otros',
    'cant7' => '1',
    'asig7' => '00',
    'deduc7' => '00',

    'cod8' => 'Pago8',
    'concepto8' => 'otros',
    'cant8' => '1',
    'asig8' => '00',
    'deduc8' => '00',

    'cod9' => 'Pago9',
    'concepto9' => 'otros',
    'cant9' => '1',
    'asig9' => '00',
    'deduc9' => '00',

    'cod10' => 'cod10',
    'concepto10' => 'otros',
    'cant10' => '1',
    'asig10' => '00',
    'deduc10' => '00',

    'cod11' => 'Pago11',
    'concepto11' => 'otros',
    'cant11' => '1',
    'asig11' => '00',
    'deduc11' => '00',

    'cod12' => 'Pago12',
    'concepto12' => 'otros',
    'cant12' => '1',
    'asig12' => '00',
    'deduc12' => '00',

    'total' => '12000',
);

$pdf = new PDF();

$pdf->Load($fields, true); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output(); 
?>