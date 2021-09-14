<?php
// pour la securite empeche lentrer direct dans cette page
/*if (!isset($_POST['commit'])) {
  header('Location:index.php');
}*/

  require_once('include/Connexion.php');
  $message_erro='';
  $message_class='';

if (isset($_POST['commit'])) {
   if (!empty($_FILES['1']) AND !empty($_POST['_description']) AND !empty($_POST['_detail'])  AND !empty($_POST['_prix']) AND !empty($_POST['_categorie'])
        AND !empty($_POST['_telephone']) AND !empty($_POST['_willaya'])){
             AjouterProduit();
    }else {

     $message_erro='Il doit remplir toutes les champs !';
     $message_class='alert alert-danger';

   }
}

function redirect_to($location){
   header('location:'.$location);
}

function AjouterProduit(){
  global $dbd;
  $req=$dbd->prepare('INSERT INTO produit(categorie,description,detail,prix,telephone,image,image2,image3,image4,willaya) VALUES(?,?,?,?,?,?,?,?,?,?)');

  $images = image_secondaire();
  $_POST['_categorie'];
//  $_POST['_marque'];
  $_POST['_description'];
  $_POST['_detail'];
  $_POST['_prix'];
  $_POST['_telephone'];
  $_POST['_willaya'];

  $req->execute(array($_POST['_categorie'],$_POST['_description'],$_POST['_detail'],$_POST['_prix'],$_POST['_telephone'],$images[1],$images[2],$images[3],$images[4],$_POST['_willaya']));
  $req->closeCursor();
  // header('Location:ajouteProdAlert.php');
  redirect_to("ajouteProdAlert.php");

 }

function image_secondaire(){
    $i = 1;
    $arrayImg = array();
     while ($i <= 4) {
          if ($_FILES[$i]['name']!=null) {
              $arrayImg[$i] = time().'_'.$_FILES[$i]['name'];
               $ImageName = time().'_'.$_FILES[$i]['name'];
               $target= 'imagesProd/'.$ImageName;  // il faut mettre l @ de server dans URL c'est particulier dans ma machine !
               move_uploaded_file($_FILES[$i]['tmp_name'],$target);
             }else {
                 $arrayImg[$i] = "";
               }
              $i++;
         }
         return $arrayImg;
    }

/*$req=$dbd->query('SELECT  imagereal FROM produit WHERE id_produit="63"');
$donne=$req->fetch();

$content = $donne['imagereal'];
echo '<img src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $content ) . '" />';   // la methode pour afficher les meges
*/
?>
