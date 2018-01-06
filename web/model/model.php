<?php
require_once('DataLink.php');
//
//------------------------------------------------- clients
function addClient($aParams) {
  $oDl = new DataLink();
  $sQuery = "insert into client (nom, prenom, adr_cp, adr_rue, adr_ville)
  values(:nom, :prenom, :adr_cp, :adr_rue, :adr_ville)";
  //  
  return $oDl->query($sQuery, $aParams);  
}

function deleteClient($aParams) {
  $oDl = new DataLink();
  $sQuery = "delete from client where cln_id = :cln_id";
  //  
  return $oDl->query($sQuery, $aParams);  
}

function getClients($aParams=array()) {
  $oDl = new DataLink();
  $sQuery = "select * from client";
  //
  return $oDl->getResultSet($sQuery);    
}
//
//------------------------------------------------- vols
function getVolGs() {
  $oDl = new DataLink();
  $sQuery = "select * from vol_g";
  //
  return $oDl->getResultSet($sQuery);
}

function getVols() {
  $oDl = new DataLink();
  $sQuery = "select date_dep, date_arr, vol_g.*   
  from vol join vol_g on vol.vlg_num = vol_g.vlg_num";
  //
  return $oDl->getResultSet($sQuery);
}
//
//------------------------------------------------- reservations
function getResLastNum($iAgence) {
  $oDl = new DataLink();
  $sQuery = "select max(rsr_num) as lastId from reservation where gnc_id = $iAgence";
  //
  $a = $oDl->getResultSet($sQuery);
  if( is_array($a) && isset($a[0]) && is_array($a[0]) && array_key_exists('lastId', $a[0]))
    return $a[0]['lastId'];
  //
  return false;
}
//
function addReservation($aParams) {
  $oDl = new DataLink();
  //
  if(empty($aParams[':gnc_id']))
    $aParams[':gnc_id'] = 1;
  //
  $aParams[':rsr_num'] = getResLastNum($aParams[':gnc_id'])+1;
  $aParams[':date_reservation'] = date("Y-m-d");
  //
  $sQuery = "insert into reservation (gnc_id, rsr_num, cln_id, date_dep, vlg_num, nbr_places_res, date_reservation)
  values(:gnc_id, :rsr_num, :cln_id, :date_dep, :vlg_num, :nbr_places_res, :date_reservation)";
  //  
  return $oDl->query($sQuery, $aParams);  
}
//
function deleteReservation($aParams) {
  $oDl = new DataLink();
  $sQuery = "delete from reservation where gnc_id = :gnc_id and rsr_num = :rsr_num";
  //  
  return $oDl->query($sQuery, $aParams);  
}
//
function updateReservation($aParams) {
  $oDl = new DataLink();
  $sQuery = "update reservation set nbr_places_res = :nbr_places_res, date_reservation=curdate()
    where gnc_id = :gnc_id and rsr_num = :rsr_num";
  //  
  return $oDl->query($sQuery, $aParams);  
}
//
function getReservations($aFilters=array()) {
  $oDl = new DataLink();
  $sQuery = "SELECT gnc_id, rsr_num, nom as Nom, prenom as 'Prénom', 
    v.vlg_num as Vol, concat(ad.arp_nom, ': ',v.date_dep,' ',g.heure_dep) as 'Départ',
    concat(aa.arp_nom, ': ', v.date_dep,' ',g.heure_dep) as 'Arrivée',
    nbr_places_res as 'Places', prix * nbr_places_res as Prix, date_reservation as 'Date_réservation'
    FROM reservation r join client c on r.cln_id = c.cln_id
    join vol v on v.date_dep = r.date_dep and v.vlg_num = r.vlg_num
    join vol_g g on v.vlg_num = g.vlg_num
    join aeroport ad on ad.code=g.code_arp_dep
    join aeroport aa on aa.code=g.code_arp_arr";
    //
  return $oDl->getResultSet($sQuery);    
}

function getReservation($aParams) {
  $oDl = new DataLink();
  $sQuery = "SELECT gnc_id, rsr_num, concat(prenom, ' ', nom) as client,
    v.vlg_num as vol, concat(ad.arp_nom, ': ',v.date_dep,' ',g.heure_dep) as 'depart',
    concat(aa.arp_nom, ': ', v.date_dep,' ',g.heure_dep) as 'arrivee',    
    prix, nbr_places_res as nbPlaces
    FROM reservation r join client c on r.cln_id = c.cln_id
    join vol v on v.date_dep = r.date_dep and v.vlg_num = r.vlg_num
    join vol_g g on v.vlg_num = g.vlg_num
    join aeroport ad on ad.code=g.code_arp_dep
    join aeroport aa on aa.code=g.code_arp_arr
    where gnc_id = :gnc_id and rsr_num = :rsr_num";
  //
  $a = $oDl->getResultSet($sQuery, $aParams);
  if( is_array($a) && isset($a[0]) && is_array($a[0]))
    return $a[0];
  //
  return false;
}

 ?>
