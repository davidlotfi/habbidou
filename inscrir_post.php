<?php

  require_once('include/Connexion.php');

  $message_erro='';
  $message_class='';

function check_pseudo($pseudo)
{
  global $dbd;

  $req1=$dbd->prepare('SELECT COUNT(*) AS nb_pseudo FROM utilisateur WHERE nom_user = ?');
  $req1->execute(array($pseudo));
  $nb_pseudo = $req1->fetch();
  $req1->closeCursor();
  return $nb_pseudo;
}


function AjouterUser()
{
  global $dbd;

  $req=$dbd->prepare('INSERT INTO utilisateur(nom_user,motpass)VALUES(:username,:motpass)');
  $req->execute(array(
    'username'=>$_POST['nom_user'],
    'motpass'=>$_POST['motpass'] ));
  $req->closeCursor();
}


//vérification ...
if (isset($_POST['commit'])) {
  if (strlen($_POST['nom_user']) >=10 and strlen($_POST['motpass']) >=8) {
    if ($_POST['motpass']==$_POST['Confmotpass']) {
      $pseudo=$_POST['nom_user'];
      $nb_pseudo=check_pseudo($pseudo);

      if ($nb_pseudo[0]==0) {
        AjouterUser();
        session_start();
        $_SESSION['pseudo'] = $_POST['nom_user'];
        header('location:index.php');
      }else {
        $message_erro="Ce nom il exist dejat !";
        $message_class='flash flash-full';

      }

    }else {
       $message_erro="La confirmation de mot de pass est invalide !";
       $message_class='flash flash-full';

      }

  }else {
       $message_erro="La taille de nom de utilisateur doit etre au moin 10 caractére !";
       $message_class='flash flash-full';

    }

 }

 ?>
