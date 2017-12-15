<footer id="pied_de_page">
        <p>Copyright en-CDI6-2017/2018, tous droits réservés</p>

        <?php

        // On récupère tout le contenu de la table Employe
        //$reponse = $bdd->exec("INSERT INTO formulaire(nom,mail,idSexe,commentaire,idVilles) VALUES('".$_POST["nom"]."','".$_POST["mail"]."','".$_POST["sexe"]."','".$_POST["commentaire"]."','".$_POST["listeVilles"]."');");

        $req = $bdd->prepare('INSERT INTO utilisateur(nom,motDePasse,mail) VALUES(:nom,:motDePasse,:mail)');
        $req->execute(array(
        	'nom'=>$nom,
        	'motDePasse'=>$mdp,
          'mail'=>$mail
        	));

        }
        }

        ?>
</footer>
