<?php
require('../lib/fpdf/fpdf.php');

function txt($s) {
    return utf8_decode($s);
}

function mkPdf($aParams) {
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    $pdf->Cell(40,10,txt('Réservation du vol')) ;
    //
    
    //
    $pdf->SetFont('Arial','',12);
    
    //
    $pdf->Output('D', 'res_'.$aParams['vol'].'.pdf');
}

?>