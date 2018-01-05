<?php
  require_once('DataLink.php');
  //
  function getReservations($aFilters) {
    //----------------------
    $aRes = [
      ['reservation' => '4d55d',
      'nom' => 'Reno',
      'prenom' => 'Jean',
      'numero vol' => 'AF410',
      'départ' => '2018-01-15',
      'nb places' => '3'],
      ['reservation' => '4d588',
      'nom' => 'Moine',
      'prenom' => 'Claude',
      'numero vol' => 'AF660',
      'départ' => '2018-01-15',
      'nb places' => '1'],
    ];
    //
    return $aRes;
  }
  

 ?>
