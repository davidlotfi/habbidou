<?php include('include/header.php');
      include('menu_categorie.php');



   $nofind=0;
   $vall='';
   if (isset($_POST['rcle'])) {
           $nofind=1;
           $vall=$_POST['rcle'];
           $reponse=$dbd->query('select * from produit where description LIKE "%'.$vall.'%"');
           $count=  $reponse->rowCount();
   }else {

           $reponse=$dbd->query('select * from produit ORDER BY id_produit DESC LIMIT 0 , 68');

     }

?>


<br><br><br>
<div class="container mb-4">

<div class="row">

<?php

while($donnes=$reponse->fetch()){

    $date= strtotime($donnes['date']) ;
    ?>

              <div class="col-lg-3  col-md-6 mb-3">

                  <div class="card cdd" style="height:18rem;">
                    <div class="inner">
                      <a href="iteminfo.php?billet=<?php echo htmlspecialchars($donnes['id_produit']);?>" target="_blank" style="dicoration :none">
                         <img class="card-img-top opc" src="imagesProd/<?php if(empty($donnes['image'])){
                                                     echo'image.png';}echo htmlspecialchars($donnes['image']);?>"style="height:150px" /></a>
                    </div>


                   <div class="card-body">
                     <h6 class="text-success"><?php echo htmlspecialchars($donnes['prix']); ?> DA <i class="text-primary fa fa-check-square"style="float:right"></i></h6>
                   <p class="card-text"><?php echo htmlspecialchars($donnes['description']); ?></p>
                   <small class="text-muted" style="float:right"><?php echo date('F j',$date) ; ?></small>
                   <small class="text-muted">Habiba.com</small>
                    <!-- <a class="card-link" href="#">About Me</a>  htanrigalha -->
                   </div>

                 </div>

               </div>


             <?php

              }

               $reponse->closeCursor();

             ?>
             <?php
                if ($nofind == 1 and $count == 0) {
             ?>

               <img src="images/zero.png" alt="" style="margin:100px;">
               <h4>Aucun résultat pour <?php echo $vall; ?></h4>
               <p>Essayez de vérifier votre orthographe ou d’utiliser des termes plus généraux.</p>


           <?php } ?>

</div><!-- row -->

</div><!-- container -->

<?php include('include/footer.php'); ?>
