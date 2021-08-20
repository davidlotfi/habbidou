<?php
  //include('include/Connexion.php');
  include('include/header.php');
  include('menu_categorie.php');
  $reponse=$dbd->query('select * from produit,brands WHERE produit.marque = brands.id ORDER BY id_produit DESC');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <style media="screen">
   body{
    background-color: #F5F5F5;
   }
  .container img{
      width:200px;
      border-radius: 12px;
      margin-right: 15px;

    }
    .ullist{

      background: #FDF6E3;
      width: 100%;
      height:180px;
      padding-bottom:25px;
      padding-left:15px;
      //border-radius: 0 0 20px 20px;
      border-bottom: 1px dotted black;
      margin-bottom: 0px;

    }
    .lilist{
      list-style: none;
      text-decoration:inherit;
      margin:0;
      padding: 10px 10px 0 10px;
    }
    .btlist{
      float:right;
      margin:auto;
    }
    .list-group{
      margin-top: 10px;
      position: fixed;
    }
    .list-group-item{
      padding:8px;
    }
  </style>
  <body>
    <br><br><br><br>
     <div class="container col-lg-8 mb-4">

       <?php
         while($donnes=$reponse->fetch()){
         $content = $donnes['imagereal'];
         $datelist= strtotime($donnes['date']);
             ?>
       <ul class="ullist">
         <li class="lilist">

           <img class="float-left" src="imagesProd/<?php if(empty($donnes['image'])){
                                       echo'image.png';}echo htmlspecialchars($donnes['image']);?>"style="height:150px" />
           <div class="info">
             <h6 class="card-title text-primary"><?php echo htmlspecialchars($donnes['nom']); ?></h6>

           </div>
           <figcaption><?php echo htmlspecialchars($donnes['description']); ?></figcaption>
           <h6 class="text-success"><?php echo htmlspecialchars($donnes['prix']); ?>  DA</h6>
           <small class="text-muted"><?php echo htmlspecialchars(date('Y-m-d à H:i',$datelist)); ?> </small>
            <a href="iteminfo.php?billet=<?php echo htmlspecialchars($donnes['id_produit']);?>" class="btn btn-primary btlist" target="_blank">Détails</a>
         </li>

       </ul>
     <?php }
     $reponse->closeCursor();

      ?>

     </div>

    
  <?php include('include/footer.php'); ?>
