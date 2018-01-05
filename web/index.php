<<<<<<< HEAD
<<<<<<< HEAD
<html>
<?php include_once('views/head.php') ?>
 <body>
   <?php include_once('views/header.php')

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
/*
=======
=======
>>>>>>> e0593f07946469e17217fb10c8683907bfce599b
<?php
//
*/

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
<<<<<<< HEAD
    /*
>>>>>>> 445552315796288620fefd25293870c7749fabd3
*/
=======
>>>>>>> e0593f07946469e17217fb10c8683907bfce599b
  }
}
//----------- go to location
header("Location: $sLocation");
//exit();
//
 ?>
<<<<<<< HEAD
 <!--
<<<<<<< HEAD
-->
 <?php include_once('views/foot.php') ?>
 <script src="http://code.jquery.com/jquery.js"></script>
 <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
<!--
=======
>>>>>>> 445552315796288620fefd25293870c7749fabd3
-->
=======
>>>>>>> e0593f07946469e17217fb10c8683907bfce599b
