<?php
require('../lib/fpdf/fpdf.php');

function txt($s) {
    return utf8_decode($s);
}

function mkPdf($aParams) {
    //var_dump($aParams);
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,txt('Réservation du vol '.$aParams['vol'])) ;
    $pdf->Ln();
    //
    //---------------------------------
    $pdf->SetFont('Arial','',12);

    $pdf->Cell(40,10,txt('Départ: '.$aParams['depart']));
    $pdf->Ln();
    $pdf->Cell(40,10,txt('Arrivée: '.$aParams['arrivee']));
    $pdf->Ln();
    $pdf->Ln();
    //--------------------------------- client
    $pdf->Cell(40,10,txt('Client: '.$aParams['client']));
    $pdf->Ln();
    $pdf->Cell(40,10,txt('Adresse: '.$aParams['adr_rue']));
    $pdf->Ln();
    /*
    'gnc_id' => string '1' (length=1)
    'rsr_num' => string '1' (length=1)
    'client' => string 'Dino Zor' (length=8)
    'adr_rue' => string 'Rue des LÃ©zards' (length=16)
    'adr_cp' => string '75014' (length=5)
    'adr_ville' => string 'Paris' (length=5)
    'vol' => string 'AF660' (length=5)
    'depart' => string 'Roissy-CDG: 2018-01-16 08:00:00' (length=31)
    'arrivee' => string 'John-F-Kennedy: 2018-01-16 08:00:00' (length=35)
    'prix' => string '277' (length=3)
    'prix_calc' => string '554' (length=3)
    'nbPlaces' => string '2' (length=1)    
    */
    //
    $pdf->Output('I', 'res_'.$aParams['vol'].'.pdf');
    //

}

?>
