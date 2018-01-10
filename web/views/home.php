<?php session_start();?>
<!DOCTYPE html>
<html>
  <?php include_once('head.php')?>
  <body>
    <div id="container">
      <?php include_once('header.php')?>
      <div>
        <div id="accueil">

          <?php /* include_once("../model/model.php")?>
        <?php $reponse = getAgences();

          if(!is_array($reponse))
          return $result;

          foreach($reponse as $key => $value) {
            if( !isset($_SESSION["nom"])){

            ?>
          <div id = "formulaireConnexion">
                <br />
                <form  method = "POST" action="../controller/traitementConnexion.php">
                  <fieldset id = "connexion">
                      <label>Login : </label>
                        <input type="text" name="login" size="30"/>
                      <label>   Mot de passe : </label>
                        <input type="password" name="motDePasse" size="30"/>
                  </fieldset>
                  <p>
                    <input type="submit" value="Connexion">
                    <input type="reset" value="Effacer">
                  </p>
                </form>
        <?php    echo "</div>";
      }
     else if( $value["code_agence"]!=$_SESSION["nom"]){
        ?>
      <div id = "formulaireConnexion">
            <br />
            <form  method = "POST" action="../controller/traitementConnexion.php">
              <fieldset id = "connexion">
                  <label>Login : </label>
                    <input type="text" name="login" size="30"/>
                  <label>   Mot de passe : </label>
                    <input type="password" name="motDePasse" size="30"/>
              </fieldset>
              <p>
                <input type="submit" value="Connexion">
                <input type="reset" value="Effacer">
              </p>
            </form>
    <?php    echo "</div>";}
  }*/?>

          <br />
          <div id="titreAccueil">
            Bienvenue sur l'intranet d'AIR AZUR
          </div>

          <br />

          <div id="textAccueil">
            <br /><br /><br />
            À propos d’Air Azur
            <br />
  Air Azur est l'un des plus importants transporteur aérien Français spécialisé dans les voyages vacances. Chaque année, la société transporte environ 3 millions de passagers vers près de 3 destinations dans 3 pays à l’aide d’une flotte de gros porteurs Airbus. La société emploie environ 2 personnes. Air Azur est une filiale de CDI A.A. inc., un voyagiste international intégré qui compte plus de 2 pays de destination et qui distribue des produits dans plus de 3 pays. Air Azur a été nommée meilleure ligne aérienne vacances en Amérique du Nord lors de la remise de prix annuelle des World Airline Awards organisée par Skytrax en juin 2015.
  <br />
  CDI A.A. inc. est un voyagiste international intégré qui compte plus de 2 pays de destination et qui distribue des produits dans plus de 3 pays. Spécialiste du voyage vacances, Transat est principalement active en France. CDI, dont le siège social est situé à Cachan, est aussi présente dans le transport aérien, l’hôtellerie.
  <br />
  Chez CDI, nous reconnaissons que l'environnement, les collectivités qui accueillent les voyageurs, la diversité culturelle et nos relations avec nos employés, clients et partenaires sont d'une importance capitale. Voilà pourquoi CDI a adopté une politique de responsabilité d’entreprise en 2008. De plus, Air Azur s’engage à réduire son empreinte écologique et a adopté une politique environnementale.

          </div>

        </div>
      </div>
    </div>
    <?php include_once('foot.php')?>
  </body>
  <script>
    $( document ).ready(function() {
      console.log( "home and ready!" );
      $( "#menu_home" ).addClass('active');
    });
  </script>
</html>
