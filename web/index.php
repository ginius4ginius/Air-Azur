<?php
//
$sLocation = "views/home.php"; //default location route
//
//--------------------------------------- route
if(isset($_REQUEST['action'])) {
  switch($_REQUEST['action']) {
    case 'reservation':
      $sLocation = "controller/reservation.php";
      break;
    //
    case 'catalog': 
      $sLocation = "controller/catalog.php";
      break;
    //
  }
}
//----------- go to location
header("Location: $sLocation");
//exit();
//
 ?>
