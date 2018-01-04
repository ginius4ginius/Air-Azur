<html>
  <?php include_once('head.php')?>
  <body>
    <div id="container">
      <?php include_once('header.php')?>
      <div>
        <h1>Liste des vols</h1>
        <form action="../controller/catalog.php">
          <div>Afficher vols disponibles: </div>
          <!--contenu du formulaire à l'interieur -->
          <!--filtres du catalogue -->
          <input type="submit" value="Valider">
        </form>
        <div id="fly_list">
        </div>        
      </div>
    </div>
    <?php include_once('foot.php')?>
  </body>
  <script>
    $( document ).ready(function() {
      console.log( "ready to show catalog!" );
      $( "#menu_cat" ).addClass('active');
    });
  </script>
</html>