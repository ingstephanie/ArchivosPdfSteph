<?php

/***************************
  Sample using an FDF file
****************************/

require('fpdm.php');

$pdf = new FPDM('formato1.pdf', 'fields.fdf');
$pdf->Merge();
$pdf->Output();
?>
