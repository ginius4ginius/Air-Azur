<?php session_start();?>
<!DOCTYPE html>
<?php include_once("head.php");?>
<html>
<body>
  <div class="top">
  <center>  <img src="../img/banniere.png" alt="logo"></center>
  </div>
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
</div>
<?php include_once("foot.php");?>
</body>
