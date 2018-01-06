<?php
include_once('../model/model.php');
include_once('../controller/util.php');

function getVolTable(){
  $aRes = getVols();

  foreach ($aRes as $key => $value) {
    $aAction = array();
    $aAction[] = '<button type="button"
                        class="btn btn-default btn-sm" onclick="editRes('.$value['vlg_num'].')">
    <span class="glyphicon glyphicon-file"></span>
  </button>&nbsp;';
    //
    unset($aRes[$key]['vlg_num']);
    //
    $aRes[$key]['&nbsp;'] = implode('&nbsp;',$aAction);

  }
return mkHtmlTable($aRes);
}
/*
if(isset($_REQUEST['action'])) {
  switch($_REQUEST['action']) {
    case 'add':
      //header("Location: controller/catalog_add.php");
      break;
    //
    case 'catalog':

      break;
      //
  }
}
else {
  header("Location: ../views/catalog.php");
}
*/
echo getVolTable();
?>
