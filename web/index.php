<?php
  // --- router
  // --- routes to controller depending on action
  //
  if(isset($_REQUEST['action'])) {
    switch($_REQUEST['action']) {
      case 'reservation':
        header("Location: controller/reservation.php");
        break;
      //
      case 'catalog':
        header("Location: controller/catalog.php");
        break;
        //
    }

  }
  //
  header("Location: views/home.php");
  //
 ?>
