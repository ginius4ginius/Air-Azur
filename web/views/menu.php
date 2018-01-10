
<div id="menu" class="row">
    <div class="col-lg-12">
      <?php/*  include_once("../model/model.php")?>

      <?php
      function reaction(){
        session_unset();
        session_destroy();
        header("Location: /index.php");
      }
    ?>

    <?php $reponse = getAgences();

      if(!is_array($reponse))
      return $result;

      foreach($reponse as $key => $value) {

        if(!isset($_SESSION["nom"]) ){}
      else if( $value["code_agence"]==$_SESSION["nom"] ){
      */?>
        <nav class="navbar navbar-default">
          <ul class="nav navbar-nav">
              <li id="menu_home"> <a href="../index.php?action=home"><span class="glyphicon glyphicon-home"></span>   Accueil </a> </li>
              <li id="menu_cat" > <a href="../index.php?action=catalog"><span class="glyphicon glyphicon-plane"></span>    Liste des vols</a> </li>
              <li id="menu_res" > <a href="../index.php?action=reservation"><span class="glyphicon glyphicon-edit"></span>   Réservations</a> </li>
          </ul>
          <button type="button" class="btn btn-default navbar-btn pull-right">Deconnexion</button>
          </nav>
    <!--  <button type="button" value="deconnexion"class="btn btn-default navbar-btn pull-right" onClick="reaction()">Deconnexion</button>
-->

    <?php/*  echo  "</nav>";}}*/?>

  </div>
</div>
