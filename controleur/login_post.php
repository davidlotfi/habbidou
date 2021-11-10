<?php
require_once('C:\xampp\htdocs\doudouphp\github\version1\include\Connexion.php');
$message_erro='';
$message_class='';

function VerifierId()
{
  global $dbd;

  $req=$dbd->prepare('select id_user from utilisateur where nom_user=:pseudo and motpass=:pass ');
    $req->execute( array(
    'pseudo' => $_POST['user'] ,
    'pass' => $_POST['password'] ));
     $resultat=$req->fetch();
     $req->closeCursor();
    return $resultat;
}

 function redirect_to($location){
    header('location:'.$location);
 }

if (isset($_POST['commit'])) {
  $resultat = VerifierId();
  if (!$resultat) {
    $message_erro="failed connection !";
    $message_class='flash flash-full';
  }else {
     session_start();
     $_SESSION['id'] = $resultat['id_user'];
     $_SESSION['pseudo'] = $_POST['user'];
     redirect_to("ajouteProd.php");
  }
}


 ?>
