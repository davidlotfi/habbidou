
 <?php
   //include('include/Connexion.php');
   include('include/header.php');
   include('menu_categorie.php');
   include('slider.php');

      $reponse=$dbd->query('select * from produit ORDER BY id_produit DESC LIMIT 0 , 68');


  ?>

     <div class="container mb-4">
        <div class="card">
          <div class="card-body">
              <h4 class="card-title text-center">Nos catégories</h4>
          </div>
        </div>
    </div>

     <div class="container mb-4">
        <div class="row">
            <div class="col-lg-5">
               <div class="card">
                   <div class="card-body">
                     <h5 class="card-title">High-Tech</h5>
                     <div class="text-center">
                          <img src="images/imag.jpg" alt="">
                     </div>
                   </div>
               </div>
             </div>

            <div class="col-lg-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Cuisine et Maison</h5>
                    <div class="text-center">
                         <img src="images/cuisin.jpg" alt="">
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-lg-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Your best experience</h5>
                      <div class="text-center">
                        <p><img src="images/ssh.jpg" alt=""></p>
                      </div>
                      <a href="renewed.php" class="">Découvrez</a>
                    </div>
                  </div>
            </div>

         </div><!-- fin row -->
      </div><!-- fin container -->

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
                        <p class="card-text git-text"><?php echo htmlspecialchars($donnes['description']); ?></p>
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

     </div><!-- row -->

 </div><!-- container -->

<?php include('include/footer.php'); ?>
