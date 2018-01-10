<?php session_start();?>
<!DOCTYPE html>
<html>
<?php include_once('../views/head.php')?>
<?php include_once("../model/model.php")?>


  <body>
<form name="retour" action="../views/home.php" method="post">
<?php

$mess_err = "Vous avez oublié de remplir le champs : ";
$mess_err_saisie = $mess_err;
$message_err_login="";
$message_err_mdp="";

if(!empty($_POST)){

if(empty($_POST["login"])){
$mess_err_saisie= $mess_err_saisie."'Login'";
$message_err_login=$mess_err."'Login'";
}

if(empty($_POST["motDePasse"])){
$mess_err_saisie=$mess_err_saisie."'Mot de passe'";
$message_err_mdp=$mess_err."'Mot de passe'";
}

if (strlen($mess_err_saisie) > strlen($mess_err)){


  if (strlen($message_err_login) > strlen($mess_err)){?><div class="alert alert-danger">
<b>Erreur!</b> <?php echo $message_err_login."<br />" ?></div> <?php ;}
  if (strlen($message_err_mdp) > strlen($mess_err)){?><div class="alert alert-danger">
<b>Erreur!</b> <?php echo $message_err_mdp."<br />" ?></div> <?php ;}
}

else {
$message = "";
$salutation="";
$nom=$_POST["login"];
$mdp=$_POST["motDePasse"];
$_SESSION["nom"]= $nom;
// On récupère tout le contenu de la table Employe


$reponse = getAgences();
if(!is_array($reponse))
  return $result;

$trouve = false;
// On affiche chaque entrée une à une
/*while ( ($ligne = $reponse->fetch()) && $trouve == false)
{*/
  foreach($reponse as $key => $value) {
  if( $value["code_agence"]==$nom && $value["mot_de_passe"]==$mdp )
  $trouve = true;
}
if($trouve==true){
  echo '<div class="alert alert-success">
  <b>Félicitation! vous etes connecté</b>
  </div>' ;
}else{
  echo '<div class="alert alert-danger">
<b>erreur de connection</b>
</div>';
}

}
}

?>

<input type="submit" value="Accueil">
</form>

  <?php include_once('../views/foot.php')?>
  </body>
</html>
