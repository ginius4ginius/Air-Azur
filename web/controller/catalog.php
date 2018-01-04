<?php
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

?>