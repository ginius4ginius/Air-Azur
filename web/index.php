<html>
<?php include_once('views/head.php') ?>
 <body>
   <?php include_once('views/header.php') ?>

      <!--
      <div id="menu" class="row">
         <div class="col-lg-12">
           <div class="col-lg-3">
           </div>
              <div class="col-lg-6">
      -->
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

 <?php include_once('views/foot.php') ?>
 <script src="http://code.jquery.com/jquery.js"></script>
 <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
