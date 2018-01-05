<?php
include_once("../model/model.php");
include_once("util.php");

function getReservationTable($aRequest) {
  //
  $result = getReservations($aRequest); 
  //
  if(!is_array($result))
    return $result; // null or error message   
  //
  //--------------------------- add buttons
  foreach($result as $k=>$v) {
    $sAction = '<button type="button" 
                        class="btn btn-default btn-sm tpAction" onclick="editRes(\''.$v['reservation'].'\')">
    <span class="glyphicon glyphicon-pencil"></span>  
  </button>&nbsp;';
    $sAction .= '<button type="button" 
                         class="btn btn-default btn-sm tpAction" onclick="deleteRes(\''.$v['reservation'].'\')" >
    <span class="glyphicon glyphicon-trash"></span>  
  </button>&nbsp;';
    $sAction .= '<button type="button" 
                         class="btn btn-default btn-sm tpAction" onclick="getPdf(\''.$v['reservation'].'\')">
    <span class="glyphicon glyphicon-file"></span>  
  </button>&nbsp;';
    //
    $result[$k]['&nbsp;'] = $sAction; 
  }
  //
  return mkHtmlTable($result);    
}

if(isset($_REQUEST['action'])) {
  switch($_REQUEST['action']) {
    case 'getList':
      echo getReservationTable($_REQUEST);
      //
      exit();
      break;
    //
    case 'delete':
      
      break;
      //
  }
  //

}  
else {
  header("Location: ../views/reservation.php");
}

?>
