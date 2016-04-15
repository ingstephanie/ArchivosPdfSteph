<?php

// Form data:

/*$fname      = 'John';
$lname      = 'Smith';
$occupation = 'Teacher';
$age        = '45';
$gender     = 'male';*/

	$empresa = 'AMOVENCA';
	$empresa2 = 'AplicacionesMoviles';
	$telef   = '0261';
	$fecha = '31marzo';
	$direccion = 'CC Caminos del Doral';
    $Nombre    = 'Steph';
    $cedula = '23466951';
    $cargo    = 'Programador';
    $sueldo = '12000';
    $cod1 = 'Pago1';
    $concepto1 = 'salario base';
    $cant1 = '1';
    $asig1 = '5000';
    $deduc1 = '0';
    $cod2 = 'Pago2';
    $concepto2 = 'horasextra';
    $cant2 = '1';
   	$asig2 = '2000';
    $deduc2 = '0';
    $cod3 = 'Pago3';
    $concepto3 = 'IVSS';
    $cant3 = '1';
    $asig3 ='000';
    $deduc3 = '1000';
    $cod4 = 'Pago4';
    $concepto4 = 'LPH';
    $cant4 = '1';
    $asig4 ='00';
    $deduc4 = '100';
    $cod5 = 'Pago5';
    $concepto5 = 'Prestaciones';
    $cant5 = '1';
    $asig5= '00';
    $deduc5 = '10000';
    $cod6 = 'Pago6';
    $concepto6 = 'otros';
    $cant6 = '1';
    $asig6 = '00';
    $deduc6 = '00';
    $cod7 = 'Pago7';
    $concepto7 = 'otros';
    $cant7 = '1';
    $asig7 = '00';
    $deduc7 = '00';
    $cod8 = 'Pago8';
    $concepto8 = 'otros';
    $cant8 = '1';
    $asig8 = '00';
    $deduc8 = '00';
    $cod9 = 'Pago9';
    $concepto9 = 'otros';
    $cant9 = '1';
    $asig9 = '00';
    $deduc9 = '00';
    $cod10 = 'Pago10';
    $concepto10 = 'otros';
    $cant10 = '1';
    $asig10 ='00';
    $deduc10 = '00';
    $cod11  =  'Pago11';
    $concepto11  =  'otros';
    $cant11  =  '1';
    $asig11 = '00';
    $deduc11 = '00';
    $cod12 = 'Pago12';
    $concepto12 = 'otros';
    $cant12 = '1';
    $asig12 = '00';
    $deduc12 = '00';
    $total = '12000';

// FDF header section
$fdf_header = <<<FDF
%FDF-1.2
%,,oe"
1 0 obj
<<
/FDF << /Fields [
FDF;

// FDF footer section
$fdf_footer = <<<FDF
"] >> >>
endobj
trailer
<</Root 1 0 R>>
%%EOF;
FDF;

// FDF content section
$fdf_content  = "<</T(nombre_empresa)/V({$empresa})>>";
$fdf_content .= "<</T(info_empresa)/V({$empresa2})>>";
$fdf_content .= "<</T(telefono)/V({$telef})>>";
$fdf_content .= "<</T(fecha_elaboracion)/V({$fecha})>>";
$fdf_content .= "<</T(direccion)/V({$direccion})>>";
$fdf_content  = "<</T(nombre_empleado)/V({$nombre})>>";
$fdf_content .= "<</T(cedula)/V({$cedula})>>";
$fdf_content .= "<</T(puesto)/V({$cargo})>>";
$fdf_content .= "<</T(salario)/V({$sueldo})>>";

$fdf_content .= "<</T(cod1)/V({$cod1})>>";
$fdf_content  = "<</T(concepto1)/V({$concepto1})>>";
$fdf_content .= "<</T(cant1)/V({$cant1})>>";
$fdf_content .= "<</T(asig1)/V({$asig1})>>";
$fdf_content .= "<</T(deduc1)/V({$deduc1})>>";

$fdf_content .= "<</T(cod2)/V({$cod2})>>";
$fdf_content  = "<</T(concepto2)/V({$concepto2})>>";
$fdf_content .= "<</T(cant2)/V({$cant2})>>";
$fdf_content .= "<</T(asig2)/V({$asig2})>>";
$fdf_content .= "<</T(deduc2)/V({$deduc2})>>";

$fdf_content .= "<</T(cod3)/V({$cod3})>>";
$fdf_content  = "<</T(concepto3)/V({$concepto3})>>";
$fdf_content .= "<</T(cant3)/V({$cant3})>>";
$fdf_content .= "<</T(asig3)/V({$asig3})>>";
$fdf_content .= "<</T(deduc3)/V({$deduc3})>>";

$fdf_content .= "<</T(cod4)/V({$cod4})>>";
$fdf_content  = "<</T(concepto4)/V({$concepto4})>>";
$fdf_content .= "<</T(cant4)/V({$cant4})>>";
$fdf_content .= "<</T(asig4)/V({$asig4})>>";
$fdf_content .= "<</T(deduc4)/V({$deduc4})>>";

$fdf_content .= "<</T(cod5)/V({$cod5})>>";
$fdf_content  = "<</T(concepto5)/V({$concepto5})>>";
$fdf_content .= "<</T(cant5)/V({$cant5})>>";
$fdf_content .= "<</T(asig5)/V({$asig5})>>";
$fdf_content .= "<</T(deduc5)/V({$deduc5})>>";

$fdf_content .= "<</T(cod6)/V({$cod6})>>";
$fdf_content  = "<</T(concepto6)/V({$concepto6})>>";
$fdf_content .= "<</T(cant6)/V({$cant6})>>";
$fdf_content .= "<</T(asig6)/V({$asig6})>>";
$fdf_content .= "<</T(deduc6)/V({$deduc6})>>";

$fdf_content .= "<</T(cod7)/V({$cod7})>>";
$fdf_content  = "<</T(concepto7)/V({$concepto7})>>";
$fdf_content .= "<</T(cant7)/V({$cant7})>>";
$fdf_content .= "<</T(asig7)/V({$asig7})>>";
$fdf_content .= "<</T(deduc7)/V({$deduc7})>>";

$fdf_content .= "<</T(cod8)/V({$cod8})>>";
$fdf_content  = "<</T(concepto8)/V({$concepto8})>>";
$fdf_content .= "<</T(cant8)/V({$cant8})>>";
$fdf_content .= "<</T(asig8)/V({$asig8})>>";
$fdf_content .= "<</T(deduc8)/V({$deduc8})>>";

$fdf_content .= "<</T(cod9)/V({$cod9})>>";
$fdf_content  = "<</T(concepto9)/V({$concepto9})>>";
$fdf_content .= "<</T(cant9)/V({$cant9})>>";
$fdf_content .= "<</T(asig9)/V({$asig9})>>";
$fdf_content .= "<</T(deduc9)/V({$deduc9})>>";

$fdf_content .= "<</T(cod10)/V({$cod10})>>";
$fdf_content  = "<</T(concepto10)/V({$concepto10})>>";
$fdf_content .= "<</T(cant10)/V({$cant10})>>";
$fdf_content .= "<</T(asig10)/V({$asig10})>>";
$fdf_content .= "<</T(deduc10)/V({$deduc10})>>";

$fdf_content .= "<</T(cod11)/V({$cod11})>>";
$fdf_content  = "<</T(concepto11)/V({$concepto11})>>";
$fdf_content .= "<</T(cant11)/V({$cant11})>>";
$fdf_content .= "<</T(asig11)/V({$asig11})>>";
$fdf_content .= "<</T(deduc11)/V({$deduc11})>>";

$fdf_content .= "<</T(cod12)/V({$cod12})>>";
$fdf_content  = "<</T(concepto12)/V({$concepto12})>>";
$fdf_content .= "<</T(cant12)/V({$cant12})>>";
$fdf_content .= "<</T(asig12)/V({$asig12})>>";
$fdf_content .= "<</T(deduc12)/V({$deduc12})>>";

$fdf_content .= "<</T(total)/V({$total})>>";

$content = $fdf_header . $fdf_content , $fdf_footer;

// Creating a temporary file for our FDF file.
$FDFfile = tempnam(sys_get_temp_dir(), gethostname());

file_put_contents($FDFfile, $content);

// Merging the FDF file with the raw PDF form
exec("pdftk form.pdf fill_form $FDFfile fmto_recibo.pdf"); 

// Removing the FDF file as we don't need it anymore
unlink($FDFfile);