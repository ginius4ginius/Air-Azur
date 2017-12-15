<?php
  if(isset($_REQUEST['action'])) {
    switch($_REQUEST['action']) {
      case 'reservation':
        header("Location: views/reservation.php");
        //
        echo "Hello reservation";
        break;
      //
      case 'catalog':
        //header("Location: views/reservation.php");
        echo "Hello catalog";
        break;
      //
    }

  }
  //
  echo "Hello word!!!!";

 ?>
