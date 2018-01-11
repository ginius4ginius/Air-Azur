<?php session_start();?>
<?php  include_once("../model/model.php")?>
<?php $reponse = getAgences();

          if(!is_array($reponse)){
          return $result;}

          $ref = false;

          foreach($reponse as $key => $value) {
          if( $value == $_SESSION["nom"] )
          $ref = true;
          }
          var_dump($reponse);
            var_dump($_SESSION);
            var_dump($ref);

          if(!isset($_SESSION["nom"]) /*|| $ref == false*/){

            ?>

      }
  ?>
